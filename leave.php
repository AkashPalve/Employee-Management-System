

<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.27402" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.27402" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.27402" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.27402" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

	JotForm.init(function(){
	/*INIT-START*/
      setTimeout(function() {
          $('input_7').hint('ex: 12345678');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_4').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_5').setAttribute('tabindex',0);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("10", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("10", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
 JotForm.formatDate({date:(new Date()), dateField:$("id_"+10)});
 JotForm.displayLocalTime("input_10_hourSelect", "input_10_minuteSelect","input_10_ampm", "input_10_timeInput", false);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("11", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("11", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
 JotForm.formatDate({date:(new Date()), dateField:$("id_"+11)});
 JotForm.displayLocalTime("input_11_hourSelect", "input_11_minuteSelect","input_11_ampm", "input_11_timeInput", false);
if (window.JotForm && JotForm.accessible) $('input_12').setAttribute('tabindex',0);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Request for Leave","type":"control_head"},{"name":"submit","qid":"2","text":"Request Leave","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_fullname"},{"name":"position","qid":"4","text":"Position","type":"control_textbox"},{"name":"manager","qid":"5","text":"Manager","type":"control_textbox"},{"name":"phoneNumber6","qid":"6","text":"Phone Number","type":"control_phone"},{"name":"employeeId","qid":"7","subLabel":"8 digit employee ID","text":"Employee ID","type":"control_number"},{"name":"clickTo8","qid":"8","text":"Details of Leave","type":"control_head"},{"name":"leaveType","qid":"9","text":"Leave Type","type":"control_radio"},{"name":"leaveStart","qid":"10","text":"Leave Start","type":"control_datetime"},{"name":"leaveEnd","qid":"11","text":"Leave End","type":"control_datetime"},{"name":"comments","qid":"12","text":"Comments","type":"control_textarea"},null,{"name":"email","qid":"14","subLabel":"example@example.com","text":"Email","type":"control_email"},{"name":"managerEmail15","qid":"15","subLabel":"example@example.com","text":"Manager Email","type":"control_email"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Request for Leave","type":"control_head"},{"name":"submit","qid":"2","text":"Request Leave","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_fullname"},{"name":"position","qid":"4","text":"Position","type":"control_textbox"},{"name":"manager","qid":"5","text":"Manager","type":"control_textbox"},{"name":"phoneNumber6","qid":"6","text":"Phone Number","type":"control_phone"},{"name":"employeeId","qid":"7","subLabel":"8 digit employee ID","text":"Employee ID","type":"control_number"},{"name":"clickTo8","qid":"8","text":"Details of Leave","type":"control_head"},{"name":"leaveType","qid":"9","text":"Leave Type","type":"control_radio"},{"name":"leaveStart","qid":"10","text":"Leave Start","type":"control_datetime"},{"name":"leaveEnd","qid":"11","text":"Leave End","type":"control_datetime"},{"name":"comments","qid":"12","text":"Comments","type":"control_textarea"},null,{"name":"email","qid":"14","subLabel":"example@example.com","text":"Email","type":"control_email"},{"name":"managerEmail15","qid":"15","subLabel":"example@example.com","text":"Manager Email","type":"control_email"}]);}, 20); 
</script>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.27402" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.27402" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
        display: inline-block;
        float: left;
        text-align: left;
      
      }
    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/212440779761461/" method="post" name="form_212440779761461" id="212440779761461" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="212440779761461" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Request for Leave
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Request your leave details down below.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="first_3"> Name </label>
        <div id="cid_3" class="form-input" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="name" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="name" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Employee ID </label>
        <div id="cid_7" class="form-input" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="input_7" name="empid" data-type="input-number" class=" form-number-input form-textbox validate[Numeric]" style="width:310px" size="310" value="" placeholder="Enter Employee ID" data-component="number" aria-labelledby="label_7 sublabel_input_7" step="any" />
            <label class="form-sub-label" for="input_7" id="sublabel_input_7" style="min-height:13px" aria-hidden="false"> </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_14">
        <label class="form-label form-label-left form-label-auto" id="label_14" for="input_14"> Email </label>
        <div id="cid_14" class="form-input" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_14" name="email" class="form-textbox validate[Email]" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_14 sublabel_input_14" />
            <label class="form-sub-label" for="input_14" id="sublabel_input_14" style="min-height:13px" aria-hidden="false"></label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6_area"> Phone Number </label>
        <div id="cid_6" class="form-input" data-layout="half">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
              <input type="tel" id="input_6_area" name="phoneno" class="form-textbox" value="" data-component="areaCode" aria-labelledby="label_6 sublabel_6_area" />
              <span class="phone-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="input_6_area" id="sublabel_6_area" style="min-height:13px" aria-hidden="false"> Area Code </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="input_6_phone" name="phoneno" class="form-textbox" value="" data-component="phone" aria-labelledby="label_6 sublabel_6_phone" />
              <label class="form-sub-label" for="input_6_phone" id="sublabel_6_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> Position </label>
        <div id="cid_4" class="form-input" data-layout="half">
          <input type="text" id="input_4" name="position" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" placeholder=" " data-component="textbox" aria-labelledby="label_4" />
        </div>
      </li>
      
     
      <li id="cid_8" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-small">
          <div class="header-text httal htvam">
            <h3 id="header_8" class="form-header" data-component="header">
              Details of Leave
            </h3>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_10">
        <label class="form-label form-label-left form-label-auto" id="label_10" for="month_10"> Leave Start </label>
        <div id="cid_10" class="form-input" data-layout="half">
          <div data-wrapper-react="true" class="extended notLiteMode">
            <span class="form-sub-label-container month" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[limitDate]" id="month_10" name="q10_leaveStart[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="09" autoComplete="off" aria-labelledby="label_10 sublabel_10_month" />
              <span class="date-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="month_10" id="sublabel_10_month" style="min-height:13px" aria-hidden="false"> Month </label>
            </span>
            <span class="form-sub-label-container day" style="vertical-align:top">
              <input type="tel" class="currentDate form-textbox validate[limitDate]" id="day_10" name="q10_leaveStart[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="02" autoComplete="off" aria-labelledby="label_10 sublabel_10_day" />
              <span class="date-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="day_10" id="sublabel_10_day" style="min-height:13px" aria-hidden="false"> Day </label>
            </span>
            <span class="form-sub-label-container year" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[limitDate]" id="year_10" name="q10_leaveStart[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="2021" autoComplete="off" aria-labelledby="label_10 sublabel_10_year" />
              <label class="form-sub-label" for="year_10" id="sublabel_10_year" style="min-height:13px" aria-hidden="false"> Year </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <img class=" newDefaultTheme-dateIcon icon-seperatedMode" alt="Pick a Date" id="input_10_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="input_10_pick" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="true"> Date Picker Icon </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_11">
        <label class="form-label form-label-left form-label-auto" id="label_11" for="month_11"> Leave End </label>
        <div id="cid_11" class="form-input" data-layout="half">
          <div data-wrapper-react="true" class="extended notLiteMode">
            <span class="form-sub-label-container month" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[limitDate]" id="month_11" name="q11_leaveEnd[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="09" autoComplete="off" aria-labelledby="label_11 sublabel_11_month" />
              <span class="date-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="month_11" id="sublabel_11_month" style="min-height:13px" aria-hidden="false"> Month </label>
            </span>
            <span class="form-sub-label-container day" style="vertical-align:top">
              <input type="tel" class="currentDate form-textbox validate[limitDate]" id="day_11" name="q11_leaveEnd[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="02" autoComplete="off" aria-labelledby="label_11 sublabel_11_day" />
              <span class="date-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="day_11" id="sublabel_11_day" style="min-height:13px" aria-hidden="false"> Day </label>
            </span>
            <span class="form-sub-label-container year" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[limitDate]" id="year_11" name="q11_leaveEnd[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="2021" autoComplete="off" aria-labelledby="label_11 sublabel_11_year" />
              <label class="form-sub-label" for="year_11" id="sublabel_11_year" style="min-height:13px" aria-hidden="false"> Year </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <img class=" newDefaultTheme-dateIcon icon-seperatedMode" alt="Pick a Date" id="input_11_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="input_11_pick" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="true"> Date Picker Icon </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_9">
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> Leave Type </label>
        <div id="cid_9" class="form-input" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_9" data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_0" name="q9_leaveType" value="Vacation" />
              <label id="label_input_9_0" for="input_9_0"> Vacation </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_1" name="q9_leaveType" value="Sick" />
              <label id="label_input_9_1" for="input_9_1"> Sick </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_2" name="q9_leaveType" value="Quitting" />
              <label id="label_input_9_2" for="input_9_2"> Paid Leave </label>
            </span>
            <span class="form-radio-item formRadioOther">
              <input type="radio" class="form-radio-other form-radio" name="q9_leaveType" id="other_9" value="other" aria-label="Other" />
              <label id="label_other_9" style="text-indent:0" for="other_9"> Other </label>
              <span id="other_9_input" class="other-input-container" style="display:none">
                <input type="text" class="form-radio-other-input form-textbox" name="q9_leaveType[other]" data-otherhint="Other" size="15" id="input_9" data-placeholder="Please type another option here" placeholder="Please type another option here" />
              </span>
            </span>
          </div>
        </div>
      </li>
     
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_2" type="submit" name="request" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Request Leave
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="212440779761461" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='212440779761461'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "212440779761461-212440779761461";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6">
    <div class="formFooter-wrapper formFooter-leftSide">
      <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=212440779761461&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo/logo-new@1x.png" alt="Jotform Logo"></a>
    </div>
  
  </div>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.27402"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.27402"></script>



<?php
//echo "Welocome to Employee Leave Page";
if (isset($_POST['request']))
{
    $name = $_POST['name'];
    $emp_id=$_POST['empid'];
    $email=$_POST['email'];
    $phone_no=$_POST['phoneno'];
    $position=$_POST['position'];
}

?>