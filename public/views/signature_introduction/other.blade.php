@extends('layouts.main')

@section('title', 'Other Email')

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
                        <div class="row">     
                            <div class="col-md-12 col-sm-12 wpb_column column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 1:</strong></h3>
                                            <p>Once you are ready to set up your email signature,&nbsp;open eM Client.&nbsp;From the top left corner, click on Menu, select Tools and then click on Settings.</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper  ">
                                                <img width="398" height="367" src="https://www.zippysig.com/wp-content/uploads/emclient_win_emailsignature_1.png" class="img-responsive" alt="eM Client Email Signature" 
                                                >
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
                                            <p>From the left menu, click on Mail and then click Templates and Signatures. On the right side, under the Signatures heading, click on the Signatures… button</p>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper  ">
                                                <img width="724" height="557" src="https://www.zippysig.com/wp-content/uploads/emclient_win_emailsignature_2.png" class="img-responsive" alt="eM Client Email Signature" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 4:</strong></h3>
                                            <p>Type a name for your new email signature, and paste your email signature into the text box provided. Once done, click OK until you return to the Settings screen.</p>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper  ">
                                                <img width="786" height="491" src="https://www.zippysig.com/wp-content/uploads/emclient_win_emailsignature_4.png" class="img-responsive" alt="eM Client Email Signature">
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
                                            <p>When you get back to the Settings screen, make sure you select your account from the drop-down box&nbsp;and also select your new signature to display for new emails, replies and forwards. Once done, click Apply and then OK.</p>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper  ">
                                                <img width="724" height="557" src="https://www.zippysig.com/wp-content/uploads/emclient_win_emailsignature_5.png" class="vc_single_image-img attachment-full retinized" alt="eM Client Email Signature img-responsive"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 6:</strong></h3>
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