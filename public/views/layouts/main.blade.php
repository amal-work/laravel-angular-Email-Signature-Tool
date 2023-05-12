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

<link href="{{asset('css/htmlsig_font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('css/htmlsig_simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

<link href="{{asset('css/htmlsig_jquery-ui.min.css')}}" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/htmlsig_bootstrap-fileinput.css')}}"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="{{asset('css/htmlsig_components-md.css')}}" id="style_components" rel="stylesheet" type="text/css"/>

<link href="{{asset('css/htmlsig_layout.css')}}" rel="stylesheet" type="text/css"/>
<link id="style_color" href="{{asset('css/htmlsig_darkblue.css')}}" rel="stylesheet" type="text/css"/>

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
    .section-highlight {
        padding-top: 26px;
        padding-bottom: 20px;
        border-top: 1px solid rgb(221, 221, 221);
        margin-top: 10px!important;
        margin-bottom: 10px!important;
    }
    .signature-text-font{
        font-size: 16px;
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
            <img src="{{asset('img/logo.png')}}" alt="logo" class="logo-default" style="height: 20px;" />
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
        @yield('content')
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
<script src="{{asset('js/htmlsig_jquery.min.js')}}" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('js/htmlsig_jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<script src="{{asset('js/htmlsig_jquery.slimscroll.min.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('js/htmlsig_bootstrap-fileinput.js')}}"></script>

<script src="{{asset('js/htmlsig_bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/htmlsig_bootstrap-selectsplitter.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="{{asset('js/htmlsig_metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('js/htmlsig_layout.js')}}" type="text/javascript"></script>
<script src="{{asset('js/htmlsig_quick-sidebar.js')}}" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {      
    Metronic.init(); 
    Layout.init();     
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>