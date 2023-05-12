@extends('layouts.main')

@section('title', 'Email Signature')

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
	   		 How to Install an Email Signature
	    </h3>
	    <!-- END PAGE Title-->

	    <!-- BEGIN PAGE CONTENT-->
	    <div class="row">
	        <div class="col-md-12 col-sm-12 col-xs-12">
	            <!-- BEGIN EMAIL SIGNATURE Type-->
	            <div class="portlet light bordered">
	                <div class="portlet-title">
	                    <div class="caption font-green">	                        
	                        <h2><strong>Signature Mail List</strong></h2>
	                    </div>
	                </div>
	                <div class="portlet-body form">
	                	<!-- Windows-->
	                    <div class="row">     
	                        @foreach($signature_windows as $signature_window)       	
	                    	<div class="col-sm-4 col-md-4">	 	                    	                 	
	                    		<ul class="	list-unstyled">
	                    			<li>
	                    				<h4>
	                    					<a href="{{url('viewMethod')}}/{{$signature_window->sign_method_link}}">{{$signature_window->sign_method_name}}</a>		
	                    				</h4>
	                    			</li>	                    			
	                    		</ul>
	                    	</div>
	                    	@endforeach
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