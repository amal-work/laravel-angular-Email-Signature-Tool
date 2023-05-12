@extends('layouts.main')

@section('title', 'AOL mail')

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
                            <div class="col-md-12 col-sm-12 wpb_column column_container">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 1:</strong></h3>
                                            <p>Open up your browser and log in to AOL Mail. Click on Options in the top right corner, then select Mail Settings.</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper  ">                                              
                                                <img width="226" height="449" src="{{asset(('images/signature_mail_introduction/aol_emailsignature_1.png'))}}" class="img-responsive" alt="AOL Email Signature">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 2:</strong></h3>
                                            <p>Click on Compose from the left menu. Ensure that Use Rich Text / HTML Formatting is ticked. From the Signature drop-down box, select Use Signature.</p>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">                                                                                       
                                            <img width="1352" height="567" src="{{asset(('images/signature_mail_introduction/aol_emailsignature_2.png'))}}" class="img-responsive" alt="AOL Email Signature2" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 3:</strong></h3>
                                            <p>Paste your email signature into the text box that opens up. At the bottom, click on Save Settings.</p>
                                            <p><strong>Note:</strong> When you copy the email signature, make sure you use CTRL + A to select the whole signature instead of using your mouse to select the signature. This ensures that all code is copied correctly and the formatting remains correct.</p>
                                        </div>
                                    </div>

                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">                                                                                       
                                           <img width="1352" height="567" src="{{asset(('images/signature_mail_introduction/aol_emailsignature_3.png'))}}" class="img-responsive" alt="AOL Email Signature 3" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 4:</strong></h3>
                                            <p>Your new email signature is now installed! Test it out by composing a new email to make sure it looks correct.</p>

                                        </div>
                                    </div>

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