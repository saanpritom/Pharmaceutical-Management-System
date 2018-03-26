<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pharmaceuticals Management System</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet"> 
    <link href="../css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link href="../style.css" rel="stylesheet" type="text/css"/>
    
</head><!--/head-->
<body>
    <!--.preloader-->
        <div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
    <!--/.preloader-->
    <header id="header"> 
    <div class="container">
        <div class="container-inner">
            <div class="logo pull-left">
                <a class="pull-left logo" href="../index.html">
                    <h1>Pharmaceutical Management System</h1>
                </a>
            </div>
            <div class="menu pull-right">
                <a href="../index.html" class="nav-button">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </a> 
            </div>
        </div>
    </div>
</header> <!--/#header-->
<section id="welcome-page">
    <div class="container-inner">
        <div class="col-lg-12">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="content">
                    <div class="row">
                        <div class="heading">
                            <h2>Pharmasists Sign Up.  <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span></h2> 
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="panel">
                            <!-- Default panel contents -->
                            <div class="panel-heading" id="signup_panel_header">
                                <div class="table">
                                    <table class="table table-responsive">
                                        <thead id="signup_header_declare">
                                        <th>
                                        <h3>Fill the form</h3>
                                        </th>
                                        <th>
                                        <p style="color: black;">---------------------------------------------------------</p>
                                        </th>
                                        <th>
                                        <p style="color: red; font-style: italic;">
                                            * marked fields are mandatory to fill.
                                        </p>
                                        </th>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-body" id="signup_panel_body">
                                <form name="signup_form" action="customer_back_signup.php" method="POST" enctype="multipart/form-data">
                                <div class="table">
                                    <table class="table table-responsive">
                                        <thead></thead>
                                        <tbody id="signup_panel_body_table">
                                            <tr>
                                                <td>
                                                   <div class="form-group required">
                                                       <label class="control-label" for="exampleInputFirstname">First Name</label>
                                                        <input name="firstname" type="text" class="form-control" id="exampleInputFirstname" placeholder="First Name">
                                                        <div class="alert firstname_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Enter a valid name.
                                                        </div>
                                                        <div class="alert firstname_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this is right.
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td>
                                                   <div class="form-group required">
                                                        <label class="control-label" for="exampleInputLastname">Last Name</label>
                                                        <input name="lastname" type="text" class="form-control" id="exampleInputLastname" placeholder="Last Name">
                                                        <div class="alert lastname_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Enter a valid name.
                                                        </div>
                                                        <div class="alert lastname_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this is right.
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <div class="form-group required">
                                                        <label class="control-label" for="exampleInputCompanyname">Organization Name</label>
                                                        <input name="c_name" type="text" class="form-control" id="exampleInputCompanyname" placeholder="Company Name">
                                                        <div class="alert cname_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Field is empty.
                                                        </div>
                                                        <div class="alert cname_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this name is right.
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td>
                                                   <div class="form-group required">
                                                        <label class="control-label" for="exampleInpututrnumber">Organization TIN Number</label>
                                                        <input name="ut_number" type="text" class="form-control" id="exampleInputUtrnumber" placeholder="TIN Number">
                                                        <div class="alert ut_number_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Enter a valid number.
                                                        </div>
                                                        <div class="alert ut_number_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this number is right.
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <div class="form-group required">
                                                       <label class="control-label" for="exampleInputCompanyaddress">Organization Address</label>
                                                        <input name="c_address" type="text" class="form-control" id="exampleInputCompanyaddress" placeholder="Company Address">
                                                        <div class="alert caddress_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Field is empty.
                                                        </div>
                                                        <div class="alert caddress_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this address is right.
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td>
                                                    <div class="form-group required">
                                                       <label class="control-label" for="exampleInputCity">City</label>
                                                        <input name="city" type="text" class="form-control" id="exampleInputCity" placeholder="Current City">
                                                        <div class="alert city_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Field is empty.
                                                        </div>
                                                        <div class="alert city_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this city is ok.
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <div class="form-group">
                                                       <label for="exampleInputState">State</label>
                                                        <input name="state" type="text" class="form-control" id="exampleInputState" placeholder="State">
                                                    </div> 
                                                </td>
                                                <td>
                                                    <div class="form-group required">
                                                       <label class="control-label" for="exampleInputZipcode">Zip Code</label>
                                                        <input name="zipcode" type="text" class="form-control" id="exampleInputZipcode" placeholder="Zip Code">
                                                        <div class="alert zipcode_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Enter a valid zip code.
                                                        </div>
                                                        <div class="alert zipcode_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this Zip Code is right.
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <div class="form-group required">
                                                       <label class="control-label" for="exampleInputCountry">Country</label>
                                                        <select name="country" class="form-control" id="exampleInputCountry">
                                                            <option>Australia</option>
                                                            <option>Argentina</option>
                                                            <option>Bangladesh</option>
                                                            <option>Brazil</option>
                                                            <option>China</option>
                                                            <option>Canada</option>
                                                            <option>France</option>
                                                            <option>Germany</option>
                                                            <option>India</option>
                                                            <option>Italy</option>
                                                            <option>Japan</option>
                                                            <option>Russia</option>
                                                            <option>Spain</option>
                                                            <option>UAE</option>
                                                            <option>UK</option>
                                                            <option>USA</option>
                                                        </select>
                                                    </div> 
                                                </td>
                                                <td>
                                                    <div class="form-group required">
                                                       <label class="control-label" for="exampleInputTelnumber">Telephone Number</label>
                                                       <input name="tel_number" type="text" class="form-control" id="exampleInputTelnumber" placeholder="Telephone Number">
                                                       <div class="alert tel_number_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Enter a valid Number.
                                                        </div>
                                                        <div class="alert tel_number_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this Number is right.
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <div class="form-group required">
                                                       <label class="control-label" for="exampleInputDesignation">Designation</label>
                                                       <input name="designation" type="text" class="form-control" id="exampleInputDesignation" placeholder="Designation">
                                                       <div class="alert designation_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Field is empty.
                                                        </div>
                                                        <div class="alert designation_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this is ok.
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                       <label for="exampleInputWebsite">Gender</label>
                                                        <label class="radio-inline"><input type="radio" name="optradio" value="male">Male</label>
														<label class="radio-inline"><input type="radio" name="optradio" value="female">Female</label>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="well log_info_direction">
                                                        <b>Log in Info.</b>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group required">
                                                       <label class="control-label" for="exampleInputUsername">Username</label>
                                                        <input name="username" type="text" class="form-control" id="exampleInputUsername" placeholder="Min 5 & Max 8 charcters">
                                                        <div class="alert username_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Min 5 & Max 8 Characters.
                                                        </div>
                                                        <div class="alert username_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this is ok.
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <div class="form-group required">
                                                       <label class="control-label" for="exampleInputEmail">E-mail</label>
                                                       <input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="E-mail">
                                                       <div class="alert email_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Enter a valid email.
                                                        </div>
                                                        <div class="alert email_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                            Think this email is ok.
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group required">
                                                       <label class="control-label" for="exampleInputConemail">Confirm E-mail</label>
                                                        <input name="conemail" type="email" class="form-control" id="exampleInputConemail" placeholder="E-mail">
                                                        <div class="alert conemail_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Email not matched.
                                                        </div>
                                                        <div class="alert fconemail_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Enter the first field.
                                                        </div>
                                                        <div class="alert conemail_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                                Email matched.
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <div class="form-group required">
                                                       <label class="control-label" for="exampleInputPassword">Password</label>
                                                       <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                                                       <label>8 characters min</label>
                                                       <div class="alert password_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Min 8 characters.
                                                        </div>
                                                        <div class="alert password_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                                Think its ok.
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group required">
                                                       <label class="control-label" for="exampleInputConpassword">Confirm Password</label>
                                                        <input name="conpassword" type="password" class="form-control" id="exampleInputConpassword" placeholder="Password">
                                                        <div class="alert conpassword_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Password not matched.
                                                        </div>
                                                        <div class="alert fconpassword_wrong" role="alert" style="color: red;">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                            <span class="sr-only">Error:</span>
                                                                Enter the first field.
                                                        </div>
                                                        <div class="alert conpassword_right" role="alert" style="color: green;">
                                                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                            <span class="sr-only">Success:</span>
                                                                Password matched.
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group required">
                                                       <label class="control-label" for="exampleInputConpassword">Upload Your Photo</label>
                                                        <input name="feature_image" type="file" class="form-control" id="exampleInputImage">
                                                    </div> 
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-8">
                                                            <input id="signup_button"  type="submit" class="btn btn-lg btn-transparent" value="Sign Up">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="ins">
                                                        <p style="color: red" id="wrong_warning"><b>Not properly filled up.</b></p>
                                                        <p style="color: green" id="right_warning"><b>Filled up properly.</b></p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        </div></div>
</section>
<footer id="footer" class="text-center">
    <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>Copyright Reserved by PB
</footer>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="../js/form_validation.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>