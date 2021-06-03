/*!
  * Bootstrap v4.6.0 (https://getbootstrap.com/)
  * Copyright 2011-2021 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
  */
 $(document).ready(function(){  
  var form_count = 1, form_count_form, next_form, total_forms;
  total_forms = $("fieldset").length;  
  $(".next").click(function(){
    form_count_form = $(this).parent();
    next_form = $(this).parent().next();
    next_form.show();
    form_count_form.hide();
    setProgressBar(++form_count);
  });  
  $(".previous").click(function(){
    form_count_form = $(this).parent();
    next_form = $(this).parent().prev();
    next_form.show();
    form_count_form.hide();
    setProgressBar(--form_count);
  });
  setProgressBar(form_count);  
  function setProgressBar(curStep){
    var percent = parseFloat(100 / total_forms) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  } 
  // Handle form submit and validation
  $( "#user_form" ).submit(function(event) {    
	var error_message = '';
	if(!$("#email").val()) {
		error_message+="Please Fill Email Address";
	}
	if(!$("#password").val()) {
		error_message+="<br>Please Fill Password";
	}
	if(!$("#mobile").val()) {
		error_message+="<br>Please Fill Mobile Number";
	}
	// Display error if any else submit form
	if(error_message) {
		$('.alert-success').removeClass('hide').html(error_message);
		return false;
	} else {
		return true;	
	}    
  });  
});


  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.6.0): util.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Private TransitionEnd Helpers
   * ------------------------------------------------------------------------
   */

 
//# sourceMappingURL=bootstrap.js.map
