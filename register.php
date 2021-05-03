<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
       
	<title>Register | COVID-19 Info Center</title>
    <style type="text/css">
		#footer1 a:link { text-decoration: none; }
		#footer1 a img{ width: 25px; height: 25px; margin-left: 4px; }
		#footer1 h5 { margin-top: 0.75rem; }
		#footer1  { padding-top: 0.95rem; }
	</style>
    <meta name="description" content="">
    <meta name="keywords" content="">	
</head>

<body>
    <?php include_once 'header.php'; ?>
	       
    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">
    
        <!-- Content -->
        <main class="col-xl-9 order-xl-2">
            
            <div class="row">
            
                <div class="col content">
                
                    <div class="row">
                        <br>
                        <h2 id="content" class="open d-lg-block">Register for Vaccination</h2>
                        <br>
                        <br>
                        <br>
                        
                    </div>
                    <div class="cdc-2020-bar container">
							
                    </div>
                 
                    <div class="syndicate">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card border-0 rounded-0 mb-3">
                                    <div class="card-body bg-primary">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="card-title h3 mb-3 text-left">Register for your vaccine</h3>
                                                <form id="regForm" method="post" action="reg_process.php" novalidate="novalidate">
                                                    <fieldset>
                                                        <legend> Personal Details: </legend>
                                                        <label>Name:
                                                        <input type="text" name="input_name" placeholder="name" pattern="[a-zA-Z]+$" required="required"/></label>  
                                                        <label>Phone Number:
                                                        <input type="number" name="input_phonenumber" placeholder="[+60]1029304387" pattern="^(\+?6?01)[0-46-9]-*[0-9]{7,8}$" required="required"/ ></label>   
                                                        <label>IC/Passport Number:
                                                        <input type="number" name="input_nric" placeholder="930209-61-0028" pattern="(([[1-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))-([0-9]{2})-([0-9]{4})" required="required"/ ></label>
                                                            
                                                        <label> Date of birth:
                                                        <input type="text" name="input_dob" name="pdob" placeholder="DD/MM/YYYY" required="required"/></label>

                                                        <label> Address:
                                                        <input type="text" name="input_address" name="pdob" placeholder="No.XX, name of street, XXXXXX, city, state, country" required="required"/></label>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>Age group</legend>
                                                        <label> <input type="radio" name="input_agegroup"/>Under 18 years old</label>
                                                        <label><input type="radio" name="input_agegroup"/>18 to 30 years old</label>
                                                        <label><input type="radio" name="input_agegroup"/>30 to 40 years old</label>
                                                        <label><input type="radio" name="input_agegroup"/>40 to 50 years old</label>
                                                        <label><input type="radio" name="input_agegroup"/>Over 50 years old</label>
                                                    </fieldset>   
                                                        
                                                    <fieldset>
                                                        <legend>List of Pre-existing conditions (Skip if this doesn't apply to you)</legend> 
                                                        <label><input type="checkbox" name="input_pre-existing_conditions" value="diabetes"/>Diabetes</label>
                                                        <label><input type="checkbox" name="input_pre-existing_conditions"value="hbp"/>High Blood Pressure</label>
                                                        <label><input type="checkbox" name="input_pre-existing_conditions" value="highcholesterol"/>High Cholesterol</label>
                                                        <label><input type="checkbox" name="input_pre-existing_conditions" value="heartdisease"/>Heart Disease</label>
                                                        <label><input type="checkbox" name="input_pre-existing_conditions" value="asthma"/>Asthma (Or any other related Long-term Lung Disease)</label>

                                                        <p>
                                                            <label>Share your questions or concerns regarding the vaccine<br/>
                                                                <textarea  name="input_questions" placeholder="long text" rows="8" cols="30">Enter comments here</textarea>
                                                            </label>
                                                        </p>
                                                    </fieldset>
                                                        
                                                    <fieldset>
                                                        <legend>Preferred Date and time for Vaccine appointment</legend> 
                                                        <p><label>Date<input type="date" name="input_datetime"  placeholder="DD/MM/YYYY" pattern="\d{1,2}/\d{1,2}/\d{4}"/></label></p>
                                                        <p><label>Time<input type="time"  name="input_datetime" placeholder="HH:MM" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" id="12h"/></label></p>   
                                                    </fieldset>
                                                            
                                                    <p>
                                                        <input type="submit" value="Submit"/>
                                                        <input type="reset" value="reset"/>  
                                                    </p>
                                                </form>
                                            </div>
                                            <div class="pl-md-0 col-md-3 d-none d-md-block">
                                                <div class="text-center">
                                                    <img src="home_files/clipboard.png" alt="Clipboard with checkmarks" class="card-img-top img-fluid p-0 bg-primary card-img-orig d-none d-md-block rounded-0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="row-fluid">
                                    <div class="vc_empty_space col-12 pt-3 pb-3">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
        </main>
    						
    </div> 
            
    <div class="container-fluid">
        <div class="container">
        
            <div class="card-body bg-quaternary" id="footer1">
                <div class="links">
                <h5>For More Information</h5>
                    <a href="https://www.who.int/news-room/q-a-detail/coronavirus-disease-(covid-19)-vaccines?adgroupsurvey={adgroupsurvey}&gclid=Cj0KCQjwmcWDBhCOARIsALgJ2Qd9xEiDYnHrXeOUcVEKjlaJpxDo9dRbQtlLEdwYn2HszC_Bvppp4doaAgKoEALw_wcB">
                            <img alt="" src="images/who.png">
                    </a>
                    <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines.html" >
                            <img alt="" src="images/cdc.jpg">
                    </a>
                </div>
                <div>
                <h5>Disclaimer</h5>
                <p style="font-size:0.8em;">This website is created mainly for educational and non-commercial use only. It is a 
                partial fulfillment for completion of unit SWE20001 - Development Project 1 offered in 
                Swinburne University of Technology, Sarawak Campus. The web-master and author(s) do not 
                represent the business entity. The content of the pages of this website might be out-dated 
                or inaccurate, thus, the author(s) and web-master does not take any responsibility for 
                incorrect information disseminated or cited from this website.</p>
                
            </div>
        </div>
    </div>
    
</body>
</html>