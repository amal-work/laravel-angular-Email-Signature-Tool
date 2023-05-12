@extends('layouts.main')

@section('title', 'iOS Mail APP')

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
                                            <p>Unfortunately, because of a problem in iOS (the operating system for iPhones and iPads), installing a signature directly causes the font to be converted to Times New Roman. In order to prevent the change, you must install the signature in another email program first, such as Outlook or Gmail, send an empty email with the signature to the iPhone / iPad, copy the signature into the email signature field, <strong>then you need to shake the phone until a menu appears, finally select “undo”</strong> and the signature should work.</p>
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
                                            <p>Send an empty email (with the signature) from the other email program to the email on the iPhone / iPad.</p>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 wpb_column column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 3:</strong></h3>
                                            <p>Open the email on your iOS device, press and hold over any plain text in the signature, then press “Select All” and press “Copy”.</p>
                                        </div>
                                    </div>  

                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper  ">
                                                <img width="441" height="784" src="{{asset(('images/signature_mail_introduction/IMG_0114-441x784.png'))}}" class="img-responsive" >
                                            </div>
                                        </div>
                                    </div>                             
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 wpb_column column_container section-highlight">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element  ">
                                        <div class="wpb_wrapper">
                                            <h3><strong>Step 4:</strong></h3>
                                            <p>Go to Settings, select “Mail”, scroll down to “Signature”, press and hold over the email signature area, paste the new signature. <strong>Important</strong>: Shake the screen until the popup window below shows up:</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                    <div class="wpb_single_image wpb_content_element  vc_align_left">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper  ">
                                                <img width="441" height="784" src="{{asset(('images/signature_mail_introduction/IMG_0115-441x784.png'))}} class="img-responsive" alt="iOS email signature installation step 2">
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
                                            <p>Choose “Undo”, and your signature is now installed!</p>
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