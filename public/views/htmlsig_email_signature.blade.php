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
                                                    Change 
                                                </span>                                                                                                
                                                 <input type="file" fileinput="file" filepreview="filepreview"/>

                                            </span>
                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                  Remove 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input">                                    
                                    <input type="text" class="form-control" id="name" name="name" ng-model="customer_name">
                                    <label for="name">Name</label>
                                    <span class="help-block">Please input name here...</span>   
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="title" name="title" ng-model="title">
                                    <label for="title">Title</label>
                                    <span class="help-block">Please input title...</span>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="company" name="company" ng-model="company">
                                    <label for="company">Company</label>
                                    <span class="help-block">Please input company...</span>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="Phone" name="phone" ng-model="phone">
                                    <label for="Phone">Phone</label>
                                    <span class="help-block">Please input phone...</span>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="title" name="mobile_phone" ng-model="mobile_phone">
                                    <label for="mobile_phone">Mobile phone</label>
                                    <span class="help-block">Please input mobile phone...</span>
                                </div>
                                <div class="form-group form-md-line-input" >
                                    <input type="text" class="form-control" id="website_url" ng-model="website_url">
                                    <label for="website_url">Website URL</label>
                                    <span class="help-block">Please input website url...</span>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="addr_line1" name="addr_line1" ng-model="addr_line1">
                                    <label for="addr_line1">Address Line1</label>
                                    <span class="help-block">Please input address line1...</span>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="addr_line2" name="addr_line2" ng-model="addr_line2">
                                    <label for="addr_line2">Address Line2</label>
                                    <span class="help-block">Please input address line2...</span>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="addr_line3" ng-model="addr_line3">
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
                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">                    
                        <form role="form" ng-app="mainApp">
                            <div class="form-body">                        
                                <div class="form-group form-md-line-input has-success social-input" data-ng-repeat="icon in initialIcons">
                                    <div class="input-icon">                                        
                                        <input type="text" class="form-control" name="{{icon.icon}}" 
                                        id="{{icon.icon}}" ng-model="icon.name" placeholder="Please type {{icon.icon}} link">
                                        
                                        <span class="help-block">Please input link here...</span>
                                        <div class="social-input-ico-wr">
                                            <img src="../images/social_icons/{{icon.icon}}.png">
                                        </div>                                        
                                        <i class="fa fa-times pull-right" ng-click="removeNewSocialIcon(icon)"></i>
                                    </div>
                                </div> 
                            </div>
                            <div class="form-actions noborder">                                     
                                <button type="button" class="btn  btn-primary" ng-click="addNewIcon()">
                                    <i class="fa fa-plus"></i>Add social icon
                                </button>
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
                                            <h5 class="text-center">
                                                Font size
                                            </h5>                                            
                                            <div ui-slider min="0" max="30" ng-model="signfontsize"></div>                                            
                                            <input color-picker color-picker-show-value="false" color-picker-position="bottom" 
                                            color-picker-model="fontcolor" ng-style="{background: fontcolor}" class="custom-margin-top50 form-control" />
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                                            <h5 class="text-center">
                                                Social icon</h5>
                                            <ul class="list-inline soc-icon-size">
                                                <li ng-click="changeSizeSocialIcon('S')" ng-class="{bgfill_size_icon: clicked_size1}">S</li>
                                                <li ng-click="changeSizeSocialIcon('M')" ng-class="{bgfill_size_icon: clicked_size2}">M</li>
                                                <li ng-click="changeSizeSocialIcon('L')" ng-class="{bgfill_size_icon: clicked_size3}">L</li>
                                            </ul>      
                                            <ul class="list-inline soc-icon-size shape-list" style="display: none;">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>                                      
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                                            <h5 class="text-center">Photo</h5>
                                            <ul class="list-inline soc-icon-size shape-list">
                                                <li ng-click="changeShapePhoto('none')" ng-class="{bgfill_color: clicked1}"></li>
                                                <li ng-click="changeShapePhoto('5px')" ng-class="{bgfill_color: clicked2}"></li>
                                                <li ng-click="changeShapePhoto('50%')" ng-class="{bgfill_color: clicked3}"></li>
                                            </ul>
                                            <div ui-slider min="0" max="200" ng-model="photosize" class="custom-margin-top50"></div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                                            <h5 class="text-center">Template color</h5>
                                            <div class="form-group">
                                                <input color-picker color-picker-show-value="false" color-picker-position="bottom" color-picker-model="signaturecolor"
                                                   ng-style="{background: signaturecolor}" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                                            <h5 class="text-center">Border</h5>      
                                            <select ng-model="selectborderstyle" class="form-control">
                                                <option ng-repeat="borderstyle in borderstyles" value="{{borderstyle.bordername}}">{{borderstyle.bordername}}</option>
                                            </select>

                                            <div class="form-group custom-margin-top50">
                                                <input color-picker color-picker-show-value="false" color-picker-position="bottom" color-picker-model="bordercolor"
                                                   ng-style="{background: bordercolor}" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- BEGIN YOUR TEMPLATE SELECTION-->
                <div class="portlet light bordered" id="email_signature_container">
                    <div class="portlet-title">
                        <div class="caption font-green">
                            <i class="icon-pin font-green"></i>
                            <span class="caption-subject bold uppercase">Your template selection</span>
                        </div>
                        <div class="actions">                           
                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div ng-controller="CarouselTemplateController" id="slides_control" style="background: {{signaturecolor}}">
                                    <div style="">
                                        <div uib-carousel active="activeSlide">
                                            <div uib-slide interval="myInterval" ng-repeat="slide in slides" index="$index">      
                                                <div class="slide-animate" ng-include="slide.url" style="border-style: {{selectborderstyle}}; border-color: {{bordercolor}}; border-style: {{selectborderstyle}}; padding: 10px;" id="slide_animate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-primary" id="btncopy" data-lightbox="roadtrip">
                                    <i class="fa fa-copy"></i>Copy
                                </button>
                                <button type="button" class="btn btn-primary"  id="btndownload"><i class="fa fa-download"></i>Download</button>
                                <button type="button" class="btn btn-primary" id="btnsave" ng-click="showSaveSignatureEmail()"><i class="fa fa-save"></i>Save</button>
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