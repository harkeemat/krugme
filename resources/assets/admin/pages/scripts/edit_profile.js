var i=1;
var j=1;
var k=1;

$(document).ready(function(){
///-------------- Start Previous Experience -------------///

var previous_experience=$(".previous_experience_field").html();
  $(".add_previous_experience").click(function(){
     if(i <= 3){
  $(".added_previous_experience_field").append('<div class="other_experience'+i+++'"><center><div class="portlet-title"><div class="caption"><b><big>Other Previous Experience</big></b></div></div></center><br>'+previous_experience+'</div>');
}
  
});
///-------------- End Previous Experience -------------///

///-------------- Start Preliminary Education -------------///
    var education_detail=$(".eduction_field").html();
  $(".add_other_education").click(function(){
    if(j <= 3){
    var add_edu=j++;
    $(".added_eduction_field").append('<div class="add_other_education_div'+add_edu+'"><center><div class="portlet-title"><div class="caption"><b><big>Other Education Detail</big></b></div></div></center><br>'+education_detail+'</div>');
     $(".add_other_education_div"+add_edu+" input[type=radio]").attr('name','pre_course_type'+add_edu+'');
     $(".eduction_field input:radio").attr("checked",true);
 }
 });
///-------------- End Preliminary Education -------------///

///-------------- Start Key Skills -------------///

var key_skill_field=$(".key_skill_field").html();
  $(".add_key_skill").click(function(){
    if(k <= 9){
    $(".added_key_skill_field").append('<div class="add_key_skill'+k+++'"><div class="portlet-title"><div class="caption"><br>'+key_skill_field+'</div>');
  }
  })

///-------------- End Key Skills -------------///

     //------------ get countries value ------------------//
    // $.ajax({url: "get_country", success: function(result){
    //     var data = result.split(',');
    //     for (var x = 0;x< data.length; x++) {
    //     var output='<option value="'+ data[x]+ '">' + data[x] + '</option>';
    //     $('select#country').append(output);
    //     }
    //     }
    //   })
//---------------- End countries value ------------------------//

// $("#aadhar_card").keyup(function () {
//     if (this.value.length == this.maxLength) {
//       $(this).next('aadhar_card').focus();
//     }
// });
 //------------ get STATE value ------------------//
$('#country2').on('change', function() {
 var data = this.value;
 $.ajax({
  type: "get",
  dataType: 'JSON',
  url: 'get_state/'+data+'',
  success: function (response) {
    $.each(response, function(key, value) {
    var output='<option value="'+ key + '">' + value + '</option>';
      $('select#state').append(output);
        })
      }
    })
  })
//---------------- End STATE value ------------------------//

//---------------- Get City value ------------------------//
  $.ajax({
      url: 'get_city',
      type: "get",
       success: function(response){ // What to do if we succeed
      // var city = JSON.stringify(response);
      // alert(city);
       $.each(response, function(key, value) {
       var output='<option value="'+value['city_code'] + '">' + value['name'] + '</option>';
       $('select#place_of_birth').append(output);
      })
    }
    })
//---------------- End City value ------------------------//

});
 
