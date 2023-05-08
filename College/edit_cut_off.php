<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />


		<title>College Admin - Add Cut Off</title>
		
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		
		

<input type="hidden" id="refreshed" value="no">
<?php

include ('header.php');

?>
<!----------------------------User Availablity---------------------------------------->
<script type="text/javascript" src="usercheck/jquery-1.3.2.js"></script>
<link href="usercheck/css.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript">

$(document).ready(function() {
	$('#Loading').hide();    
});

function check_username(){

	var username = $("#username").val();
	if(username.length > 2){
		$('#Loading').show();
		$.post("check_username_availablity.php", {
			username: $('#username').val(),
		}, function(response){
			$('#Info').fadeOut();
			 $('#Loading').hide();
			setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
		});
		return false;
	}
}

function finishAjax(id, response){
 
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn(1000);
} 

</script>


<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php" title="Dashboard">Home</a>
							</li>
							<li>
								Cut Off
							</li>
							<li>
								Add Cut Off
							</li>
			
						</ul><!-- /.breadcrumb -->
							
						<!----	
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search ----------------->
						
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="page-header">
										<h1>
											Caste
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												Add Cut Off
											</small>
										</h1>
									</div><!-- /.page-header -->
								
								<?php 
		if(isset($_GET['c_id']))
		{
		  
          $query= mysqli_query($con,"select * from cut_off_reg where c_id='{$_GET['c_id']}' ") ; 
         // $result = mysqli_query($con,$query);
          $row = mysqli_fetch_array($query); 
		//  extract($_POST);
		?>
								
									<form class="form-horizontal" role="form" method="post">

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Department Name <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<!-- <input type="text" id="form-field-1" name="cas_name" placeholder="Enter Caste Name" class="col-xs-10 col-sm-5"  title="Characters Only" required /> -->
												<select name="c_dept_name" class="c col-xs-10 col-sm-5" id="form-field-2"  required >
													<option value="<?php echo $row['c_dept_name'];?>"><?php echo $row['c_dept_name'];?></option>
													<option>Select Department</option>
	                                            <?php
								                    // $con = mysqli_connect("localhost","root","root","drop") or die(mysqli_error());
	                                            	include "config.php";
								                    $query1 = mysqli_query($con,"select DISTINCT dept_name from dept_reg ") or die(mysqli_error($con));
								                    while($row1=mysqli_fetch_assoc($query1)){
								                        extract($row1);

								                        echo "<option value='$dept_name'>$dept_name</option>";
								                    }


								                ?>
	                                            </select>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Caste Name <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<!-- <input type="text" id="form-field-1" name="cas_name" placeholder="Enter Caste Name" class="col-xs-10 col-sm-5"  title="Characters Only" required /> -->
												<select name="c_cas_name" class="c col-xs-10 col-sm-5" id="form-field-2"  required >
													<option value="<?php echo $row['c_cas_name'];?>"><?php echo $row['c_cas_name'];?></option>
													<option>Select Caste</option>
	                                            <?php
								                    // $con = mysqli_connect("localhost","root","root","drop") or die(mysqli_error());
	                                            	include "config.php";
								                    $query1 = mysqli_query($con,"select DISTINCT cas_name from caste_reg ") or die(mysqli_error($con));
								                    while($row1=mysqli_fetch_assoc($query1)){
								                        extract($row1);

								                        echo "<option value='$cas_name'>$cas_name</option>";
								                    }


								                ?>
	                                            </select>
											</div>
									    </div>

									    <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Minimum Percentage <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="c_min_per" placeholder="Enter Minimum Percentage" class="col-xs-10 col-sm-5"  title="Numbers Only" value="<?php echo $row['c_min_per'];?>" required />
											</div>
									    </div>

									    <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Maximum Percentage <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="c_max_per" placeholder="Enter Maximum Percentage" class="col-xs-10 col-sm-5"  title="Numbers Only" value="<?php echo $row['c_max_per']; ?>" required />
											</div>
									    </div>

									    <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Academic Year <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="c_ac_year" placeholder="Enter Academic Year (Ex. 2017-2018 )" class="col-xs-10 col-sm-5"  value="<?php echo $row['c_ac_year'];?>" required />
											</div>
									    </div>
									    
								
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
											<div class="col-sm-9">
											<input type="submit" name="btn_rgister" value="Update" class="btn btn-success"/>
											&nbsp;&nbsp;
											<input type="reset" name="clear" value="Cancel" class="btn btn-danger"/>
											</div>
										</div>
								
									
									</form>
					<?php

						}

					?>				

									<?php
									include "config.php";
									if(isset($_POST['btn_rgister']))
									{
										extract($_POST);
										
										$updateprofile= 'update  cut_off_reg set                          
							  			c_dept_name="'.$_POST['c_dept_name'].'", 
							  			c_cas_name="'.$_POST['c_cas_name'].'", 
							  			c_min_per="'.$_POST['c_min_per'].'", 
							  			c_max_per="'.$_POST['c_max_per'].'", 
							  			c_ac_year="'.$_POST['c_ac_year'].'"							  
							            where c_id="'.$_GET['c_id'].'"' ;
                          $cresult = mysqli_query($con,$updateprofile);
										
										if($cresult)
										{
											
											echo "<script>";
											echo "alert('Cut Off Updated Successfully');";
											echo "window.location.href='view_cut_off.php';";
											echo "</script>";																		
										}
										else
										{
											echo "<script>";
											echo 'alert("Cut Off Not Updated");';
											echo "window.location.href='view_cut_off.php';";
											echo "</script>";
										}
									}
									?>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->




			
			



<?php

include ('tagarea.php');

?>


