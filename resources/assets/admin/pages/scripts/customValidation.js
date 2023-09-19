
$(document).ready(function() {

$("#form_sample_1").validate({
 
        rules: {
            "current_salary_annual[]": "required"
        },
        messages: {
            "current_salary_annual[]": "Please enter name",
        }
    });
});