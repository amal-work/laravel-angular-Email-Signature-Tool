<!DOCTYPE html>
<!-- 
Template Name: Email Signature
Version: 1.1.0
Author: Emil
Website: http://test.com
Contact: support@emil.com
-->
<html lang="en">

<head>
<meta charset="utf-8"/>
<title>@yield('title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>

<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

<link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet"/>
<link href="{{asset('css/jquery.minicolors.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-fileinput.css')}}"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="{{asset('css/components-md.css')}}" id="style_components" rel="stylesheet" type="text/css"/>

<link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css"/>
<link id="style_color" href="{{asset('css/darkblue.css')}}" rel="stylesheet" type="text/css"/>

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<style type="text/css">
    .page-content-wrapper .page-content{
        margin-left: 0px;
    }
    .soc-icon-size li{
        border: 2px solid #1CB7EB;
        color: #1CB7EB;
    }
    #style h5{
        color: grey;
        font-size: 15px;
    }
    #style {
        padding: 0;     
        width: 100%;        
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        position: relative;
        overflow: hidden;
    }
    #style .block {
        float: left;
        padding: 20px 10px;
        width: 20%;
        text-align: center;
        position: relative;
        font-family: Lato;
        height: 240px;
        transition: all 0.5s ease;
    }
    .shape-list li {
        margin: 0 2px 0 0;
        padding: 0;
        width: 20px;
        height: 20px;   
        border: 2px solid #b8b8b8;
        position: relative;
        cursor: pointer;
        vertical-align: middle;
    }
    .shape-list li:nth-child(2){
        border-radius: 4px;
    }
    .shape-list li:nth-child(3){
        border-radius: 50%;
    }
    .custom-min-height{
        min-height: 48px;
    }
    .custom-min-height30{
        min-height: 30px;
    }
    .border-item1{
        border-top: 2px dotted #26a69a;
        height: 12px;
        background-color: #283B4D;
    }
    .border-item2{
        border-top: 2px solid #26a69a;
        background-color: #283B4D;
        height: 13px;
    }
    .form-group.form-md-line-input{
        margin: 0 0 7px 0;
    }
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-quick-sidebar-over-content" ng-app="mainApp">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
            <img src="../../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
     <div class="container">
        <ng-view></ng-view>
    </div>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                             Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE Title-->
            <h3 class="page-title">
            Your signature details <small>your signature detail here</small>
            </h3>
            <!-- END PAGE Title-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- BEGIN EMAIL SIGNATURE DETAIL-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <i class="icon-pin font-green"></i>
                                <span class="caption-subject bold uppercase">EMAIl signature detail</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                <i class="icon-trash"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div class="form-group text-center">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                            </div>
                                            <div>
                                                <span class="btn default btn-file">
                                                <span class="fileinput-new">
                                                Select image </span>
                                                <span class="fileinput-exists">
                                                Change </span>
                                                <input type="file" name="...">
                                                </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="name" name="name">
                                        <label for="name">Name</label>
                                        <span class="help-block">Please input name here...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="title" name="title">
                                        <label for="title">Title</label>
                                        <span class="help-block">Please input title...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="company" name="company">
                                        <label for="company">Company</label>
                                        <span class="help-block">Please input company...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="Phone" name="phone">
                                        <label for="Phone">Phone</label>
                                        <span class="help-block">Please input phone...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="title" name="mobile_phone">
                                        <label for="mobile_phone">Mobile phone</label>
                                        <span class="help-block">Please input mobile phone...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="website_url">
                                        <label for="website_url">Website URL</label>
                                        <span class="help-block">Please input website url...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="addr_line1" name="addr_line1">
                                        <label for="addr_line1">Address Line1</label>
                                        <span class="help-block">Please input address line1...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="addr_line1" name="addr_line2">
                                        <label for="addr_line2">Address Line1</label>
                                        <span class="help-block">Please input address line2...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="addr_line3">
                                        <label for="form_control_1">Address Line3</label>
                                        <span class="help-block">Please input address line3...</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END EMAIL SIGNATURE DETAIL-->                  
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- BEGIN YOUR SIGNATURE SOCIAL PROFILE-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <i class="icon-pin font-green"></i>
                                <span class="caption-subject bold uppercase">Your signature social profile</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                <i class="icon-trash"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input has-success ">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" name="facebook_input" id="facebook_input">
                                            <label for="facebook_link">facebook.com</label>
                                            <span class="help-block">Please input facebook link here...</span>
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success f">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" name="twitter_input" id="twitter_input">
                                            <label for="facebook_link">twitter.com</label>
                                            <span class="help-block">Please input twitter link here...</span>
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success ">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" name="instagram_input" id="instagram_input">
                                            <label for="facebook_link">instagram.com</label>
                                            <span class="help-block">Please input instagram link here...</span>
                                            <i class="fa fa-instagram"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success ">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" id="linkedin_input" name="linkedin_input">
                                            <label for="facebook_link">linkedin.com</label>
                                            <span class="help-block">Please input linkedin link here...</span>
                                            <i class="fa fa-linkedin"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success ">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" id="skype_input" name="skype_input">
                                            <label for="facebook_link">skype.com</label>
                                            <span class="help-block">Please input skype link here...</span>
                                            <i class="fa fa-skype"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success ">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" id="telegram_input" name="telegram_input">
                                            <label for="facebook_link">telegram.com</label>
                                            <span class="help-block">Please input telegram link here...</span>
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success ">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" id="youtube_input" name="youtube_input">
                                            <label for="facebook_link">youtube.com</label>
                                            <span class="help-block">Please input youtube link here...</span>
                                            <i class="fa fa-youtube"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success ">
                                        <div class="input-icon">
                                            <input type="text" class="form-control">
                                            <label for="facebook_link">RSS.com</label>
                                            <span class="help-block">Please input RSS link here...</span>
                                            <i class="fa fa-rss"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions noborder">
                                    <button type="button" class="btn  btn-primary"><i class="fa fa-plus"></i>Add social icon</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END YOUR SIGNATURE SOCIAL PROFILE-->
                </div>
                <!-- BEGIN YOUR DESIGN STYLE-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <i class="icon-pin font-green"></i>
                                <span class="caption-subject bold uppercase">Your design style</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                <i class="icon-trash"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div id="style">
                                        <div class="block">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">              
                                                <h5 class="text-center custom-min-height">
                                                    Font size
                                                </h5>
                                                <div class="slider slider-basic bg-red">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">              
                                                <h5 class="text-center">
                                                Social icon</h5>
                                                <ul class="list-inline soc-icon-size">
                                                    <li>S</li>
                                                    <li>M</li>
                                                    <li>L</li>
                                                </ul>
                                                <div class="slider slider-basic bg-red">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">              
                                                <h5 class="text-center">Photo</h5>
                                                <ul class="list-inline soc-icon-size shape-list">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                                <div class="slider slider-basic bg-red">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">              
                                                <h5 class="text-center custom-min-height30">Template color</h5>
                                                <div class="form-group">                                                    
                                                    <input type="hidden" id="hidden-input" class="demo" value="#db913d">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">              
                                                <h5 class="text-center">Border</h5>
                                                <dir class="border-item1"></dir>
                                                <dir class="border-item2"></dir>
                                            </div>
                                        </div>  
                                    </div>                                  
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- BEGIN YOUR TEMPLATE SELECTION-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <i class="icon-pin font-green"></i>
                                <span class="caption-subject bold uppercase">Your template selection</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                <i class="icon-trash"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                          <!-- Indicators -->
                                          <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                          </ol>

                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner">
                                            <div class="item active">
                                              <img src="la.jpg" alt="Los Angeles">
                                            </div>

                                            <div class="item">
                                              <img src="chicago.jpg" alt="Chicago">
                                            </div>

                                            <div class="item">
                                              <img src="ny.jpg" alt="New York">
                                            </div>
                                          </div>

                                          <!-- Left and right controls -->
                                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END YOUR TEMPLATE SELECTION-->
                </div>
                <!-- END YOUR DESIGN STYLE-->
                
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->

<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
<div class="page-footer-inner">
     2018 &copy; Email Signature by Emil.
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
</div>
<!-- END FOOTER -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<script src="{{asset('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('js/bootstrap-fileinput.js')}}"></script>

<script src="{{asset('js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-selectsplitter.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.minicolors.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="{{asset('js/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('js/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('js/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/demo.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components-jqueryui-sliders.js')}}"></script>
<script src="{{asset('js/components-form-tools2.js')}}"></script>

<script type="text/javascript" src="https://code.angularjs.org/1.5.7/angular.min.js"></script>
<script type="text/javascript" src="https://code.angularjs.org/1.5.7/angular-route.min.js"></script>
<script type="text/javascript" src="https://code.angularjs.org/1.5.8/angular-animate.min.js"></script>
<script type="text/javascript" src="../js/libraries/ui-bootstrap-tpls-2.0.0.min.js"></script>

<script src="https://npmcdn.com/angular-toastr/dist/angular-toastr.tpls.js"></script>

<script type="text/javascript" src="../js/index.js"></script>
<script type="text/javascript" src="../js/services/todoService.js"></script>
<script type="text/javascript" src="../js/mainRoutes.js"></script>
<script type="text/javascript" src="../js/mainApp.js"></script>

<script>
jQuery(document).ready(function() {      
    Metronic.init(); 
    Layout.init(); 
    ComponentsjQueryUISliders.init();
    ComponentsFormTools2.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>