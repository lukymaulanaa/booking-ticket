<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Book Your Flights</title>
<link href= "http://localhost/ukk/gudang/web/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Book Your Travel Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- //end-smoth-scrolling -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="http://localhost/ukk/gudang/web/js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
<!--//webfonts-->
							<h1>Flights Agency</h1>
						<div class="main">
									<div class="facts">
										<div class="booking-form">
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti">
																	 <h4>Book Your Flights</h4>
               													
                                                                     <section class="content">
                                                                     <div class="col-xs-12">
                                                                       <div class="box">
                                                                         <div class="box-header">
                                                                           <h3 class="box-title"></h3>
                                                                 
                                                                           <div class="box-tools">
                                                                             <div class="input-group input-group-sm" style="width: 150px;">
                                                                               <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                                                 
                                                                               <div class="input-group-btn">
                                                                                 <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                                               </div>
                                                                             </div>
                                                                           </div>
                                                                         </div>
                                                                         <!-- /.box-header -->
                                                                         <div class="box-body table-responsive no-padding">
                                                                           <table class="table table-hover">
                                                                             <tbody><tr>
                                                                               <th>Id</th>
                                                                               <th>Kode</th>
                                                                               <th>Nama Bandara</th>
                                                                               <th>Kota</th>
                                                                               <th colspan="2">Action</th>
                                                                             </tr>
                                                                             <?php foreach ($airport as $data) { ?>
                                                                             <tr>
                                                                               <td><?php echo $data->id ?></td>
                                                                               <td><?php echo $data->kode ?></td>
                                                                               <td><?php echo $data->nama ?></td>
                                                                               <td><?php echo $data->kota ?></td>
                                                                               <td><a href="<?php echo base_url('/admin/edit_bandara/').$data->id; ?>">Select</a></td>
                                                                             </tr>
                                                                             <?php } ?>
                                                                           </tbody></table>
                                                                           <div class="text-center">
                                                                             <?php
                                                                             echo $this->pagination->create_links();
                                                                             ?>
                                                                           </div>
                                                                           
                                                                         </div>
                                                                         <!-- /.box-body -->
                                                                       </div>
                                                                       <!-- /.box -->
                                                                     </div>
                                                                   </section>
                                                                 </div>
																					
																	<!---strat-date-piker---->
																		<link rel="stylesheet" href="http://localhost/ukk/gudang/web/css/jquery-ui.css" />
																		<script src="http://localhost/ukk/gudang/web/js/jquery-ui.js"></script>
																		  <script>
																				  $(function() {
																					$( "#datepicker,#datepicker1" ).datepicker();
																				  });
																		  </script>
																	<!---/End-date-piker---->
															</div>
																
																			<div class="date_btn">
																				<form>
																					<input type="submit" value="Search">
																				</form>
																			</div>
														</div>
														<div class="clear"></div>
													</div>
											</div>
											<!---->
										</div>	
									</div>
								
								</div>
			<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>Enjoy Your Destination</p>
		</div>
	</div>
	<!--//end-copyright-->
</body>
</html>