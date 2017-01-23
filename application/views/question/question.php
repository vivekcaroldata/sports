<div class="my-share">
	<div class="send_runner user-profile">
    <div class="container">
        <div class="row"> 
        <!--tab start here-->
            <div class="user-detail-edit">
                <section>
                    	<div class="col-sm-2" ng-include="'<?php echo base_url(); ?>templates/innersidebar.html'">
                        	                         
                        </div>
                    	<div class="col-sm-10">
                        	<!--<div class="right-side-features">right-side-features--->
							
							 <!--   <div class="alert alert-success">
								    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                                    <h2>Sign Up for Full Benefits!</h2>
									<p>You can make use of all of PredictIt's features only by opening an account.</p>
									<p class="hidden-xs">
										<a href="signup.html" class="btn btn-warning btn-success">Sign Up Now</a>
										<a href="login.html" class="btn btn-default">Or Sign In</a>
									</p>
                                </div>  -->
								<div class="right-side-user">
									<h2><?php echo $title; ?></h2>  
									<p>These are popular political markets that receive a significant amount of attention from the press and the political community.</p>
                                    <div class="set-box">
									    <div class="row">
									     
									<?php foreach($questions as $ques) { ?>
									
										 <div class="col-md-4 col-sm-4 col-xs-6">
										  <div class="pro-item">
                                            	<div class="pro-top">
                                                	<div class="pro-img">
                                                	<img src="<?php echo base_url(); if($ques->image == '-') { ?>img/no.jpg<?php  }else{ } ?>">
                                                    </div>
                                                    <h2><a href="<?php echo base_url().'market/deal/'.$ques->id; ?>"><?php echo $ques->question; ?></a></h2>
                                                </div>
                                                <div class="pro-middle">
                                                	<div class="pull-left">
                                                    	<a href="">Top Predictions</a>
                                                    </div>
                                                	<div class="pull-right">
                                                    <!--	<a href=""><i class="fa fa-comment"></i> 833 Comments</a> -->
                                                    </div>
                                                </div>
                                                
                                                <div class="pro-bottom">
                                                	<div class="bottom-pro">
                                                    	<div class="pull-left">
                                                        	<a href="">Pryor <!-- <i class="fa fa-comment"></i> <small>8</small> --> </a>
                                                        </div>
                                                    	<div class="pull-right">
                                                        	<span>24¢</span>
                                                        	<span><a href="">NC</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-pro">
                                                    	<div class="pull-left">
                                                        	<a href="">Pryor <!-- <i class="fa fa-comment"></i> <small> 8</small> --></a>
                                                        </div>
                                                    	<div class="pull-right">
                                                        	<span>24¢</span>
                                                        	<span><a href=""><i style="color:#96C747" class="fa fa-arrow-up" aria-hidden="true"></i> 24¢</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											
										 </div>
										 
									<?php } ?>
										 
										</div>
                                    </div>									
                            
                                </div>
                                    
                               <!-- </div>right-side-features end--->
                            </div>
                      
                    </section></div>
                
            </div>
        <!--tab end here--> 
        </div>
    </div>    	
</div>