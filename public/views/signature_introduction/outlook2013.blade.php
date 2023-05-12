@extends('layouts.main')

@section('title', 'Outlook 2013')

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
                                            <p>Once you are ready to set up your email signature, open Outlook. From the menu bar, select File and click on Options.</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper  ">                                               
                                                <img width="604" height="457" src="{{asset(('images/signature_mail_introduction/Outlook-2013-1.png'))}}" class="img-responsive" alt="Outlook 2013 1">
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
                                            <p>Click on Mail in the left pane and ensure that “HTML” is selected in the “Compose in this message format” section in the right pane, then click the Signatures button.</p>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">                                                                                       
                                            <img width="624" height="228" src="{{asset(('images/signature_mail_introduction/Outlook-2013-2.png'))}}" class="img-responsive" alt="Outlook 2013 2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 3:</strong></h3>
                                            <p>Click New. Type a name for the new signature, and then click OK.</p>
                                            <p>If you just want to change an existing email signature, select the signature you want to edit.</p>
                                        </div>
                                    </div>

                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">                                                                                       
                                            <img width="710" height="485" src="https://www.zippysig.com/wp-content/uploads/Outlook-2013-3.png" class="img-responsive" alt="Outlook 2013 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 4:</strong></h3>
                                            <p>Click in the Edit Signature box and paste (or press CTRL+V) your new or updated email signature. On the right side of the window, select if the email signature should automatically appear for new messages and/or replies and forwards. Click OK on all windows until you are back at the main Outlook window. Click to create a new email and check out your new signature!</p>

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