@extends('layouts.main')

@section('title', 'Mac OS Mail APP')

@section('content')
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
        <div class="container">         
            <h3 class="page-title">
             How to Add an Email Signature in {{$signature_window->sign_method_name}}
        </h3>
        <!-- END PAGE Title-->

        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- BEGIN EMAIL SIGNATURE Type-->
                <div class="portlet light bordered">
                    <div class="portlet-body form">
                        <!-- Windows-->
                        <div class="row signature-text-font">     
                            <div class="col-md-12 col-sm-12 wpb_column column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Summary</strong></h3>
                                            <p>The easiest way to install an email signature on a mobile device is to send yourself an empty email with the email signature at the bottom, copy the email signature and paste it into your email signature settings in the app.</p>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 wpb_column column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 1:</strong></h3>
                                            <p>Install the email signature into another email program such as Outlook or Gmail. Instructions for which can be found here: </p>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 wpb_column column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 2:</strong></h3>
                                            <p>Send an empty email (with the signature) from the other email program to the email account that is set up on your Android device.</p>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 wpb_column column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 3:</strong></h3>
                                            <p>Open the email on your Android device, press and hold over any text in the email signature, then press the Copy button at the top of the screen.</p>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 4:</strong></h3>
                                            <p>Open the native Mail App on your Android device. In the top right, press the menu button with the 3 dots, then press Settings.</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper  ">
                                                <img width="324" height="576" src="{{asset(('images/signature_mail_introduction/mail_app_android_emailsignature_1.png'))}}" class="img-responsive" alt="Mail App Android Email Signature">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 5:</strong></h3>
                                            <p>In the Settings menu, select General Settings.</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper  ">                                               
                                                <img width="324" height="576" src="{{asset(('images/signature_mail_introduction/mail_app_android_emailsignature_2.png'))}}" class="img-responsive" alt="Mail App Android Email Signature" >
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 6:</strong></h3>
                                            <p>In the General Settings menu, ensure that Use signature is ticked and then go into Signature.</p>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper  ">
                                               <img width="324" height="576" src="{{asset(('images/signature_mail_introduction/mail_app_android_emailsignature_3.png'))}}" class="img-responsive" alt="Mail App Android Email Signature">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 7:</strong></h3>
                                            <p>Remove any text that is currently in the signature text area. Press and hold over the email signature text area until a pop up box comes up and then Paste the new signature in there. Once done, press Save.</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper  ">
                                               <img width="324" height="576" src="{{asset(('images/signature_mail_introduction/mail_app_android_emailsignature_4.png'))}}" class="img-responsive" alt="Mail App Android Email Signature">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 8:</strong></h3>
                                            <p>Your new email signature is now installed! Test it out by composing a new email to make sure it looks correct.</p>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END EMAIL SIGNATURE Type-->                  
            </div>          
        </div>      
    </div>
@endsection
@section('custom_script')
    
@endsection