<?php

namespace App\Http\Controllers\Qualification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;
use CountryState;
use DB;
use Auth;
use App\User;
use App\qualificationModel\personal_detail;
use App\qualificationModel\work_experience;
use App\qualificationModel\describe_yourself;
use App\qualificationModel\education_detail;
use App\qualificationModel\key_skill;
use App\qualificationModel\preliminary_education;
use App\qualificationModel\previous_experience;


class QualificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $data['country'] = CountryState::getCountries();
        return view('user_detail/QualificationForm', $data);
    }


    public function edit_profile(){
        $data['country'] = CountryState::getCountries();
        $id = Auth::user()->id;
        $data['personal_detail'] = personal_detail::where('users_id', $id)->get();
        $data['work_experience'] = work_experience::where('users_id', $id)->get();
        $data['describe_yourself'] = describe_yourself::where('users_id', $id)->get();
        $data['education_detail'] = education_detail::where('users_id', $id)->get();
        $data['key_skill'] = key_skill::where('users_id', $id)->get();
        $data['preliminary_education'] = preliminary_education::where('users_id', $id)->get();
        $data['previous_experience'] = previous_experience::where('users_id', $id)->get();
        return view('user_detail/EditQualificationForm', $data);
    }


    public function state($data){
       $state = CountryState::getStates($data);
        return response()->json($state);
    }
    public function city(){
        $string = file_get_contents(base_path().'/resources/assets/js/cities.json');   
        $json_file = json_decode($string, true);
        return response()->json($json_file);
    }

    public function save_profile(Request $request){

    	$current_salary_annual = implode(", ", $request['current_salary_annual']) ;
    	$start_work_duration = implode(", ", $request['start_work_duration']) ;
    	$end_work_duration = implode(", ", $request['end_work_duration']) ;
///============= Personal Detail =============///

        if($request->hasFile('profile')){
        $avatar = $request->file('profile');
        $imageName = $request->first_name.time().'.' .$avatar->getClientOriginalExtension();
        $avatar->move('uploads', $imageName);
        $fileName = Image::make(sprintf('uploads/%s', $imageName))->resize(187, 160)->save();
    }
    else{
        
        $imageName = $request['old_avatar'];
    }


        $personal_data = [
            'users_id' => $request['users_id'],
            'aadhar_no' => $request['aadhar_no'],
            'first_name' => $request['first_name'],
            'middle_name' => $request['middle_name'],
            'last_name' => $request['last_name'],
            'gender' => $request['gender'],
            'dob' => $request['dob'],
            'place_of_birth' => $request['place_of_birth'],
            'current_location' => $request['current_location'],
            'country' => $request['country'],
            'mobile_no' => $request['mobile_no'],
            'profile' => $imageName

        ];
    
    $personal_datail= $this->personal_data($personal_data);
///============= END Personal Detail =============///

        $data = $request['first_name'].' '.$request['middle_name'].' '.$request['last_name']; 
        $dataauth = preg_replace('/(\s)+/', ' ', $data);
        $authuser =  [
                'name' => $dataauth,
                'avatar' => $imageName
            ];
        $user = $this->authuser($authuser);
///============= Work Experience =============///
        $work_experience = [
            'users_id' => $request['users_id'],
            'position_level' => $request['position_level'],
            'currently_working' => $request['currently_working'],
            'work_job_title' => $request['work_job_title'],
            'work_company_name' => $request['work_company_name'],
            'work_industry' => $request['work_industry'],
            'work_functional_area' => $request['work_functional_area'],
            'work_employer' => $request['work_employer'],
            'current_salary_annual' => $current_salary_annual,
            'start_work_duration' => $start_work_duration,
            'end_work_duration' => $end_work_duration

        ];
    $work_data= $this->work_experience($work_experience);
///============= END Work Experience =============///

///============= Previous Experience =============///
        for ($i = 0; $i < count($request['pre_job_title']); $i++) {

        $pre_job_title = $request['pre_job_title'][$i];
        $pre_company_name = $request['pre_company_name'][$i];
        $pre_industry = $request['pre_industry'][$i];
        $pre_functional_area = $request['pre_functional_area'][$i];

        $start_pre_duration =$request['start_pre_duration'][2*$i].','.$request['start_pre_duration'][(2*$i)+1];

        $end_pre_duration = $request['end_pre_duration'][2*$i].','.$request['end_pre_duration'][(2*$i)+1];

        $pre_employer = $request['pre_employer'][$i];

        $pre_total_exp = $request['pre_total_exp'][2*$i].','.$request['pre_total_exp'][(2*$i)+1];
        $pre_salary = $request['pre_salary'][2*$i].','.$request['pre_salary'][(2*$i)+1];

        $previous_experience = [
            'users_id' => $request['users_id'],
            'pre_job_title' => $pre_job_title,
            'pre_company_name' => $pre_company_name,
            'pre_industry' => $pre_industry,
            'pre_functional_area' => $pre_functional_area,
            'start_pre_duration' => $start_pre_duration,
            'end_pre_duration' => $end_pre_duration,
            'pre_employer' => $pre_employer,
            'pre_total_exp' => $pre_total_exp,
            'pre_salary' => $pre_salary

        ];
    $pre_exp_data= $this->previous_experience($previous_experience);
    }

///============= End Previous Experience =============///

///============= Education Detail =============///
        $education_detail = [
            'users_id' => $request['users_id'],
            'highest_qualification' => $request['highest_qualification'],
            'edu_specialized' => $request['edu_specialized'],
            'institute_name' => $request['institute_name'],
            'higher_passout_year' => $request['higher_passout_year'],
            'higher_course_type' => $request['higher_course_type']

        ];
    $higher_edu_data= $this->education_detail($education_detail);

///============= End Education Detail =============///

///============= Preliminary Education =============///

        for ($i = 0; $i < count($request['pre_qualification']); $i++) {

    		$pre_qualification = $request['pre_qualification'][$i];
    		$pre_edu_specialized = $request['pre_edu_specialized'][$i];
    		$pre_institute = $request['pre_institute'][$i];
    		$pre_country = $request['pre_country'][$i];

    		$pre_state = $request['pre_state'][$i];
    		$pre_distt = $request['pre_distt'][$i];
    		$pre_passout_year = $request['pre_passout_year'][$i];
    		$pre_course_type = $request['pre_course_type'][$i];

        $preliminary_education = [
            'users_id' => $request['users_id'],
            'pre_qualification' => $pre_qualification,
            'pre_edu_specialized' => $pre_edu_specialized,
            'pre_institute' => $pre_institute,
            'pre_country' => $pre_country,
            'pre_state' => $pre_state,
            'pre_distt' => $pre_distt,
            'pre_passout_year' => $pre_passout_year,
            'pre_course_type' => $pre_course_type

        ];
    $pre_edu_data= $this->preliminary_education($preliminary_education);
    }

///============= End Preliminary Education =============///

///============= Describe Yourself =============///

        $describe_yourself = [
            'users_id' => $request['users_id'],
            'describe_yourself' => $request['describe_yourself']
        ];
    $user_describe_data= $this->describe_yourself($describe_yourself);
///============= End Describe Yourself =============///

///============= Key Skill =============///
        for ($i = 0; $i < count($request['key_skill']); $i++) {

    		$key_skill = $request['key_skill'][$i];
    		$key_skill_experience =  $request['key_skill_experience'][$i];
    	
        $key_skill = [
            'users_id' => $request['users_id'],
            'key_skill' => $key_skill,
            'key_skill_experience' => $key_skill_experience

        ];
        $key_skill_data = $this->key_skill($key_skill);
    }

///============= End Key Skill =============///

        return Redirect('/dashboard');

    }
///============= Update Auth User Detail =============///
public function authuser($authuser){
    
        $profile = User::where('id',Auth::user()->id)->get();
          if($profile->isEmpty()){
                User::create($authuser);
        }
         else{
            User::where('id',Auth::user()->id)->update($authuser);
        }
    }
///============= End Update Auth User Detail =============///

///============= Personal Detail Function =============///
    public function personal_data($personal_data){
            
        $profile = personal_detail::where('users_id',$personal_data['users_id'])->get();
         if($profile->isEmpty()){
            personal_detail::create($personal_data);
        }
        else{
           personal_detail::where('users_id',$personal_data['users_id'])->update($personal_data);
        }
    }
///============= End Personal Detail Function =============///

///============= Work Experience Function =============///
    public function work_experience($work_experience){
            $profile = work_experience::where('users_id',$work_experience['users_id'])->get();
             if($profile->isEmpty()){
                work_experience::create($work_experience);
             }
             else{
                $data=work_experience::where('users_id',$work_experience['users_id'])->update($work_experience);
             }
        }
///============= End Work Experience Function =============///

///============= Previous Experience Function =============///
    public function previous_experience($previous_experience){
         $profile = previous_experience::where('id',$previous_experience['users_id'])->get();
        if($profile->isEmpty()){
            previous_experience::create($previous_experience);
         }
         else{
            $data=previous_experience::where('id',$previous_experience['users_id'])->update($previous_experience);
         }        
    }
///============= End Previous Experience Function =============///

///============= Education Detail Function =============///
    public function education_detail($education_detail){
        $profile = education_detail::where('users_id',$education_detail['users_id'])->get();
         if($profile->isEmpty()){
            education_detail::create($education_detail);
         }
         else{
            $data=education_detail::where('users_id',$education_detail['users_id'])->update($education_detail);
         }
    }
///============= End Education Detail Function =============///

///============= Preliminary Education Function =============///
    
    public function preliminary_education($preliminary_education){
        $profile = preliminary_education::where('users_id',$preliminary_education['users_id'])->get();
        if($profile->isEmpty()){
        preliminary_education::create($preliminary_education);
        }
        else{
            $data=preliminary_education::where('users_id',$preliminary_education['users_id'])->update($preliminary_education);
         }
    }
///============= End Preliminary Education Function =============///

///============= Describe Yourself Function =============///
    public function describe_yourself($describe_yourself){
        $profile = describe_yourself::where('users_id',$describe_yourself['users_id'])->get();
         if($profile->isEmpty()){
            describe_yourself::create($describe_yourself);
         }
         else{
            $data=describe_yourself::where('users_id',$describe_yourself['users_id'])->update($describe_yourself);
         }
    }
///============= End Describe Yourself Function =============///

///============= Key Skill Function =============///
    public function key_skill($key_skill){
        $profile = key_skill::where('users_id',$key_skill['users_id'])->get();
        if($profile->isEmpty()){
        key_skill::create($key_skill);
        }
        else{
            $data=key_skill::where('users_id',$key_skill['users_id'])->update($key_skill);
         }
    }
///============= End Key Skill Function =============///

}