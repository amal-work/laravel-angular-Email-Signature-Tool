@extends('layouts.main')

@section('title', 'Google mail')

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
                                            <p>Once you are ready to set up your email signature, log into your Gmail account using a web browser. At the top right, click the settings icon. Select Settings.</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper  ">                                             
                                                <img width="303" height="244" src="{{asset(('images/signature_mail_introduction/Gmail-1.png'))}}" alt="Gmail 1">
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
                                            <p>Scroll down to the Signature section and paste your new or updated signature in the text box.</p>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">                                            
                                            <img width="624" height="401" src="{{asset(('images/signature_mail_introduction/Gmail-2.png'))}}" class="img-responsive" alt="Gmail 2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 3:</strong></h3>
                                            <p>At the bottom of the page, click Save Changes. Click to compose a new email and see your new signature in action!</p>

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