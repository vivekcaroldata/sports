<div class="my-share" >
	<div class="send_runner user-profile">
    <div class="container">
        <div class="row"> 
        <!--tab start here-->
            <div class="user-detail-edit">
                <section>
                    	<div class="col-sm-2" ng-include="'<?php echo base_url(); ?>templates/innersidebar.html'">
                        	                         
                        </div>
                    	<div class="col-sm-10" ng-controller="SingleQuestion" >
						
						
                        	<div class="right-side-user">
                           <!-- 	<ol class="breadcrumb">
                                  <li><a href="#">NBA  </a></li>
                                  <li><a href="#">Supreme Court</a></li>
                                </ol>   -->
                                
                                <!--   Update your profile-->                           
                                <div class="set-box">
                               		<div class="feature-detial profile-tab ">
                                    	<div class="feature-top">
                                        <div class="row">
                                                <div class="col-xs-12 col-sm-2 no-padding" style="padding-left: 15px">
                                                    <img src="<?php echo base_url(); if($question->image == '-') { ?>img/no.jpg<?php  }else{ } ?>" alt="" class="img-rounded img-responsive">
                                                </div>
                                                <div class="col-xs-12 col-sm-10">
                                                  
                                    <h3 style="margin-top: 1px; display: inline-block;margin-bottom: 5px; color:#8EC433"><?php echo $question->question; ?></h3>
                                    
                                                        <p style="margin-bottom: 5px;"><b>Market Type:</b> <a href="" target="_blank">Linked</a></p>
                                    
                                                        <p style="margin-bottom: 5px;"><b>End Date:</b> N/A</p>
                                    
                                                            <p style="margin-bottom: 5px;">
                                                            <b>Status:</b> <span class="SPMarketStatus">Open</span>
                                                        </p>
                                                </div>
                                    
                                                    <div class="col-xs-12 col-sm-10" id="divUserRisk" style="display: none;">
                                                            <p>
                                                                <a class="showPointer">Your risk in this market: 
                                                                <span class="SPUserRisk">$0.00</span>
                                                                <span class="glyphicons calculator" title="Calculator table" style="cursor: pointer; top: 3px; margin-left: 2px;"></span>
                                                                </a>
                                                            </p>
                                                    </div>
                                            </div>
                                            
                                            
                                            <!--tab-->
    <ul class="nav nav-tabs margintop20">
        <li class="active"><a href="#outcomes" id="getContract" data-toggle="tab">Contracts</a></li>
        <li class=""><a href="#rules" data-toggle="tab" id="getRules">Rules</a></li>
      <!--  <li class=""><a href="#tabChart" data-toggle="tab" id="getTabChart">Chart</a></li>
        <li class=""><a href="#history" id="getHistory" data-toggle="tab" class="tabClick">History</a></li>  -->
    </ul>
    
    <!-- tabl-centent-->
    <div class="tab-content">
        <div class="tab-pane active" id="outcomes">
            <div id="contractList">    <input id="marketId" name="marketId" value="2198" type="hidden">
    <p style="font-size:12px; padding-top:20px;">Trade shares from this page by clicking any price in bold. For more information on an individual prediction, click on the name or image.</p>
    <div class="hidden-xs">
        <div class="panel panel-default activity">
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="contractListTable" class="table">
                        <thead>
                            <tr class="contract-header">
                                <th class="contract-title" style="text-align: left">
                                    <span class="sharesHeader" style="padding-left: 5px;">
                                            <a class="glyphicons refresh" title="Refresh (ALT+R)" accesskey="r" aria-hidden="true" style="padding-left: 20px; color: darkgreen; margin-top: 4px; cursor: pointer" onclick="TradeRefresh()"></a>
                                        OPTION TITLE
                                    </span>
                                </th>

                                   
                                    <th class="text-center">Buy Yes</th>
                                    <th class="text-center">Sell Yes</th>
                                    <th class="text-center">Buy No</th>
                                    <th class="text-center">Sell No</th>
                                                                    <th class="text-center">Shares</th>
                                    <th class="text-center">Buy Offers</th>
                                    <th class="text-center">Sell Offers</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php if($question->category_id == "Multiple Option") {?>
								<?php  foreach( $options as $opt ) { ?>
                                <tr class="" style="background-color: rgb(249, 249, 249);">
                                    <td>
                                        <div id="outcome">
                                            <div class="outcome">
                                                <a href="">
                                                    <img src="<?php echo base_url(); if($opt['option_image'] == '-') { ?>img/no.jpg<?php  }else{ } ?>" alt="<?php echo $opt['option_name']; ?>" width="75">
                                                </a>
                                            </div>
                                            <div class="outcome-title">
                                                <a href="">
                                                    <h4><?php echo $opt['option_name']; ?></h4>
                                                    <p></p>
                                                </a>
                                            </div>
                                        </div>
                                    </td>

                                            
                                                <td class="text-center">
                                                    <span class="sharesUp"><a class="showPointer sharesUp" id="">24<span style="font-family: helvetica;">&cent;</span></a></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="sharesUp">22<span style="font-family: helvetica;">&cent;</span></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="sharesDown"><a class="showPointer sharesDown" id="">78<span style="font-family: helvetica;">&cent;</span></a></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="sharesDown">76<span style="font-family: helvetica;">&cent;</span></span>
                                                </td>


                                            <td class="text-center"><b class="label alert-grey label-lg">0</b></td>
                                            <td class="text-center"><b class="label alert-grey label-lg">0</b></td>
                                            <td class="text-center"><b class="label alert-grey label-lg">0</b></td>
                                </tr>
                                <?php  } ?>
								
                         <input ng-model="qnid"  type="hidden" name="qnid"  value="<?php echo $question->id; ?>">       
                            <tr    style="cursor: pointer; background-color: rgb(249, 249, 249);">
                                <td ng-click="loadMore();"  colspan="9" style="text-align: center; padding: 10px; background-color: #DDD; color: #167297; font-weight: bold">Show More <span class="glyphicons glyphicon-chevron-down"></span></td>
                            </tr>
							<?php } else { ?>
							
							<tr class="" style="background-color: rgb(249, 249, 249);">
                                    <td>
                                        <div id="outcome">
                                            <div class="outcome">
                                                <a href="">
                                                    <img src="<?php echo base_url(); if($opt['option_image'] == '-') { ?>img/no.jpg<?php  }else{ } ?>" alt="<?php echo $opt['option_name']; ?>" width="75">
                                                </a>
                                            </div>
                                            <div class="outcome-title">
                                                <a href="">
                                                    <h4><?php echo $opt['option_name']; ?></h4>
                                                    <p></p>
                                                </a>
                                            </div>
                                        </div>
                                    </td>

                                            
                                                <td class="text-center">
                                                    <span class="sharesUp"><a class="showPointer sharesUp" id="">24<span style="font-family: helvetica;">&cent;</span></a></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="sharesUp">22<span style="font-family: helvetica;">&cent;</span></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="sharesDown"><a class="showPointer sharesDown" id="">78<span style="font-family: helvetica;">&cent;</span></a></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="sharesDown">76<span style="font-family: helvetica;">&cent;</span></span>
                                                </td>


                                            <td class="text-center"><b class="label alert-grey label-lg">0</b></td>
                                            <td class="text-center"><b class="label alert-grey label-lg">0</b></td>
                                            <td class="text-center"><b class="label alert-grey label-lg">0</b></td>
                                </tr>
								
							<?php } ?>
							
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="yes_long" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog ui-draggable">
            <div class="modal-content">
                <div class="modal-header ui-draggable-handle" style="cursor: pointer;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Buy Yes</h4>
                </div>
                <div class="modal-body" style="overflow: hidden">
                        <div id="showBuy"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="yes_longsell" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog ui-draggable">
            <div class="modal-content">
                <div class="modal-header ui-draggable-handle" style="cursor: pointer;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Sell Yes</h4>
                </div>
                <div class="modal-body" style="overflow: hidden">
                        <div id="showlongsell"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="no_short" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog ui-draggable">
            <div class="modal-content">
                <div class="modal-header ui-draggable-handle" style="cursor: pointer;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Buy No</h4>
                </div>
                <div class="modal-body" style="overflow: hidden">
                        <div id="showSell"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="no_shortsell" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog ui-draggable">
            <div class="modal-content">
                <div class="modal-header ui-draggable-handle" style="cursor: pointer;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Sell No</h4>
                </div>
                <div class="modal-body" style="overflow: hidden">
                        <div id="showshortsell"></div>
                </div>
            </div>
        </div>
    </div>
    
</div>
            <div>
                <img id="spinnerContractList" class="spinner-center" src="https://az620379.vo.msecnd.net/images/loading.gif" alt="Loading Spinner" style="display: none">
            </div>
        </div>


        <div class="tab-pane" id="rules">
            <div class="tab-c">
                <p style="padding-top: 10px;">
                    <?php echo $question->description_rules; ?>
                </p>
                <br><br><br><br><br>
            </div>
        </div>
           
        
    </div>
    <!--tab-content-->
    
    
    
    
    
                                            
                                            <!-- tab-->
                                        </div>
                                    </div> 										                                       
                           		</div>                            
                                <!--   Update your profile-->
                                </div>
                            
                        </div>
                    </section></div>
                
            </div>
        <!--tab end here--> 
        </div>
    </div>    	
</div>
<!-- my share-->