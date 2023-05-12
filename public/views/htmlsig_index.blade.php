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
    <meta charset="utf-8" />
    <title>Email Signature</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/htmlsig_font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/htmlsig_simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/htmlsig_jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/color-picker.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/htmlsig_bootstrap-fileinput.css')}}" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link href="{{asset('css/htmlsig_components-md.css')}}" id="style_components" rel="stylesheet" type="text/css" />
    <link rel='stylesheet prefetch' href='https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.9/angular-material.css'>
    
    <link href="{{asset('css/htmlsig_layout.css')}}" rel="stylesheet" type="text/css" />
    <link id="style_color" href="{{asset('css/htmlsig_darkblue.css')}}" rel="stylesheet" type="text/css" />
    <link id="style_color" href="{{asset('css/htmlsig_style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link id="style_color" href="{{asset('css/htmlsig_simpleLightbox.min.css')}}" rel="stylesheet" type="text/css" />    

    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->

<body ng-app="mainApp" class="page-md page-header-fixed page-quick-sidebar-over-content">
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
        <!-- BEGIN CONTENT -->        
        <div ng-view></div>               
    </div>
    <!-- END CONTENT -->

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

    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.js'></script>
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-animate.min.js'></script>
	  
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-aria.min.js'></script>
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-messages.min.js'></script>
	<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/svg-assets-cache.js'></script>
	<script src='https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.9/angular-material.js'></script>

	<!-- <script src="https://code.angularjs.org/1.5.7/angular.min.js" type="text/javascript" ></script> -->
    <script src="https://code.angularjs.org/1.5.7/angular-route.min.js" type="text/javascript" ></script>
    <!-- <script src="https://code.angularjs.org/1.5.8/angular-animate.min.js" type="text/javascript" ></script> -->
    <script src="{{asset('js/libraries/htmlsig_ui-bootstrap-tpls-2.0.0.min.js')}}" type="text/javascript"></script>

    <script src="https://npmcdn.com/angular-toastr/dist/angular-toastr.tpls.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="{{asset('js/htmlsig_index.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/services/htmlsig_todoService.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/htmlsig_mainRoutes.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/htmlsig_mainApp.js')}}" type="text/javascript"></script>


    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="{{asset('js/htmlsig_jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/htmlsig_slider.js')}}" type="text/javascript"></script>    

    <script src="{{asset('js/htmlsig_jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/htmlsig_color-picker.min.js')}}" type="text/javascript"></script>
    
    <script src="{{asset('js/htmlsig_bootstrap-fileinput.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/htmlsig_bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/htmlsig_bootstrap-selectsplitter.min.js')}}" type="text/javascript"></script>
    
    <!-- END CORE PLUGINS -->
    <script src="{{asset('js/htmlsig_metronic.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/htmlsig_layout.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/htmlsig_quick-sidebar.js')}}" type="text/javascript"></script>    
    <script src="{{asset('js/htmlsig_jquery-loader.js')}}" type="text/javascript"></script>    
    <script src="{{asset('js/htmlsig_clipboard.min.js')}}" type="text/javascript"></script>        
    <script src="{{asset('js/htmlsig_simpleLightbox.min.js')}}" type="text/javascript"></script>        

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