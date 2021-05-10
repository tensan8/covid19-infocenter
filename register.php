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
        #regForm label {display: block;}
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
                                    <form action="reg_check.php" method="post">
                                    <fieldset>
                                    <legend><h3> Check Your Registration</h3> </legend>
                                    <label>
                                    NRIC:
                                        <input type="text" 
                                               name="check_nric" 
                                               placeholder="930209-61-0028" 
                                               pattern="(([[1-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))-([0-9]{2})-([0-9]{4})" 
                                               required="required"></input>
                                    </label>
                                        <button type="submit">Check</button>
                                    </form> 
                                    </fieldset>
                                    </div>
                                    
                                    <div class="pl-md-0 col-md-3 d-none d-md-block">
                                                <div class="text-center">
                                                    <img src="home_files/clipboard.png" 
                                                         alt="Clipboard with checkmarks" 
                                                         class="card-img-top 
                                                                img-fluid 
                                                                p-0 
                                                                bg-primary 
                                                                card-img-orig 
                                                                d-none 
                                                                d-md-block 
                                                                rounded-0"/>
                                                </div>
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="card-title h3 mb-3 text-left">Register for your vaccine</h3>
                                                <form id="regForm" method="post" action="reg_process.php">
                                                    <fieldset>
                                                        <legend> Personal Details: </legend>
                                                        <label>Name:
                                                            <input type="text" 
                                                                   name="input_name" 
                                                                   placeholder="name" 
                                                                   pattern="[a-zA-Z]+$"    
                                                                   required="required">
                                                        </label>  
                                                        <label>Phone Number:
                                                            <input type="text" 
                                                                   name="input_phonenumber" 
                                                                   placeholder="[+60]1029304387" 
                                                                   pattern="^(\+?6?01)[0-46-9]-*[0-9]{7,8}$"  
                                                                   required="required">
                                                        </label>   
                                                        <label>IC/Passport Number:
                                                            <input type="text" 
                                                                   name="input_nric" 
                                                                   placeholder="930209-61-0028" 
                                                                   pattern="(([[1-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))-([0-9]{2})-([0-9]{4})" 
                                                                   required="required">
                                                        </label>
                                                            
                                                        <label> Date of birth:
                                                            <input type="text" 
                                                                   name="input_dob" 
                                                                   name="pdob" 
                                                                   placeholder="DD/MM/YYYY" 
                                                                   pattern="^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$"
                                                                   required="required">
                                                        </label>

                                                        <label> Address:
                                                            <input type="text" 
                                                                   name="input_address" 
                                                                   name="pdob" 
                                                                   placeholder="No.XX, name of street, 
                                                                                XXXXXX, city, state, country" 
                                                                   required="required">
                                                        </label>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>Age group</legend>
                                                        <label>
                                                            <input type="radio" 
                                                                   name="input_agegroup" 
                                                                   value="Under 18 years old"/>
                                                                        Under 18 years old
                                                        </label>
                                                        <label>
                                                            <input type="radio" 
                                                                   name="input_agegroup" 
                                                                   value="18 to 30 years old"/>
                                                                        18 to 30 years old
                                                        </label>
                                                        <label>
                                                            <input type="radio" 
                                                                   name="input_agegroup" 
                                                                   value="30 to 40 years old"/>
                                                                        30 to 40 years old
                                                        </label>
                                                        <label>
                                                            <input type="radio" 
                                                                   name="input_agegroup" 
                                                                   value="40 to 50 years old"/>
                                                                        40 to 50 years old
                                                        </label>
                                                        <label>
                                                            <input type="radio" 
                                                                   name="input_agegroup" 
                                                                   value="Over 50 years old"/>
                                                                        Over 50 years old
                                                        </label>
                                                    </fieldset>   
                                                        
                                                    <fieldset>
                                                        <legend>
                                                            List of Pre-existing conditions 
                                                            (Skip if this doesn't apply to you)
                                                        </legend> 
                                                        <label>
                                                            <input type="checkbox" 
                                                                   name="input_pre-existing_conditions[]" 
                                                                   value="Diabetes"/>
                                                                        Diabetes
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" 
                                                                   name="input_pre-existing_conditions[]" 
                                                                   value="High Blood Pressure"/>
                                                                        High Blood Pressure
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" 
                                                                   name="input_pre-existing_conditions[]" 
                                                                   value="High Cholesterol"/>
                                                                        High Cholesterol
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" 
                                                                   name="input_pre-existing_conditions[]" 
                                                                   value="Heart Disease"/>
                                                                        Heart Disease
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" 
                                                                   name="input_pre-existing_conditions[]" 
                                                                   value="Asthma (Or any other related 
                                                                          Long-term Lung Disease)"/>
                                                                        Asthma (Or any other related 
                                                                        Long-term Lung Disease)
                                                        </label>

                                                        <p>
                                                            <label>
                                                                Share your questions or concerns regarding the vaccine
                                                                <br/>
                                                                <textarea  name="input_questions" 
                                                                           placeholder="long text" 
                                                                           rows="8" 
                                                                           cols="30">Enter comments here
                                                                </textarea>
                                                            </label>
                                                        </p>
                                                    </fieldset>
                                                        
                                                    <fieldset>
                                                        <legend>
                                                            Preferred Date and time for Vaccine appointment
                                                        </legend> 
                                                        <p>
                                                            <label>Date
                                                                <input type="date" 
                                                                       name="input_datetime"  
                                                                       placeholder="DD/MM/YYYY" 
                                                                       pattern="\d{1,2}/\d{1,2}/\d{4}"
                                                                       max="2021-12-31" 
                                                                       min="2021-05-10"/>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label>Time
                                                                <input type="time"  
                                                                       name="input_datetime" 
                                                                       placeholder="HH:MM" 
                                                                       pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" 
                                                                       id="12h"
                                                                       min="08:00" 
                                                                       max="18:00"/>
                                                            </label>
                                                        </p>   
                                                    </fieldset>
                                                            
                                                    <p>
                                                        <button type="submit">submit</button>
                                                        <input type="reset" value="reset"/  
                                                    </p>
                                                </form>
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
                    <a href="https://bit.ly/3efk3I6">
                            <img alt="" src="images/who.png">
                    </a>
                    <a href="https://bit.ly/339D2xl" >
                            <img alt="" src="images/cdc.jpg">
                    </a>
                </div>
                <?php include_once 'footer.php'; ?>
            </div>
    </div>
    
</body>
</html>