<!DOCTYPE html>
<!-- saved from url=(0076)http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html -->
<html lang="en" class="perfect-scrollbar-on"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/apple-icon.png"> -->
    <!-- <link rel="icon" type="image/png" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>IMRON PHUKET SPEEDBOAT</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Canonical SEO -->
   
    <!-- Bootstrap core CSS     -->
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css?v=<?=time()?>" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/main2.css?v=<?=time()?>" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
   

</head>

<body ng-app="myApp" ng-controller="pro">
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="white" data-image="#">
        <!-- blue-->
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="" class="simple-text">
                <img src="images/logo22.png" width="180">
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="" class="simple-text">
                    IMR
                </a>
            </div>
            <div class="sidebar-wrapper ps-container ps-theme-default ps-active-y" data-ps-id="4e3acce5-59ea-ae38-b0df-7810fd595494">
                <div class="user">
                    <div class="photo">
                        <img src="img/profile.png">
                    </div>
                    <div class="info">
                        <a >
                            USERS ADMIN
                            <!-- <b class="caret"></b> -->
                        </a>
                       
                    </div>
                </div>
                <ul class="nav">
                    <li >
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <p>HOME</p>
                        </a>
                    </li>

                    <li class="active">
                        <a href="package.php">
                            <i class="material-icons">apps</i>
                            <p>Tour package
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                       
                    </li>
                    <li>
                        <a data-toggle="collapse" href="">
                            <i class="material-icons">content_paste</i>
                            <p>Report
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                      
                    </li>
                  
                    <li>
                        <a >
                            <i class="material-icons">supervisor_account</i>
                            <p>Users
                               
                            </p>
                        </a>
                        
                    </li>
                    <li>
                        <a >
                            <i class="material-icons">note</i>
                            <p>Logs
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                        
                    </li>
                    <li>
                        <a >
                            <i class="material-icons">notifications</i>
                            <p>Notifications
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                       
                    </li>
                    
                </ul>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 563px; right: 0px;">
                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 435px;"></div>
            </div>
            </div>
        <!-- <div class="sidebar-background" style="background-image: url(http://demos.creative-tim.com/material-dashboard-pro/assets/img/sidebar-1.jpg)" ></div> --></div>
        <div class="main-panel" style="overflow-y: scroll;" >
           
           <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""> New Tour package </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                           
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                       
                                    </p>
                                </a>
                              
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                     <i class="material-icons" > person</i>
                                    <p class="hidden-lg hidden-md">Setting
                                <!-- <b class="caret"></b> -->
                                        </p>
                                    <!-- <p class="hidden-lg hidden-md"> -->
                                    <!-- 
                                        <b class="caret"></b> -->
                                    <!-- </p> -->
                                <div class="ripple-container"></div></a>
                                <ul class="dropdown-menu">
                                    <li class="adjustments-line">
                                        <a href="#"> <div class="text-center">
                                         <p class="">Profile</p>
                                         </div>
                                         </a>
                                    </li>

                                    <li class="adjustments-line" ng-click="logout()">
                                            <a  class="switch-trigger">
                                                <div class="text-center">
                                                   <p>Logout</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <!-- <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Search" style="background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#fff, #fff);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    transition: background 0s ease-out;
    float: none;
    box-shadow: none;
    border-radius: 0;
    font-weight: 400;
    border: navajowhite;">
                                <span class="material-input" ></span>
                            <span class="material-input"></span></div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon" style="">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form> -->
                       
                    </div>
                </div>
            </nav>
            <div class="content" style="margin-top: 0;padding-top: 0;">
                <div class="container-fluid">
                 <!-- Page Heading -->


                    
                    <div class="row" style="margin-top: 80px;">
                <div class="" style="background: #fff; padding-left: 10px;">
                    <!-- <div class="col-lg-12">
                        <h1 class="">
                           <i class="material-icons" style="font-size: 45px;">description</i> Package Detail
                            <a href="/new.html"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> New</button></a>
                        </h1>
                    </div> -->
                    <div class="navigate" >
                        <a href="package.php">
                            <button type="button" class="btn btn-default" style="background-color: #00bcd4;"><i class="fa fa-sign-out fa-fw"></i> Back</button></a>
                        <ol class="breadcrumb" style="padding: 11px;padding-bottom: 0 ">
                            <li><a href="package.php">Tour packages</a></li>
                            <li class="active">New tour package</li>
                        </ol>
                    </div>
                </div>
                </div>



                <!--  <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                        <div class="" style="font-size: 30px;  display: inline-block;  position: absolute;  margin-top: 20px;  margin-left: 10px;">
                           <i class="material-icons" style="font-size: 45px">note_add</i>  New Package
                            a href="/new.html"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> New</button></a
                        </div>
                    </div>
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> New Package </a>
                    </div>
                   
                <div class="row">
                   
                    <span class="navigate">
                        <a href="programs.php">
                            <button type="button" class="btn btn-default"><i class="fa fa-sign-out fa-fw"></i> Back</button></a>
                        <ol class="breadcrumb" style="padding: 11px;">
                            <li><a href="programs.php">Packages</a></li>
                            <li class="active">New Package</li>
                        </ol>
                    </span>
                </div> -->
                <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">  
                            <div class="" style="padding: 0 20px;">                          
                                <form class="form-group form-inline "  >
                                    <input type="hidden" value="{{token}}" name="token"/>
                                   <!--  <input type="hidden" value="{{city}}" name="city"/> -->
                                    <div class="form-inline btn-group " style="width: 100%">
                                            <label for="class" class="label-tour" style="float: left;">Province<span> :</span></label>
                                            <select name="city" id="city"  class="form-control col-md-8" required style=" border: 1px solid #ccc; border-radius: 5px;" ng-model="city">
                                                <option>Phuket</option>
                                                <option>Phang nga</option>
                                                <option>Krabi</option>
                                                <option>Phi Phi island</option>
                                                <!--<option>Standard Class</option>-->
                                            </select>
                                        </div>

                                    

                                    <br/>
                                    <div class="form-group form-inline">
                                        <label for="name" class="label-tour"><p class="dotjung">*</p>Package Name<span> :</span></label>
                                        <input type="text" class=" form-control" size="98" maxlength="200" placeholder = "Max length 200 characters" id="name" name="name" ng-model="name" required/>
                                    </div>
                                    <!-- <div class="form-group form-inline" ng-if="checkboxModel.tha==true">
                                        <label for="name" class="label-tour"><p class="dotjung">*</p>Package Name (th)<span> :</span></label>
                                        <input type="text" class=" form-control" size="98" maxlength="200" placeholder = "Max length 200 characters" id="name" name="name_th" required/>
                                    </div>
                                    <div class="form-group form-inline" ng-if="checkboxModel.chi==true">
                                        <label for="name" class="label-tour"><p class="dotjung">*</p>Package Name (cn)<span> :</span></label>
                                        <input type="text" class=" form-control" size="98" maxlength="200" placeholder = "Max length 200 characters" id="name" name="name_cn" required/>
                                    </div> -->
                                    <div class="form-group form-inline">
                                        <label for="short" class="label-tour"><p class="dotjung">*</p>Short Description<span> :</span></label>
                                        <textarea class=" form-control" rows="3" cols="100"  maxlength="500" placeholder = "Max length 500 characters" id="short" name="short" ng-model="short" required></textarea>
                                    </div>
                                    <!-- <div class="form-group form-inline" ng-if="checkboxModel.tha==true">
                                        <label for="short" class="label-tour"><p class="dotjung">*</p>Short Description (th)<span> :</span></label>
                                        <textarea class=" form-control" rows="3" cols="100" maxlength="500" placeholder = "Max length 500 characters" id="short" name="short_th" required></textarea>
                                    </div>
                                    <div class="form-group form-inline" ng-if="checkboxModel.chi==true">
                                        <label for="short" class="label-tour"><p class="dotjung">*</p>Short Description (cn)<span> :</span></label>
                                        <textarea class=" form-control" rows="3" cols="100" maxlength="500" placeholder = "Max length 500 characters" id="short" name="short_cn" required></textarea>
                                    </div> -->
                                    <div class="form-group form-inline" style="width: 100%">
                                        
                                        <!-- <div class="form-group  form-inline" > -->
                                            <label for="class" class="label-tour" style="float: left;">Class<span> :</span></label>
                                            <select name="class" id="class"  class="form-control col-md-8" required style=" border: 1px solid #ccc; border-radius: 5px;" ng-model="class">
                                                <option>Standard Class</option>
                                                <option>Premium Class</option>
                                                <option>First Class</option>
                                                <!--<option>Standard Class</option>-->
                                            </select>
                                        <!-- </div> -->
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="detail" class="label-tour">Detail<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="detail" ng-model="detail" name="detail"></textarea>
                                    </div>

                                   <!--  <div class="form-group form-inline" ng-if="checkboxModel.tha==true">
                                        <label for="detail" class="label-tour">Detail (th)<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="detail" name="detail_th"></textarea>
                                    </div>

                                    <div class="form-group form-inline" ng-if="checkboxModel.chi==true">
                                        <label for="detail" class="label-tour">Detail (cn)<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="detail" name="detail_cn"></textarea>
                                    </div>-->

                                    <div class="form-group form-inline">
                                        <label for="program" class="label-tour"><p class="dotjung">*</p>Program<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000"  placeholder = "Max length 3,000 characters" id="program" name="program" ng-model="program" required></textarea>
                                    </div> 
                                    <!-- <div class="form-group form-inline" ng-if="checkboxModel.tha==true">
                                        <label for="program" class="label-tour"><p class="dotjung">*</p>Program (th)<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000"  placeholder = "Max length 3,000 characters" id="program" name="program_th" required></textarea>
                                    </div>
                                    <div class="form-group form-inline" ng-if="checkboxModel.chi==true">
                                        <label for="program" class="label-tour"><p class="dotjung">*</p>Program (cn)<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000"  placeholder = "Max length 3,000 characters" id="program" name="program_cn" required></textarea>
                                    </div> -->

                                    <div class="form-group form-inline">
                                        <label for="condition" class="label-tour">Condition<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="condition" ng-model="condition" name="condition" ></textarea>
                                    </div>
                                    <!-- <div class="form-group form-inline" ng-if="checkboxModel.tha==true">
                                        <label for="condition" class="label-tour">Condition (th)<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="condition" name="condition_th"></textarea>
                                    </div>
                                    <div class="form-group form-inline" ng-if="checkboxModel.chi==true">
                                        <label for="condition" class="label-tour">Condition (cn)<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="condition" name="condition_cn"></textarea>
                                    </div> -->

                                    <div class="form-group form-inline">
                                        <label for="include" class="label-tour">Include<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="include" name="include" ng-model="include"></textarea>
                                    </div>

                                    <!-- <div class="form-group form-inline" ng-if="checkboxModel.tha==true">
                                        <label for="include" class="label-tour">Include (th)<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="include" name="include_th"></textarea>
                                    </div>
                                    <div class="form-group form-inline" ng-if="checkboxModel.chi==true">
                                        <label for="include" class="label-tour">Include (cn)<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="include" name="include_cn"></textarea>
                                    </div> -->

                                   <!--  <div class="form-group form-inline">
                                        <label for="company" class="label-tour"><p class="dotjung">*</p>Company<span> :</span></label>
                                        <select class=" form-control" id="company" name="company"  ng-model="company" required>
                                          <option value="">None</option>
                                          <option value="">imron tour</option>
                                          <option data-ng-repeat="y in company" value="{{ y.company_id }}">{{ y.company_name }}</option>
                                        </select>
                                    </div> -->




                                    <div class="form-group form-inline">
                                        <label for="contact" class="label-tour"><p class="dotjung">*</p>Contact Person<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100" maxlength="3000" placeholder = "Max length 3,000 characters" id="contact" name="contact" ng-model="contact" required></textarea>
                                    </div>

                                    <div class="form-group form-inline" >
                                        <label for="contact" class="label-tour">Note<span> :</span></label>
                                        <textarea class=" form-control" rows="10" cols="100"  maxlength="200" placeholder = "Max length 200 characters" id="contact" name="note" ng-model="note"></textarea>
                                    </div>

                                   <!--  <div class="form-group form-inline">
                                        <label class="label-tour">Additional Booking Email(s)<span> :</span></label>
                                        <input type="email" name="additionemail" id="additionemailcheck" class=" form-control" placeholder = "exam@exam.com,exam@exam.com" multiple>
                                    </div> -->

                                    <!-- <div class="form-group form-inline">
                                        <label class="label-tour"><p class="dotjung">*</p>Adult Contract Rate<span> :</span></label>
                                        <input name="AdultPrice" ng-model="AdultPrice" class=" form-control" pattern="^[0-9]+$" title="Please input number only." required size="98">
                                    </div>

                                    <div class="form-group form-inline">
                                        <label class="label-tour"><p class="dotjung">*</p>Child Contract Rate<span> :</span></label>
                                        <input name="ChildPrice" ng-model="ChildPrice"  class=" form-control" pattern="^[0-9]+$" title="Please input number only." required size="98">
                                    </div> -->
                                     <div class="form-group form-inline">
                                        <label class="label-tour"><p class="dotjung">*</p>Price<span> :</span></label>
                                        <input name="cost" ng-model="cost" class=" form-control" pattern="^[0-9]+$" title="Please input number only." required size="98">
                                    </div>
                                    <!-- <hr> -->
                                    <!-- <div class="form-group form-inline">
                                        <label class="label-tour "><p class="dotjung">*</p>Avaliable Tody<span> :</span></label>
                                        <input style="margin-left:0px;" type="radio" name="today" value="0" required> Not Avaliable<br>
                                        <input style="margin-left:174px;"  type="radio" name="today" value="1"> Avaliable<br>
                                    </div> -->
                                   <!--  <hr> -->
                                    <!-- <div class="form-group form-inline">
                                        <label class="label-tour "><p class="dotjung">*</p>Tour Type<span> :</span></label>
                                        <input style="margin-left:0px;" type="radio" name="catalog" value="1" required> Activity<br>
                                        <input style="margin-left:174px;"  type="radio" name="catalog" value="2"> Island<br>
                                        <input style="margin-left:174px;margin-top: 15px;"  type="radio" name="catalog" value="3"> Spa<br>
                                        <input style="margin-left:174px;margin-top: 15px;"  type="radio" name="catalog" value="4"> Show<br>
                                    </div> -->
                                    <!-- <hr> -->

                                    <div class="form-group " style="width: 100%" >
                                        <div class="checkbox" style="padding: 0 20px 0 0">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="echekrecommend" id="echekrecommend"><!-- <span class="checkbox-material"><span class="check"></span></span> -->RECOMMEND
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="echekpopular" id="echekpopular"><!-- <span class="checkbox-material"><span class="check"></span></span> -->POPULAR PACKAGES
                                                                </label>
                                                            </div>
                                       <!--  <div class="checkbox form-horizontal-checkbox" style="padding: 0 50px 0 170px;">
                                                    <label>
                                                        <input type="checkbox" class="checkbox" name="optionsCheckboxes"  ng-model="recomment"><span class="checkbox-material"><span class="check"></span></span> RECOMMEND
                                                    </label>
                                                </div>
                                                <div class="checkbox form-horizontal-checkbox" >
                                                    <label>
                                                        <input type="checkbox" class="checkbox" name="optionsCheckboxes" ng-model="recomment"><span class="checkbox-material"><span class="check"></span></span> POPULAR PACKAGES
                                                    </label>
                                        </div> -->
                                        
                                    </div>
                                    <hr/>
                                    <!-- <div class="col-md-4 col-sm-4">
                                            <legend>Regular Image</legend>
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../../assets/img/image_placeholder.jpg" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="..." id="wizard-picture">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    

                                    <div class="form-group form-inline">
                                      <uib-alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</uib-alert>
                                    </div>
                                    <div class=" form-group form-inline" style="width: 100%">
                                        <div class="tn-save-cancel form-inline">
                                            <button type="submit" class=" btn btn-success" id="bt-view" ng-click="saveAddtour()">Save
                                                <!-- <span class="fa2 fa fa-floppy-o"></span> Save</button> -->

                                            <a href="">
                                                <button type="button" class="btn btn-warning" onclick="Back()" id="bt-view">Cancel</button></a>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <!-- <script>
                                      document.getElementById("checkboxEng").disabled = true;

                                            function validate(input){
                                                var name = document.getElementById('img-tourpackage').value;
                                                name = name.substring(name.lastIndexOf('.') + 1);
                                                var x = angular.element(document.querySelector('[ng-controller="newtour"]')).scope().checkselectzone;
                                                var y = angular.element(document.querySelector('[ng-controller="newtour"]')).scope().checkaddkeyword;
                                                //alert(x);
                                                if((name == 'jpg' || name == 'png') && x == 1 && y == 1)
                                                {
                                                    return true;
                                                }
                                                else if((name == 'jpg' || name == 'png') && x == 0)
                                                {
                                                    alert("Please select Tour Zone");
                                                    return false;
                                                }
                                                else if((name == 'jpg' || name == 'png') && y == 0)
                                                {
                                                    alert("Please Add Tour Keyword");
                                                    return false;
                                                }
                                                else
                                                {
                                                    alert("Only choose JPG or PNG file");
                                                    return false;
                                                }
                                                /*console.log('asdasdasdas');
                                                var zone = document.getElementById('zone');
                                                console.log(zone);*/

                                            }
                                </script> -->
                
                        
                        </div>                            
                    </div>
                 </div>               
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Company
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        ©
                     <!--  <script async="" src="/analytics.js.ดาวน์โหลด"></script> -->
                     2017
                        <a href="">Creative Ozaman</a>
                    </p>
                </div>
            </footer>
           
        </div>
    </div>
    <!-- <div class="fixed-plugin">
        
    </div> -->

<!--   Core JS Files   -->
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- Select Plugin -->
<script src="js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="js/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="js/demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/angular/angular-cookies.min.js"></script>


 <script src="js/ng-file-upload-shim.min.js"></script>
<script src="js/ng-file-upload.min.js"></script>

<script src="js/angular/addTour.js?v=<?=time()?>"></script>



<style>
    /*!
 * Start Bootstrap - SB Admin Bootstrap Admin Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

/* Global Styles */


#smart-menu{
    display: none;
}
#trig_by_menu{
    display: none;
}
.sub_menu_mobile{
    display: none;
}
#mobile-menu-canvas{
    display: none;
    position: absolute;
    width: 100vw;
    height:100vh;
    background: #C2C2C2;
}
.main_menu_mobile{
    position:relative;
    width: 100%;
    min-height:100%;
    z-index: 100;
    overflow: hidden;
    background: #C2C2C2;
}
.invoice-sumary{
    margin-left: 75px;
}
.invoice-sumarytotal{
    margin-left: 67px;
}
.fontss{
    font-weight: 300;
}

.inline{

    display: block !important;

}

.must-show{
    display: block !important;
    background: rgba(0, 0, 0, 0.5);
}

.cen{

    margin-top: 300px;

}

#wrapper {
    padding-left: 0;
}

#page-wrapper {
    /* position: relative; */
    width: 100%;
    padding: 0;
    background-color: #fff;
    /* z-index: -1; */
}
#page-wrapper-omise {
    /* position: relative; */
    width: 100%;
    padding: 0;
    background-color: #fff;
    /* z-index: -1; */
}
#page-wrapper-tour {
    /* position: relative; */
    width: 100%;
    padding: 0;
    background-color: #fff;
    /* z-index: -1; */
}
.active_menu{
    border-left: 1px solid #337AB7;
}
.set_menu_posit{
    position: relative;
    z-index: -1;
}
.logout_button{
    background: #d14233;
}
.logout_button:hover > a{
    background: #d14233 !important;
}
.logout_button:hover{
    background: #d14233 !important;
}
.huge {
    font-size: 50px;
    line-height: normal;
}
.menu:hover > .submenu{
    display: block;
}
.menu .submenu:hover{
    display: block;
}
.menu:hover{
    background: #424141 !important;
}
.main_sub_menu:hover{
    background: #424141 !important;
}
.menu{
    text-align: center;
    margin: 0;
}
.menu i{
    display: inline-block;
    padding: 0;
    color:#e1e1e1;
    font-size: 38px;
}
.menu p{
    display: block;
    margin: 0;
    padding: 0;
    color:#e1e1e1;
}
.navbar-nav{
    /* position: relative; */
}
.zin_menu{
    z-index: 1000;
}
.submenu{
    display: none;
    position: fixed;
    left: 100px;
    top: 0;
    height: 100%;
    background-color: #484747;
    z-index: 1031;
    padding: 0;
    table-layout: fixed;
    list-style: none;
    width: 280px;
}
.submenu li a{
    display: block;
    width: 100%;
    /* padding: 20px; */
    text-align: left;
    color: #fff;
    /* border-bottom: 1px solid #6d6b6b; */
    font-size: 16px;
    font-weight: 300 !important;
    /* margin: 0 25px; */
    /* padding-bottom: 18px;
    padding-top: 25px; */
    padding: 10px 25px;
}
.submenu li a:hover{
    background: #424141 !important;
}
.submenu .head_section{
    color: #fff;
    border-bottom: 1px solid #6d6b6b;
    font-size: 26px;
    font-weight: 300;
    margin: 0 25px;
    padding-bottom: 18px;
    padding-top: 25px;
    font-weight: 300 !important;
    text-align: left;
    margin-bottom:15px;
}
@media(min-width:768px) {
    #wrapper {
        padding-left: 100px;
    }

    #page-wrapper {
        padding: 10px;
    }
    #page-wrapper-omise {
        padding: 10px;
    }
    #page-wrapper-tour {
        padding: 10px;
    }
}
@media(min-width:1320px) {
    .table-text-small{
        font-size: 12px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
    line-height: 20px;
    color: #999;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #000;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    border: 1px solid rgba(0,0,0,.15);
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

ul.message-dropdown {
    padding: 0;
    max-height: 250px;
    overflow-x: hidden;
    overflow-y: auto;
}

li.message-preview {
    width: 275px;
    border-bottom: 1px solid rgba(0,0,0,.15);
}

li.message-preview>a {
    padding-top: 15px;
    padding-bottom: 15px;
}

li.message-footer {
    margin: 5px 0;
}

ul.alert-dropdown {
    width: 200px;
}

/* Side Navigation */

@media(min-width:768px) {
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        /* border-color: #101010; */
        position: absolute;
        display: flex !important;
        top: 0px;
        left: 225px;
        width: 100px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        overflow-y: auto;
        min-height: auto;
        background: #3D3C3C;
        bottom: 0;
        overflow-x: hidden;
    }
    .side-nav {
        position: absolute;
        top: 0px;
        left: 225px;
        width: 100px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        overflow-y: auto;
        height:100vh;
        background: #3D3C3C;
        bottom: 0;
        overflow-x: hidden;
    }
    .side-nav>li>a {
        width: 100px;
        /* border-left: #FFF 0px solid !important; */
        /* -webkit-transition:  all 0.25s ease-in-out;
        -moz-transition:  all 0.25s ease-in-out;
        -ms-transition:  all 0.25s ease-in-out;
        -o-transition:  all 0.25s ease-in-out;
        transition:  all 0.25s ease-in-out; */
        white-space: nowrap;
    }

    .side-nav li a:hover,
    .side-nav li a:focus{
        outline: none;
        /* background-color: #000 !important;
        border-left: #FFF 5px solid !important; */
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        -ms-transition: all 0.25s ease-in-out;
        -o-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
        white-space: nowrap;
        overflow:hidden;
        text-overflow: ellipsis;
    }
    .side-nav li a{
        font-weight: 300 !important;
    }
}

.side-nav>li>ul {
    padding: 0;
}

.side-nav>li>ul>li>a {
    display: block;
    /* padding: 10px 15px 10px 38px; */
    text-decoration: none;
    color: #999;
   /* border-left: #FFF 0px solid !important; */
    -webkit-transition:  all 0.25s ease-in-out;
    -moz-transition:  all 0.25s ease-in-out;
    -ms-transition:  all 0.25s ease-in-out;
    -o-transition:  all 0.25s ease-in-out;
    transition:  all 0.25s ease-in-out;
    white-space: nowrap;
}

.side-nav>li>ul>li>a:hover {
    color: #e1e1e1;
    /* border-left: #FFF 5px solid !important; */
    -webkit-transition: all 0.20s ease-in-out;
    -moz-transition: all 0.20s ease-in-out;
    -ms-transition: all 0.20s ease-in-out;
    -o-transition: all 0.20s ease-in-out;
    transition: all 0.20s ease-in-out;
    white-space: nowrap;
    overflow:hidden;
    text-overflow: ellipsis;
    background: #3D3C3C;
}
.side-nav > .active {

}

/* Flot Chart Containers */

.flot-chart {
    display: block;
    height: 400px;
}

.flot-chart-content {
    width: 100%;
    height: 100%;
}

/* Custom Colored Panels */

.huge {
    font-size: 40px;
}

.panel-green {
    border-color: #5cb85c;
}

.panel-green > .panel-heading {
    border-color: #5cb85c;
    color: #fff;
    background-color: #5cb85c;
}

.panel-green > a {
    color: #5cb85c;
}

.panel-green > a:hover {
    color: #3d8b3d;
}

.panel-red {
    border-color: #d9534f;
}

.panel-red > .panel-heading {
    border-color: #d9534f;
    color: #fff;
    background-color: #d9534f;
}

.panel-red > a {
    color: #d9534f;
}

.panel-red > a:hover {
    color: #b52b27;
}

.panel-yellow {
    border-color: #f0ad4e;
}

.panel-yellow > .panel-heading {
    border-color: #f0ad4e;
    color: #fff;
    background-color: #f0ad4e;
}

.panel-yellow > a {
    color: #f0ad4e;
}

.panel-yellow > a:hover {
    color: #df8a13;
}
.login-panel{
    margin-top:25%;
}

/* --------------------------------------- Custom CSS for iTravelism ----------------------------------------------- */
.table>tbody>tr>td,
.table>tbody>tr>th,
.table>tfoot>tr>td,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>thead>tr>th{
    vertical-align: middle;
    border-color: #e4e4e4;
}
input[type=time]::-webkit-inner-spin-button,
input[type=time]::-webkit-outer-spin-button,
input[type=date]::-webkit-inner-spin-button,
input[type=date]::-webkit-outer-spin-button{
    -webkit-appearance: none;
    margin: 0;
}
@media (min-width: 768px) {
    .navbar-nav > li > a :hover {
        /* padding-top:10px !important;
        padding-bottom:5px !important; */
    }
}
    .head-table td:hover{
    cursor:pointer ;
    background-color: #ADADAD;
    color:#FFF;

    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -ms-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
}
.operate-head-table {
    cursor:inherit !important;
    background-color: #F5F5F5 !important;
    color:inherit !important;
}
.head-table td{
    font-weight: 300;
    background-color:#F5F5F5;
    border-top: none !important;

    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -ms-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
}
.head-label td{
    font-weight: bold;
    background-color:#F5F5F5;
    border-top: none !important;
}
.book-head-table td{
    height: 80px;
}
.page-header{
    border-bottom:0px;
}
/* col-lg-12 for header on every-page to no-padding */
.col-lg-12{
    padding-right: 0px;
    padding-left: 0px;
}
/* Label size in every-page*/
label.label-user{
    width: 177px;
}
label.label-editUser{
     width: 177px;
 }
label.label-tour{
    width: 170px;
}
label.label-booking{
    width: 75px;
}
label.label-company,
.label-social{
    width: 130px;
}
label.label-gallery,
.label-subtour{
    width:150px;
}
.sub-menu-lg{
    width:110px;
}
.sub-menu-md{
    width:90px;
}
.sub-menu-sm,
.btn-back{
    width:75px;
}
/* Information Box */
textarea{
    resize: none;
}
.well-medium{
    width:200px;
}
.box-info-lg{
    display:inline-block;
    height: 100%;

    width:424px;

    margin:0rem;
    padding:1.25rem;
    background-color: #FAFAFA;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
}
#clearAdult{
    display: block;
    /* border: solid 1px #333; */
    width: 184px;
    /* height: 34px; */
    padding: 7px 10px;
    color: #fff;
    border-radius: 4px;
    background-color: #E85B5B;
    margin-left: 174px;
    text-transform: none;
    cursor: pointer;
}
.box-package-detail{
    display:block;
    height: 100%;
    width:90%;
    margin:0.5rem 5%;
    padding:1.25rem;
    background-color: #FAFAFA;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
}
.box-package-detail-white{
    display:block;
    height: 100%;
    width:90%;
    margin:0.5rem 5%;
    /* padding:1.25rem; */
    /* background-color: #FAFAFA; */
    /* border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05); */
}
.btn{
    margin-left:0.25rem;
    margin-right:0.25rem;
}
.info{
    position:relative;
}
a.grey{
    display: none;
    color:grey;
}
.time-width{
    width:300px;
}
.time-width td{
    border-top:none !important;
}
.calendar-left,
.calendar-right,
.calendar-sub-r{
    display:block !important;
    margin-right:2rem;
}
.calendar-right{
    vertical-align: top;
}
.calendar-sub-r{
    position:absolute;
}
.calendar-sub-l{
    width:1500px;
}
.calendar{
  /*display:inline-block !important;*/
  vertical-align: middle;
  margin-right:200rem;
}
.logo-icon{
    display: block;
    width: 100px !important;
    text-align: center ;
    padding: 15px 0;
    border-bottom: 1px solid #474646;
}
.logo-icon img{
    width: 85%;
}
.navigate ol{
    display:inline-block !important;
}
.price-block{
    display:inline-flex;
    width:100%;
    height:auto;
    margin: 0 10%;
}
.price-block-head{
    display:inline-block;
    width:45%;
    position:relative;
    padding: 40px 5%;
    height: 125px;
    color: #FFF;
    background: #2f8bb5;
    font-size:2rem;
    float:left;
}
.price-block-tail{
    display:inline-block;
    width:35%;
    position:relative;
    padding:30px 5%;
    height: 125px;
    color: #FFFFFF;
    background: #0c303e;
    font-weight: bold;
    font-size: 3rem;
    text-align:right;
}
.price-block-tail span{
    position:absolute;
    top:10px;
    right:12%;
    font-size:1.5rem;
}
.breadcrumb{
    background-color: #FFFFFF;
}
.breadcrumb a{
    color: #000000;
    padding:0.5rem;
    -webkit-transition: all 1s;
    border-radius: 0.5rem;
    text-decoration: none;
}
.breadcrumb a:hover{
    font-weight: bold;
    -webkit-transition: all 1s;
    /*color: #FFFFFF;*/
    /*background-color: #000;*/
    /*border-radius: 0.5rem;*/
    /*padding:0.5rem;*/
}
.breadcrumb > .active{
    font-weight: 300;
}
.logo-icon img{
    display: inline-block;
    /* height: 7rem; */
    /* width: 10rem; */
    border-radius: 5px;
    /* margin: 1.25rem ; */
    /*border: 1px solid #333;*/
     /*float:left; */
     /*margin-left:50%; */
    text-align: center;
}.logo-icon ul{
    /*display:inline-block;*/
    float: right;

 }
 .nav-stacked{
    /* border: 1px solid #333; */
    color: #fff !important;
    border-radius: 30px;
    font-size: 16px !important;
 }
.logo-icon li{
    text-align:right;
    color: #fff !important;
}
.nav-role{
    font-size: 1rem;
    font-weight: bold;
}
.nav-username{
    margin-left: 0 !important;
    /* width:125px; */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: #fff !important;
}
.fa-allotment{
    font-size: 1.75rem !important;
    margin-left:0.5rem;
    margin-right:0.5rem;
}
.block-days{
    display:inline-block;
    width:130px;
}
.block-radius{
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.navbar-head {
    font-weight: bold;
    /* padding-top:1rem !important;
    padding-bottom:1rem !important; */
    border-bottom: 1px solid #474646;
}
.navbar-logout{
    /*background-color:#7f8c8d;*/
    background-color:#c0392b;
    margin-bottom: 0;
    }
li.navbar-logout{
    position:absolute;
    bottom: -30rem;
}
.navbar-logout a{
    color:#FFFFFF !important;

}
.active a {
    border-left: #fff 5px solid !important;
}
.input-package-detail{
    width:90% !important;
    margin:0.5rem 5% ;
}
.container-menu{
    position:relative;
}
.input-package-price{
    /*width:80% !important;*/
    margin:0.5rem 10% ;
}
.input-package-price input[type=text]{
    width:50%;
}
/* Alignment */
.label-package-detail{
    margin-left: 5%;
}
.sub-label{
    padding-left:2.5em;
}
.set-label-status{
    display: inline-block;
    width: 75px !important;
    height:34px;
    font-size: 1.2rem;
    padding-top:6px;
    padding: 5px 10px;
    border-radius: 50%;
}
.btn-margin-company{
    margin-left:9.2rem;
}
.btn-margin-social{
    margin-left:28rem;
}
.time-align td{
    padding-left:0 !important;
}
.margin-package-gallery{
    margin-left:7rem;
}
.input-text-right{
    text-align: right;
}
.notification-right{
    margin-left:100px;
}
.payment-increment-button,.payment-decrement-button{
    color:#333;
    font-size: 1.4em;
}
.payment-increment-button:hover{
    color:#5CB85C;
}
.payment-decrement-button:hover{
    color:#D9534F;
}
.add{
    color:#5CB85C !important;
}
.minus{
    color:#D9534F !important;
}
/* --------------------------------------- Custom CSS for iTravelism ----------------------------------------------- */
.zone-box-detail{
    position:relative;
    display:inline-block;
    padding:0 20px;
    height:70px;
    background:#FFF;
    text-align:center;
    font-size:1.2em;
    border:1px solid #e9e9e9;
    margin-right:5px;
    margin-bottom:10px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
.zone-box-detail i{
    margin-right:10px;
}
.content-zone{
    margin-top:10px;
}
.delete-zone{
    position:absolute;
    display:block;
    width:auto;
    top:0;
    right:-5px;
    color:#333;
}
.add-zone-button{
    display:inline-block;
    width:70px;
    height:70px;
    border:1px solid #e9e9e9;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    text-align:center;
}
.add-zone-button a{
    display:block;
    width:100%;
    height:100%;
    color:#333;
}
.add-zone-button i{
    margin-top:17px;
    color:#333;
}
.model-zone i{
    display:block;
}
.model-zone .zone-box-detail{
    width:100%;
    height:auto;
    margin-bottom:15px;
    padding-bottom:10px;
}
.model-zone .zone-box-detail:hover{
    cursor:pointer;
    background:#333;
    color:#FFF;
}
.select-zone{
    background:#333;
    color:#FFF;
}
.keyword input{
    width:300px;
    display:inline-block;
}
.keyword-box{
    padding:15px 0;
}
.keyword-box-content{
    position:relative;
    display:inline-block;
    font-size:1.1em;
    background:#2f8bb5;
    padding:10px 20px;
    padding-right:40px;
    padding-left:10px;
    color:#FFF;
    border:1px solid #e9e9e9;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    margin-right:10px;
}
.close-keyword-button{
    position:absolute;
    top:10px;
    right:5px;
}
.close-keyword-button i{
    color:#FFF;

}
.btn-margin-company{
   padding-left: 40px;
}
.view-tour{
    /*padding-left: 40px;*/

}
.allotment-tour{
    /*padding-left: 20px;*/
}
.right{
    float: right;
}




.righticon i{
    padding: 10px;
    color: #7D7D7D;

}
.profile{
        border-radius:100%;
}
.icon-logout{

    color: #7D7D7D;

}
.text-logou {
    color: #7D7D7D;
    margin-top: 3px;
    padding: 0;

}
.icon-search{

    padding-right: 15px;
    margin-top: 10px;

}
.icon-fainmaney{
    padding-right: 15px;






    /*padding-right: 15px;*/
    margin-top: 7px;

}
.icon1-location{
    padding-right: 20px;
}
.fa{
    padding-right:15px;


}
.allotment-tour{
    padding-right: 30px;
}
.icon-approvelocation{
    padding-right: 15px;
}
/*----page-view------------------*/

.wellcome{

    position: relative;
    text-align: center;
    margin-top: 75px;
}
.wellcome h1{
    /*padding-left: 100px; */
    margin-top: 75px !important;
    font-size: 45px;
    /* line-height: 250px; */
    font-family: " cursive ", Times, serif;
    color: #F04561;
}
.tagbb{
    color: #F04561;

}
.wellcome h4{
    margin-top: 100px;
    font-family : Georgia, serif;
}
#text-p{
    line-height: 60px;

}

#text-s{
    line-height: 60px;
    line-height: 60px;
    color: #2F2E2E;
    margin-top: 280px;
    text-align: center;
    font-weight: 200;
    font-size: 14px;


}
#text-s p{
    position: relative;
    color: #393939;
    margin-left: 5px;
    font-weight: 500;
    display: inline-block;


}
.img-wellcome{
    text-align: center;
    /*position:absolute;*/
    margin-top: 65px;

}
.bg{
    width: 100%;
    padding: 0;
    background-color: #D9D0C1;

}

/*---------------modal----------------------*/
#ng-veiw{
    width: 424px;
}
#bt-view{
    width: 96px;
}
#submitBtn{
    width: 96px;
}
#lb-a{
    width: 266px;

}
.DL{
    margin-top: 25px;
}
.sv-view{
    width: 413px !important;
    }
.Boxcompany{
    width: 647px !important;
    height: 45px;
   margin-left: 11px !important;

}
.ev-view{
    width: 570px !important;
}
.uv{
    width: 387px !important;
}
.ow-view{
    width: 424px !important;
}
.bt-comnew{
    margin-left: 520px;
}
.bt-sn{
    margin-left: 54px;
}
.uv-view{
    width: 386px !important;
}
.uv-view-search{
    width: 240px !important;
}
.kp-view{
    width: 423px !important;
}
.tn{
    width: 602px !important;
}
.bt-tournew{
    margin-left: 575px !important;
}
.cn-view{
    width: 594px !important;
}
.tn-view{
   /* width: 741px !important;*/

}
.fa2{
    padding-right: 7px !important;
}
.bt-cc{
    width: 155px;
}
.fa-clock-o .fa-check-circle .a-times-circle{
    margin-left: 10px !important;
    text-align: center !important;
}
.cc-view{
    width: 430px !important;
}
.dotjung{
    color: red;
    font-size: 15px;
    display: inline-block;
    padding-right: 5px;
}
.ad{
    height: 45px !important;
}
.bubble-alert{
    position: absolute;
    width: 170px;
    height: 35px;
  padding-top: 5px;
    text-align: center;
    line-height: 20px;
    background-color: #fff;
    border: 1px solid #F00;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 2px 2px 4px #888;
    -moz-box-shadow: 2px 2px 4px #888;
    box-shadow: 2px 2px 4px #888;
  display: none;
}

/* .bubble-alert:before
{
    content: ' ';
    position: absolute;
    width: 0;
    height: 0;
    left: 30px;
    top: 100px;
    border: 25px solid;
    border-color: #fff transparent transparent #fff;
} */
.bubble-alert:after
{
    content: ' ';
    position: absolute;
    width: 0;
    height: 0;
    left: 135px;
    top: -17px;
    border: 8px solid;
    border-color: transparent #f00 #f00 transparent;
}
.typeUser{
    border: 1px solid #CCCCCC;
    width: 387px;
    height: 34px;
    border-radius: 4px;
    padding: 5px;


}
.alotment-calendar{
    display: block;
    width: 100%;
    /* height:auto; */
    background: #bdc3c7;
    /* border:#000 solid 1px; */
}
.alotment-calendar-topbar{
    display: block;
    width: 100%;
}
.alotment-calendar-day{
    text-align: center;
    display: inline-block;
    width: 14.285%;
    color:#fff;
    background: #2c3e50;
    float: left;
}
.alotment-calendar-container{
    display: block;
    width: 100%;
}
.day-object{
    text-align: left;
    display: inline-block;
    width: 14.285%;
    color:#000;
    background: #ecf0f1;
    float: left;
    height: 100px;
    padding: 5px 5px;
    /* border: 0.5px #000 solid; */
}

.day-object1{
    text-align: left;
    display: inline-block;
    width: 14.285%;
    color:#000;
    background: #C5CA0D !important;
    float: left;
    padding: 5px 5px;
    /* border: 0.5px #000 solid; */
}

/*#C5CA0D เหลือง*/
/*#CA0D2E แดง */

/*#17CA0D เขียว*/

.day-object-space{
    text-align: left;
    display: inline-block;
    width: 14.285%;
    color:#fff;
    background: #FFF;
    float: left;
    height: 100px;
}
.inline-object{
    display: inline-block;
}
.backmonth i{
    position: absolute;
    padding-left:453px;
    top:13px;
}
.forwardmonth i{
    position: absolute;
    float: right;
    left: 677px;
    top:13px;
}
.month{
    margin-left: 510px;
    font-size: 200%;
}

.allotment-box{
  display: block;
  position: absolute;
  left:60px;
  top:20px;
  width: 1200px;
  height: 706px;
  /*padding: 0 500px;*/
  background: #f5f5f5;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;

}

.allotment-rerative
{
    position: relative;
    width: 100vh;
    height: 100vh;
    width: 100%;
    height:100%;
}

.style{
    background:none;
    width: 10.285%;
    height: 37;
}

.border{
    border-left: 1px solid #fff;
}

.clickbox-form{
  position: absolute;
  display: block;
  right: 0px;
  bottom: 0px;
  width: 1600px;
  height: 900px;
}
.clickbox-box{
  display: block;
  position: absolute;
  left: 400px;
  top: 250px;
  width: 900px;
  height: 250px;
  padding: 30px 0;
  text-align: center;
  background: #EEE;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  /*border-radius: 10px;*/
  /*box-shadow: 0px 5px 0px #555;*/
  border: 1px solid #4711C5;
}
.okallow{
    padding: 6px 21px;
}
.cancelbox{
  display: none;
  position: fixed;
  left: 500px;
  top: 320px;
  width: 400px;
  height: 195px;
  padding: 30px 0;
  text-align: center;
  background: #EEE;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  /*border-radius: 10px;*/
  /*box-shadow: 0px 5px 0px #555;*/
  border: 3px solid #e4e4e4;
}
.boxallow{
  display: none;
  position: fixed;
  left: 455px;
  top: 35%;
  width: 400px;
  height: 195px;
  padding: 30px 0;
  text-align: center;
  background: #EEE;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  /*border-radius: 10px;*/
  /*box-shadow: 0px 5px 0px #555;*/
  border: 3px solid #e4e4e4;
}
.calendar-td{
    position: relative;
}
.allotment-small{
    /* display: none;
    width: 100px;
    height:50px;
    z-index: 1000;
    background: #fff;
    color:#000;
    position: absolute;
    top:100%;
    left:0; */

}
.btn-bg{
    display: none;
    margin-left: 20px;
}

.allotment-small {
    display: none;
    z-index: 1000;
    width: 175px;
    height: 46px;
    margin-top: 10px;
    position: absolute;
    background: #fff;
    border: 3px solid #fff;
    top:100%;
    left: -10px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
.allotment-small:after, .allotment-small:before {
    bottom: 100%;
    left: 25%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}

.allotment-small:after {
    /* border-color: rgba(81, 110, 128, 0);
    border-bottom-color: #516e80;
    /* border-width: 10px; */
    /* margin-left: -10px; */
}
.allotment-small:before {
    border-color: rgba(194, 225, 245, 0);
    border-bottom-color: #fff;
    border-width: 15px;
    margin-left: -21px;
}
.box-text{
    display: none;
    position: absolute;
    width: 40px;
    height: 20px;
    left: 27px;
    top: 1px;
    text-align: center;
}
.minus-box{
    position: absolute;
    left: 0px;
    top: 2px;
}
.plus-box{
    position: absolute;
    left: 68px;
    top: 2px;
}
.lock-box{
    position: absolute;
    left: 141px;
    top: 23px;
}
.unlock-box{
    top: 10px;
    position: absolute;
    left: 72px;
}
.box-submit{
    display: none;
    position: absolute;
    width: 60px;
    height: 20px;
    left: 99px;
    top: 0px;
}
.bookdetail{
    width: 50%;
    border: 1px solid #e4e4e4;
}
.bookdetail .field{
    font-weight: 300;
}
.zoombook{
    color:#000;
}
.zoombook:hover{
    cursor: pointer;
}
.booking_searchengine{
    margin: 30px 0;
}
.booking_searchengine .select{
    width: 150px;
    display: inline-block;
    position: relative;
}
.span6 { position: relative; }

.span6 i {
    position: absolute;
    right: 7px;
    top:7px;
    padding: 0;
}
.booking_searchengine_one{
    margin: 30px 0;
}
.booking_searchengine_one input{
    border-radius: 2px;
    color: #000 !important;
}
.booking_searchengine_one input:focus{
    border-radius: 2px;
    box-shadow:none;
    border-color: #337AB7;
}
.booking_searchengine_one .search-box input{
    display: block;
}
.booking_searchengine .select input:focus{
    /* display: block; */

}
.booking_searchengine .select input:hover{
    cursor: pointer;
}
.booking_searchengine .select input:placeholder-shown{
    font-weight: 300;
}
.booking_searchengine .select ul{
    display: none;
    position: absolute;
    background: #FFF;
    list-style: none;
    width: 100%;
    margin: 0;
    padding: 0;
    border: 1px solid #ddd;
    border-top: none;
}
.booking_searchengine .select li{
    display: block;
    padding: 5px 0;
    padding-left: 10px;
}
.booking_searchengine .select li:hover{
    background: #337AB7;
    color:#FFF;
    cursor: pointer;
}
.booking_searchengine input{
    border-radius: 2px;
    color: #000 !important;
}
.booking_searchengine input:focus{
    border-radius: 2px;
    box-shadow:none;
    border-color: #337AB7;
}
.search-box {
    display: inline-block;
}
.search-box input{
    /* display: inline-block; */
    width: 175px;
}
.search-box .form-control{
    display: none;
}
.search-box input:placeholder-shown{
    font-weight: 300;
}
.submit-booking{
    display: inline-block;
    float: right;
    margin-top: -14px;
    margin-right: 10px;
}
.submit-booking h3{
    display: inline-block;
    margin-top: 20px;
}
.submit-booking a{
    display: inline-block;
    border:2px solid #000;
    margin-left: 15px;
    padding: 10px 15px;
    color:#000;
    text-decoration: none;
    -webkit-transition: all 5s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -ms-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}
.submit-booking a:hover{
    background: #000;
    color: #fff;
}
.booking_head_text{
    font-weight: 300;
}
.head_tab{
    font-weight: 400;
}
.booking_head_text_margin{
    margin: 30px 0;
    margin-top: 10px;
}
.bottom_section_booking{
    margin-top: 30px;
    margin-bottom: 50px;
}
.extra_margintop{
    margin-top: 50px;
}
.pagination-prev{
    font-weight: 300;
}
.pagination-next{
    font-weight: 300;
}
.pagination-page{
    font-weight: 300;
}
.pagination .active a{
    border-left: 1px solid #337ab7 !important;
}
.billing-tb{
    border: 1px solid #e4e4e4;
    border-top: none;
}
.billing-tb-4{
    border: 1px solid #e4e4e4;
}
.billing-tb .fa-search:hover{
    cursor: pointer;
}
.billing-tb .bill_data:hover{
    /* cursor: pointer; */
}
.billing-detail-tb{
    border: 1px solid #e4e4e4;
    border-top: none;
}
.billing-detail-tb .fa-search:hover{
    cursor: pointer;
}
.bill-left{
    display: inline-block;
    float: left;
    width: 100%;
}
.bill-right{
    display: inline-block;
    float: left;
    width: 40%;
}
.app-dis{
    display: inline-block;
    background: #bdc3c7;
    padding: 7px 13px;
    color:#000;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    opacity: 0.2;
}
.app-dis:hover{
    background: #bdc3c7;
    padding: 7px 13px;
    color:#000;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    opacity: 0.2;
    text-decoration: none;
    cursor: not-allowed;
}
.app-dis1{
    display: inline-block;
    background: #bdc3c7;
    padding: 7px 13px;
    color:#000;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    opacity: 0.2;
    margin-left: 10px;
}
.app-dis1:hover{
    background: #bdc3c7;
    padding: 7px 13px;
    color:#000;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    opacity: 0.2;
    text-decoration: none;
    cursor: not-allowed;
    margin-left: 10px;
}
.app-dis2{
    display: inline-block;
    background: #bdc3c7;
    padding: 7px 13px;
    color:#000;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    opacity: 0.2;
    margin-left: 10px;
}
.app-dis2:hover{
    background: #bdc3c7;
    padding: 7px 13px;
    color:#000;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    opacity: 0.2;
    text-decoration: none;
    cursor: not-allowed;
    margin-left: 10px;
}
.app-inv{
    display: inline-block;
    background: #337AB7;
    padding: 7px 13px;
    color:#FFF;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
}
.app-inv:hover{
    cursor: pointer;
    color: #FFF;
    text-decoration: none;
    border: 2px solid #337AB7;
    padding: 5px 11px;
    background: #FFF;
    color:#337AB7;
}
.dapp-inv{
    display: inline-block;
    background: #c0392b;
    padding: 7px 13px;
    color:#FFF;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-left: 10px;
}
.dapp-inv:hover{
    cursor: pointer;
    color: #FFF;
    text-decoration: none;
    border: 2px solid #c0392b;
    padding: 5px 11px;
    background: #FFF;
    color:#c0392b;
}
.paid-inv{
    display: inline-block;
    background: #16a085;
    padding: 7px 13px;
    color:#FFF;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-left: 10px;
}
.paid-inv:hover{
    cursor: pointer;
    color: #FFF;
    text-decoration: none;
    border: 2px solid #16a085;
    padding: 5px 11px;
    background: #FFF;
    color:#16a085;
}
.new-inv{
    display: inline-block;
    background: #5cb85c;
    padding: 4px 12px;
    color:#FFF;
    font-size: 60%;
    font-weight: 300;
    text-decoration: none;
    border: 2px solid #4cae4c;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-left: 10px;
}
.new-inv:hover{
    cursor: pointer;
    color: #FFF;
    text-decoration: none;
    border: 2px solid #4cae4c;
    padding: 4px 12px;
    background: #FFF;
    color:#5cb85c;
}
.edit-inv{
    display: inline-block;
    background: #ec971f;
    padding: 4px 12px;
    color:#FFF;
    font-size: 60%;
    font-weight: 300;
    text-decoration: none;
    border: 2px solid #d58512;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-left: 10px;
}
.edit-inv:hover{
    cursor: pointer;
    color: #FFF;
    text-decoration: none;
    border: 2px solid #d58512;
    padding: 4px 12px;
    background: #FFF;
    color:#ec971f;
}
.tofrom{
    display: none;
}
.reset_search{
    display: none;
    background: #337AB7;
    padding: 7px 13px;
    color:#FFF;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-left: 10px;
}

.reset_search:hover{
    cursor: pointer;
    color: #FFF;
    text-decoration: none;
    border: 2px solid #337AB7;
    padding: 5px 11px;
    background: #FFF;
    color:#337AB7;
}
.inreset_search{
    display: none;
    background: #337AB7;
    padding: 7px 13px;
    color:#FFF;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-left: 10px;
}

.inreset_search:hover{
    cursor: pointer;
    color: #FFF;
    text-decoration: none;
    border: 2px solid #337AB7;
    padding: 5px 11px;
    background: #FFF;
    color:#337AB7;
}
.time-input{
    position: relative;
    margin-top: -38px;
    margin-left: 80px;
    width: 167px;
}
#button_left{
    width: 96px;
    margin-left: -24%;
    margin-top: 6%;
}
.tn-keyword{
    position: relative;
    margin-top: -47px;
    margin-left: 72px;

}
.tn-save-cancel{
    text-align: right;
    /*margin-left:45%;*/
}
#page-mobile-wrapper{
    display: none;
}
@media only screen and (min-device-width : 1px) and (max-device-width : 1000px) and (orientation : portrait) {
    #page-wrapper-tour{
        display: none !important;
    }
}
@media only screen and (min-device-width : 1px) and (max-device-width : 1000px) and (orientation : landscape) {
    #page-wrapper-tour{
        display: none !important;
    }
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : portrait) {
    .navbar-inverse{
        display: none;
    }
    #wrapper{
        padding-left:0;
    }
    #smart-menu{
        display: block;
        width: 100%;
        border-bottom: 1px solid #D1D1D1;
        padding:5px 10px;
        overflow: hidden;
    }
    .logo{
        display: inline-block;
        float: left;
    }
    .logo img{
        width: 80px;
    }
    .res-menu{
        display: inline-block;
        float: right;
        padding-top: 25px;
    }
    .res-menu i{
        font-size: 1.5em;
    }
    .menu_mobile_item{
        display: inline-block;
        width: 50%;
        text-align: center;
        float: left;
        font-size: 1.5em;
        color: #000;
        padding: 20px 0;
        font-weight: 200;
        letter-spacing: 2px;
    }
    .menu_mobile_item i{
        font-size: 1.5em;
        padding: 0;
        font-weight: 300;
    }
    .main_menu_mobile h2{
        color:#000;
        font-size: 2em;
        font-weight: 300;
        letter-spacing: 2px;
        text-align: center;
        padding: 20px 0;
        padding-top:10px;
        z-index: 100;
    }
    .sub_menu_mobile{
        padding: 0 20px;
        height: auto;
        background: #C2C2C2;
    }
    .sub_menu_mobile h2{
        font-weight: 200;
    }
    .sub_menu_mobile a{
        display: block;
        padding: 10px 0;
        color: #000;
        font-size: 1.5em;
        font-weight: 200;
        text-decoration: none;
    }
    .sub_menu_mobile a:active{
       text-decoration: none;
    }
    .sub_menu_mobile a:focus{
       text-decoration: none;
    }
    .sub_menu_mobile i{
        display: inline-block;
    }
     .logout_button{
        clear: both;
        margin-top: 10px;
        position: relative;
        left: 5%;
        color:#fff !important;
        /* margin-left: 103px; */
        background: #d14233;
        border-radius: 2px;
        width: 90% !important;
        margin-bottom: 15px;
    }
    .logout_button p{
        color: #fff;
    }
    .logout_button i{
        color:#fff;
    }
    /*------ Content --------*/
    .page-wrapper-tour{
        display: none;
    }
    #page-mobile-wrapper{
        display: block;
    }
    .page-margin{
        margin-left: 15px;
    }
    .img-fix{
        width: 100%;
        height: 180px;
        background-size: cover;
    }
    .hr-tour{
        padding: 0 0;
        margin-top: -5px;
        margin-bottom: 5px;
    }
    .p-tour{
        font-weight: 300;
        font-size: 11px;
        margin-bottom: 10px;
    }
    .search-mobile{
        height: auto;
        margin: 0 30%;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .text-information-mobile{
        display: inline-block;
        width: 105px;
    }
    .input-information-mobile{
        display: inline-block;
        outline: none;
    }
    .check-button-mobile{
        display:block;
        background: #F4D03F !important;
        border: 2px solid #F7CA18 !important;
        margin: 20px 37%;
        height: 35px;
    }
    .message-mobile-discount{
        position: absolute;
        margin-left: 35%;
    }
    .map-mobile{
        margin-top: 15px;
        width: 200px;
    }
    .booking-mobile{
        margin: 15px 36%;
        outline: none;
    }
    .conclude{
        display: none !important;
    }
    #mobile-information{
        position: absolute;
        display: none;
        width: 100vw;
        height:auto;
        background: #fff;
    }
    .left-mobile{
        margin-left: 10px;
    }
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape) {
    .navbar-inverse{
        display: none;
    }
    #wrapper{
        padding-left:0;
    }
    #smart-menu{
        display: block;
        width: 100%;
        border-bottom: 1px solid #D1D1D1;
        padding:5px 10px;
        overflow: hidden;
    }
    .logo{
        display: inline-block;
        float: left;
    }
    .logo img{
        width: 80px;
    }
    .res-menu{
        display: inline-block;
        float: right;
        padding-top: 25px;
    }
    .res-menu i{
        font-size: 1.5em;
    }
    .menu_mobile_item{
        display: inline-block;
        width: 50%;
        text-align: center;
        float: left;
        font-size: 1.5em;
        color: #000;
        padding: 20px 0;
        font-weight: 200;
        letter-spacing: 2px;
    }
    .menu_mobile_item i{
        font-size: 1.5em;
        padding: 0;
        font-weight: 300;
    }
    .main_menu_mobile h2{
        color:#000;
        font-size: 2em;
        font-weight: 300;
        letter-spacing: 2px;
        text-align: center;
        padding: 20px 0;
        padding-top:10px;
        z-index: 100;
    }
    .sub_menu_mobile{
        padding: 0 20px;
        height: auto;
        background: #C2C2C2;
    }
    .sub_menu_mobile h2{
        font-weight: 200;
    }
    .sub_menu_mobile a{
        display: block;
        padding: 10px 0;
        color: #000;
        font-size: 1.5em;
        font-weight: 200;
        text-decoration: none;
    }
    .sub_menu_mobile a:active{
       text-decoration: none;
    }
    .sub_menu_mobile a:focus{
       text-decoration: none;
    }
    .sub_menu_mobile i{
        display: inline-block;
    }
     .logout_button{
        clear: both;
        margin-top: 10px;
        position: relative;
        left: 5%;
        color:#fff !important;
        /* margin-left: 103px; */
        background: #d14233;
        border-radius: 2px;
        width: 90% !important;
        margin-bottom: 15px;
    }
    .logout_button p{
        color: #fff;
    }
    .logout_button i{
        color:#fff;
    }
    /*------ Content --------*/
    .page-wrapper-tour{
        display: none;
    }
    #page-mobile-wrapper{
        display: block;
    }
    .page-margin{
        margin-left: 15px;
    }
    .img-fix{
        width: 100%;
        height: 180px;
        background-size: cover;
    }
    .hr-tour{
        padding: 0 0;
        margin-top: -5px;
        margin-bottom: 5px;
    }
    .p-tour{
        font-weight: 300;
        font-size: 11px;
        margin-bottom: 10px;
    }
    .search-mobile{
        display: inline-flex;
        width: 100%;
        height: auto;
        margin: 0 30%;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .text-information-mobile{
        display: inline-block;
        width: 105px;
    }
    .input-information-mobile{
        display: inline-block;
        outline: none;
    }
    .check-button-mobile{
        display:block;
        background: #F4D03F !important;
        border: 2px solid #F7CA18 !important;
        margin: 20px 37%;
        height: 35px;
    }
    .message-mobile-discount{
        position: absolute;
        margin-left: 35%;
    }
    .map-mobile{
        margin-top: 15px;
        width: 200px;
    }
    .booking-mobile{
        margin: 15px 36%;
        outline: none;
    }
    .conclude{
        display: none !important;
    }
    #mobile-information{
        position: absolute;
        display: none;
        width: 100vw;
        height:auto;
        background: #fff;
    }
    .left-mobile{
        margin-left: 10px;
    }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
    .navbar-inverse{
        display: none;
    }
    #wrapper{
        padding-left:0;
    }
    #smart-menu{
        display: block;
        width: 100%;
        border-bottom: 1px solid #D1D1D1;
        padding:5px 10px;
        overflow: hidden;
    }
    .logo{
        display: inline-block;
        float: left;
    }
    .logo img{
        width: 80px;
    }
    .res-menu{
        display: inline-block;
        float: right;
        padding-top: 25px;
    }
    .res-menu i{
        font-size: 1.5em;
    }
    .menu_mobile_item{
        display: inline-block;
        width: 50%;
        text-align: center;
        float: left;
        font-size: 2.2em;
        color: #000;
        padding: 20px 0;
        font-weight: 200;
        letter-spacing: 2px;
    }
    .menu_mobile_item i{
        font-size: 1.5em;
        padding: 0;
        font-weight: 300;
        margin: 0;
        padding: 0;
    }
    .main_menu_mobile h2{
        color:#000;
        font-size: 2.5em;
        font-weight: 300;
        letter-spacing: 2px;
        text-align: center;
        padding: 20px 0;
        padding-top:20px;
        z-index: 100;
        margin-bottom: 20px;
    }
    .sub_menu_mobile{
        padding: 0 20px;
        height: auto;
        background: #C2C2C2;
    }
    .sub_menu_mobile h2{
        font-weight: 200;
    }
    .sub_menu_mobile a{
        display: block;
        padding: 10px 0;
        color: #000;
        font-size: 1.5em;
        font-weight: 200;
        text-decoration: none;
    }
    .sub_menu_mobile a:active{
       text-decoration: none;
    }
    .sub_menu_mobile a:focus{
       text-decoration: none;
    }
    .sub_menu_mobile i{
        display: inline-block;
    }
    #btn_logout{
        margin-top: 620px;
        margin-left: 103px;
        background: #d14233;
        border-radius: 2px;
        width: 570px !important;
        position: absolute;
    }
    .btn_logout a:active{
       text-decoration: none;
    }
    .btn_logout a:focus{
       text-decoration: none;
    }
    #btn_logout p{
        color: #fff;
    }
    .pe-7s-power{
        color: #FFF !important;
    }
    /*------ Content --------*/
    .page-wrapper-tour{
        display: none;
    }
    #page-mobile-wrapper{
        display: block;
    }
    .page-margin{
        margin-left: 15px;
    }
    .img-fix{
        width: 100%;
        height: 180px;
        background-size: cover;
    }
    .hr-tour{
        padding: 0 0;
        margin-top: -5px;
        margin-bottom: 5px;
    }
    .p-tour{
        font-weight: 300;
        font-size: 11px;
        margin-bottom: 10px;
    }
    .search-mobile{
        display: inline-flex;
        width: 100%;
        height: auto;
        margin: 0 30%;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .text-information-mobile{
        display: inline-block;
        width: 105px;
    }
    .input-information-mobile{
        display: inline-block;
        outline: none;
    }
    .check-button-mobile{
        display:block;
        background: #F4D03F !important;
        border: 2px solid #F7CA18 !important;
        margin: 20px 37%;
        height: 35px;
    }
    .message-mobile-discount{
        position: absolute;
        margin-left: 35%;
    }
    .map-mobile{
        margin-top: 15px;
        width: 200px;
    }
    .booking-mobile{
        margin: 15px 36%;
        outline: none;
    }
    .conclude{
        display: none !important;
    }
    #mobile-information{
        position: absolute;
        display: none;
        width: 100vw;
        height:auto;
        background: #fff;
    }
    .left-mobile{
        margin-left: 10px;
    }
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
    .navbar-inverse{
        display: none;
    }
    #wrapper{
        padding-left:0;
    }
    #smart-menu{
        display: block;
        width: 100%;
        border-bottom: 1px solid #D1D1D1;
        padding:5px 10px;
        overflow: hidden;
    }
    .logo{
        display: inline-block;
        float: left;
    }
    .logo img{
        width: 80px;
    }
    .res-menu{
        display: inline-block;
        float: right;
        padding-top: 25px;
    }
    .res-menu i{
        font-size: 1.5em;
    }
    .menu_mobile_item{
        display: inline-block;
        width: 33.333333333%;
        text-align: center;
        float: left;
        font-size: 2.2em;
        color: #000;
        padding: 20px 0;
        font-weight: 200;
        letter-spacing: 2px;
    }
    .menu_mobile_item i{
        font-size: 1.5em;
        padding: 0;
        font-weight: 300;
        margin: 0;
        padding: 0;
    }
    .main_menu_mobile h2{
        color:#000;
        font-size: 2.5em;
        font-weight: 300;
        letter-spacing: 2px;
        text-align: center;
        padding: 20px 0;
        padding-top:20px;
        z-index: 100;
        margin-bottom: 20px;
    }
    .sub_menu_mobile{
        padding: 0 20px;
        height: auto;
        background: #C2C2C2;
    }
    .sub_menu_mobile h2{
        font-weight: 200;
    }
    .sub_menu_mobile a{
        display: block;
        padding: 10px 0;
        color: #000;
        font-size: 1.5em;
        font-weight: 200;
        text-decoration: none;
    }
    .sub_menu_mobile a:active{
       text-decoration: none;
    }
    .sub_menu_mobile a:focus{
       text-decoration: none;
    }
    .sub_menu_mobile i{
        display: inline-block;
    }
    #btn_logout{
        clear: both;
        margin-top: 15px;
        position: relative;
        left: 5%;
        /* margin-left: 103px; */
        background: #d14233;
        border-radius: 2px;
        width: 90% !important;
    }
    #btn_logout a:active{
       text-decoration: none;
    }
    #btn_logout a:focus{
       text-decoration: none;
    }
    #btn_logout p{
        color: #fff;
    }
    .pe-7s-power{
        color: #FFF !important;
    }
    .logout_button{
        clear: both;
        margin-top: 15px;
        position: relative;
        left: 5%;
        /* margin-left: 103px; */
        background: #d14233;
        border-radius: 2px;
        width: 90% !important;
    }
    .logout_button a:active{
       text-decoration: none;
    }
    .logout_button a:focus{
       text-decoration: none;
    }
    /*------ Content --------*/
    .page-wrapper-tour{
        display: none;
    }
    #page-mobile-wrapper{
        display: block;
    }
    .page-margin{
        margin-left: 15px;
    }
    .img-fix{
        width: 100%;
        height: 180px;
        background-size: cover;
    }
    .hr-tour{
        padding: 0 0;
        margin-top: -5px;
        margin-bottom: 5px;
    }
    .p-tour{
        font-weight: 300;
        font-size: 11px;
        margin-bottom: 10px;
    }
    .search-mobile{
        display: inline-flex;
        width: 100%;
        height: auto;
        margin: 0 30%;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .text-information-mobile{
        display: inline-block;
        width: 105px;
    }
    .input-information-mobile{
        display: inline-block;
        outline: none;
    }
    .check-button-mobile{
        display:block;
        background: #F4D03F !important;
        border: 2px solid #F7CA18 !important;
        margin: 20px 37%;
        height: 35px;
    }
    .message-mobile-discount{
        position: absolute;
        margin-left: 35%;
    }
    .map-mobile{
        margin-top: 15px;
        width: 200px;
    }
    .booking-mobile{
        margin: 15px 36%;
        outline: none;
    }
    .conclude{
        display: none !important;
    }
    #mobile-information{
        position: absolute;
        display: none;
        width: 100vw;
        height:auto;
        background: #fff;
    }
    .left-mobile{
        margin-left: 10px;
    }
}

#helpBlock{
    position: absolute;
    margin-left: 152px;
    margin-top: -19px;

}
.tn-view p:hover{
    content:'Max length 30 digit.';
    position: absolute;
    margin-left: 152px;
    margin-top: -19px;
}
label.label-discount {
    width: 218px;
}
.discount-view {
    width: 181px !important;
}
.discount-view1 {
    width: 344px !important;
}
.discount-submit{
    color: #eee;
    position: absolute;
    display: inline-block;
    padding: 0px 40px;
    margin-top: 0px;
    font-size: 25px;
    font-weight: 300;
    border: solid 1px #333;
    margin-left: 19px;
    background: #f1a100;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 2px 0px #f38c00;
    background: -webkit-linear-gradient(#ebaf00, #f1a100);
    background: -o-linear-gradient(#ebaf00, #f1a100);
    background: -moz-linear-gradient(#ebaf00, #f1a100);
    background: linear-gradient(#ebaf00, #f1a100);
}
#check_name{
    display: none;
}
#check_id:hover + #check_name {
    display: inline-block;
    margin-left:  5px;
}
.money_button{
    display: block;
    position: fixed;
    right: 0;
    top: 100px;
    background: #ec3e68;
    padding: 10px 20px 10px 20px;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}
.money_button i{
    padding: 0;
    color: #fff;
}
.money_checkout{
    display: none;
    position: fixed;
    right: 0;
    top: 100px;
    background: #ec3e68;
    padding: 10px 20px 10px 20px;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}
.loadcancel{
    display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: rgba(0,0,0,0.7);
    z-index: 10000;
}
.img-online{
    width: 70%;
    margin-left: 15%;
}
#floatingBarsG{
    position:relative;
    width:60px;
    height:75px;
    margin:auto;
}

.blockG{
    position:absolute;
    background-color:rgb(255,255,255);
    width:10px;
    height:23px;
    border-radius:8px 8px 0 0;
        -o-border-radius:8px 8px 0 0;
        -ms-border-radius:8px 8px 0 0;
        -webkit-border-radius:8px 8px 0 0;
        -moz-border-radius:8px 8px 0 0;
    transform:scale(0.4);
        -o-transform:scale(0.4);
        -ms-transform:scale(0.4);
        -webkit-transform:scale(0.4);
        -moz-transform:scale(0.4);
    animation-name:fadeG;
        -o-animation-name:fadeG;
        -ms-animation-name:fadeG;
        -webkit-animation-name:fadeG;
        -moz-animation-name:fadeG;
    animation-duration:1.2s;
        -o-animation-duration:1.2s;
        -ms-animation-duration:1.2s;
        -webkit-animation-duration:1.2s;
        -moz-animation-duration:1.2s;
    animation-iteration-count:infinite;
        -o-animation-iteration-count:infinite;
        -ms-animation-iteration-count:infinite;
        -webkit-animation-iteration-count:infinite;
        -moz-animation-iteration-count:infinite;
    animation-direction:normal;
        -o-animation-direction:normal;
        -ms-animation-direction:normal;
        -webkit-animation-direction:normal;
        -moz-animation-direction:normal;
}

#rotateG_01{
    left:0;
    top:27px;
    animation-delay:0.45s;
        -o-animation-delay:0.45s;
        -ms-animation-delay:0.45s;
        -webkit-animation-delay:0.45s;
        -moz-animation-delay:0.45s;
    transform:rotate(-90deg);
        -o-transform:rotate(-90deg);
        -ms-transform:rotate(-90deg);
        -webkit-transform:rotate(-90deg);
        -moz-transform:rotate(-90deg);
}

#rotateG_02{
    left:8px;
    top:10px;
    animation-delay:0.6s;
        -o-animation-delay:0.6s;
        -ms-animation-delay:0.6s;
        -webkit-animation-delay:0.6s;
        -moz-animation-delay:0.6s;
    transform:rotate(-45deg);
        -o-transform:rotate(-45deg);
        -ms-transform:rotate(-45deg);
        -webkit-transform:rotate(-45deg);
        -moz-transform:rotate(-45deg);
}

#rotateG_03{
    left:25px;
    top:3px;
    animation-delay:0.75s;
        -o-animation-delay:0.75s;
        -ms-animation-delay:0.75s;
        -webkit-animation-delay:0.75s;
        -moz-animation-delay:0.75s;
    transform:rotate(0deg);
        -o-transform:rotate(0deg);
        -ms-transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
        -moz-transform:rotate(0deg);
}

#rotateG_04{
    right:8px;
    top:10px;
    animation-delay:0.9s;
        -o-animation-delay:0.9s;
        -ms-animation-delay:0.9s;
        -webkit-animation-delay:0.9s;
        -moz-animation-delay:0.9s;
    transform:rotate(45deg);
        -o-transform:rotate(45deg);
        -ms-transform:rotate(45deg);
        -webkit-transform:rotate(45deg);
        -moz-transform:rotate(45deg);
}

#rotateG_05{
    right:0;
    top:27px;
    animation-delay:1.05s;
        -o-animation-delay:1.05s;
        -ms-animation-delay:1.05s;
        -webkit-animation-delay:1.05s;
        -moz-animation-delay:1.05s;
    transform:rotate(90deg);
        -o-transform:rotate(90deg);
        -ms-transform:rotate(90deg);
        -webkit-transform:rotate(90deg);
        -moz-transform:rotate(90deg);
}

#rotateG_06{
    right:8px;
    bottom:7px;
    animation-delay:1.2s;
        -o-animation-delay:1.2s;
        -ms-animation-delay:1.2s;
        -webkit-animation-delay:1.2s;
        -moz-animation-delay:1.2s;
    transform:rotate(135deg);
        -o-transform:rotate(135deg);
        -ms-transform:rotate(135deg);
        -webkit-transform:rotate(135deg);
        -moz-transform:rotate(135deg);
}

#rotateG_07{
    bottom:0;
    left:25px;
    animation-delay:1.35s;
        -o-animation-delay:1.35s;
        -ms-animation-delay:1.35s;
        -webkit-animation-delay:1.35s;
        -moz-animation-delay:1.35s;
    transform:rotate(180deg);
        -o-transform:rotate(180deg);
        -ms-transform:rotate(180deg);
        -webkit-transform:rotate(180deg);
        -moz-transform:rotate(180deg);
}

#rotateG_08{
    left:8px;
    bottom:7px;
    animation-delay:1.5s;
        -o-animation-delay:1.5s;
        -ms-animation-delay:1.5s;
        -webkit-animation-delay:1.5s;
        -moz-animation-delay:1.5s;
    transform:rotate(-135deg);
        -o-transform:rotate(-135deg);
        -ms-transform:rotate(-135deg);
        -webkit-transform:rotate(-135deg);
        -moz-transform:rotate(-135deg);
}



@keyframes fadeG{
    0%{
        background-color:rgb(0,0,0);
    }

    100%{
        background-color:rgb(255,255,255);
    }
}

@-o-keyframes fadeG{
    0%{
        background-color:rgb(0,0,0);
    }

    100%{
        background-color:rgb(255,255,255);
    }
}

@-ms-keyframes fadeG{
    0%{
        background-color:rgb(0,0,0);
    }

    100%{
        background-color:rgb(255,255,255);
    }
}

@-webkit-keyframes fadeG{
    0%{
        background-color:rgb(0,0,0);
    }

    100%{
        background-color:rgb(255,255,255);
    }
}

@-moz-keyframes fadeG{
    0%{
        background-color:rgb(0,0,0);
    }

    100%{
        background-color:rgb(255,255,255);
    }
}
.online_status{
    position: relative;
    display: block;
    background: #2ecc71;
    width: 14px;
    height:14px;
    border-radius: 100%;
    margin: 0 auto;
}
.online_status .tooltiptext{
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    /* Position the tooltip text */
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    /* Fade in tooltip */
    opacity: 1;
    transition: opacity 1s;
}
.online_status .tooltiptext::after{
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}
.online_status:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
.offline_status:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
.offline_status{
    position: relative;
    display: block;
    background: #e74c3c;
    width: 14px;
    height:14px;
    border-radius: 100%;
    margin: 0 auto;
}
.offline_status .tooltiptext{
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    /* Position the tooltip text */
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    /* Fade in tooltip */
    opacity: 1;
    transition: opacity 1s;
}
.offline_status .tooltiptext::after{
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}
.place-edit{
    color: #000;
}
.place-edit:hover{
    text-decoration: none;
}
.conclude{
    display: block;
    position: fixed;
    width: 100%;
    margin-left: -100px;
    background: black;
    height: 100vh;
    z-index: 1000;
    background-color: rgba(0, 0, 0, 0.3);
}
.conclude .form{
    width: 70%;
    height: 90%;
    background: #fff;
    padding: 0 0;
    margin-left: 20%;
    margin-top: 3%;
    border: 1px solid #fff;
    border-radius: 3px;
    background:#fbfbfb;
}
.box-confirm{
    display: inline-block;
    width: 70%;
    padding: 0 0;
    margin: 30px;
    font-size: 15px;
    font-weight: 300;
    line-height: 25px;
    letter-spacing: 0.7px;
}
.box-confirm p{
    display: block;
    letter-spacing: 1.4px;
}
.box-confirm .twin-class{
    display: inline-block;
    width: 49%;
}
.box-confirm .twin-class1{
    display: inline-block;
    width: 24%;
}

.cash{
    position: fixed;
    width: 100px;
    height: 100px;
    background: none;
    margin-left: 52%;
    margin-top: -3%;
}
.label_name
{
    display: block;
    font-size: 20px;
    font-weight: 300;
    padding-top: 10px;
}
.iname{
    width: 285px;
    color: #000;
    border-radius: 26px;
    font-size: 20px;
    padding: 3px 25px;
    margin-top: 10px;
    border: 2px solid #7640f4;
    outline: none;
}
.cardnumber{
    margin-left: 5px;
    width: 80px;
    height: 20px;
    border-radius: 26px;
    font-size: 20px;
    padding: 17px 15px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin-top: 10px;
    border: 2px solid #7640f4;
    color: #000;
    outline: none;
}
.numdate{
    width: 80px;
    margin-left: 5px;
    display: inline-block;
    height: 20px;
    border-radius: 26px;
    font-size: 20px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin-top: 10px;
    border: 2px solid #7640f4;
    padding: 17px 15px;
    color: #7640f4;
    outline: none;
}
.numyear{
    width: 185px;
    margin-left: 5px;
    display: inline-block;
    height: 20px;
    border-radius: 26px;
    font-size: 20px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin-bottom: 20px;
    border: 2px solid #7640f4;
    padding: 17px 15px;
    color: #7640f4;
    outline: none;
}
.label_slad{
    display: inline-block;
}
.cvv{
    width: 87px;
    color: #000;
    border-radius: 26px;
    font-size: 20px;
    padding: 3px 25px;
    margin-top: 10px;
    border: 2px solid #7640f4;
    outline: none;
}
.btn-submit{                
    color: #eee;
    display: inline-block;
    padding: 10px 50px;
    width: 285px;
    margin-top: 20px;
    font-size: 20px;
    font-weight: 600;
    border: solid 1px #333;
    /* margin-left: 100px; */
    background: #f1a100;
    border: none;
    border-radius: 50px;
    box-shadow: 0px 2px 0px #f38c00;
    background: -webkit-linear-gradient(#ebaf00, #f1a100);
    background: -o-linear-gradient(#ebaf00, #f1a100);
    background: -moz-linear-gradient(#ebaf00, #f1a100);
    background: linear-gradient(#ebaf00, #f1a100);
}
.btn-submit:focus{
    outline: none;
}
#token_errors{
    color: #D91E18;
}

.wrap{
  display: flex;
  width: 100%;
  margin: auto;
}
.scroller{
  flex: 1;
  overflow: hidden;
}

.items{
  white-space: nowrap;
}
.item{
  padding: 10px 0;
  display: inline-block;
  width: 100%;
  background-size: cover;
  background-position: 50% 50%;
}
.btn-arrow{
    background: none;
    outline: none;
    border: none;
}
</style>

<div class="jvectormap-tip"></div></body></html>