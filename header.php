<?php
include("config.php");
?>
<!-------
<!DOCTYPE html>
<html lang="en">
			<head>
						<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
						<meta charset="utf-8" />
						<title>organization Dashboard - Bandhan</title>
		------>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<!--[if lte IE 9]>
		<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<!-- inline styles related to this page -->
		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<!--Avoid bowser back-->
		<script type="text/javascript" language="javascript">
		onload=function(){
		var e=document.getElementById("refreshed");
		if(e.value=="no")e.value="yes";
		else{e.value="no";location.reload();}
		}
		</script>
		<!--favicon genrator-->
		<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
		<style>
			/* #navbar{
				background-color:#FA8072;
			} */
			#sidebar{
				background-color:#737373;
			}
			#breadcrumbs{

				background-color:#737373;
				color:white;
			}
			#breadcrumb>li {
                    color: #fff;
                    background-color: #737373;
                }
			#maincontainer{
				background-color:black;
			}
			.nav-list>li>a {

    display: block;
    height: 39px;
    line-height: 17px;
    padding-left: 7px;
    text-shadow: none!important;
    font-size: 13px;
    color: white;
}
    .dropdown-modal{
    	background-color:#b943aa;
    }
    .breadcrumb>li>a {
    color:#fff;
}
.breadcrumb>li, .breadcrumb>li.active {
    color: #fff;
    padding: 0 3px;
}
.breadcrumbs>li>i{
				color:white;

			}
			.main-content {
    margin-left: 0;
    padding: 0;
    /* background-color: #FAD5A5; */
}
.page-content{
	background-color: #737373;
}
.footer .footer-inner .footer-content {
background-color: #737373;

}
.footer {
	height:0;
	width:0;
}
.main-container:before{
    background-color: #737373;
}

		</style>

	</head>
	<!-- class="no-skin -->
	<body id="elm">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<a href="home.php" class="navbar-brand">
						<small>
						<!-- <i class="fa fa-leaf"></i> -->
						Admin
						</small>
					</a>
				</div>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">


						<li class=" dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">

								<img class="nav-user-photo" src="assets/images/avatars/as.png" alt="ZP CEO Photo" />
								<span class="user-info">
									<small>Welcome, </small>
									<?php
									echo  $_SESSION['name'];
									?>
								</span>
								<i class="ace-icon fa fa-caret-down"></i>
							</a>
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>
								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				</div><!-- /.navbar-container -->
			</div>
			<div class="main-container ace-save-state" id="main-container">
				<script type="text/javascript">
					try{ace.settings.loadState('main-container')}catch(e){}
				</script>
				<div id="sidebar" class="sidebar                  responsive ace-save-state">
					<script type="text/javascript">
						try{ace.settings.loadState('sidebar')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
							</button>
							<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
							</button>
							<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
							</button>
							<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
							</button>
						</div>
						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>
							<span class="btn btn-info"></span>
							<span class="btn btn-warning"></span>
							<span class="btn btn-danger"></span>
						</div>
						</div><!-- /.sidebar-shortcuts ---->
						<ul class="nav nav-list">
							<li class="">

								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="home.php">
									<i class="menu-icon fa fa-tachometer"></i>
									<span class="menu-text"> Dashboard </span>
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon glyphicon glyphicon-list-alt"></i>
									<span class="menu-text" color="white"> Department </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="add_department.php"  style="color:#fff;">
											<i style="color:#fff;"class="menu-icon fa fa-caret-right"></i>
											Add Department
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="view_department.php"style="color:#fff;">
											<i class="menu-icon fa fa-caret-right"></i>
											View Department
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon glyphicon glyphicon-bookmark"></i>
									<span class="menu-text"> Caste </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="add_caste.php"style="color:#fff;">
											<i class="menu-icon fa fa-caret-right"></i>
											Add Caste
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="view_caste.php" style="color:#fff;">
											<i class="menu-icon fa fa-caret-right"></i>
											View Caste
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-database"></i>
									<span class="menu-text"> Colleges </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="new_registered_c.php" style="color:#fff;">
											<i class="menu-icon fa fa-caret-right"></i>
											New Registered College
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="approved_c.php" style="color:#fff;">
											<i class="menu-icon fa fa-caret-right"></i>
											Approved College
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="disapproved_c.php" style="color:#fff;">
											<i class="menu-icon fa fa-caret-right"></i>
											Disapproved College
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="student.php">
									<i class="menu-icon fa fa-mortar-board"></i>
									<span class="menu-text"> Student </span>
								</a>
								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-cog"></i>
									<span class="menu-text"> Settings </span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">

									<li class="">
										<a href="change_password.php" style="color:#fff;">
											<i class="menu-icon fa fa-caret-right"></i>
											Change Password
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>


														<li class="">
								<a href="logout.php">
									<i class="menu-icon  glyphicon glyphicon-off "></i>
									<span class="menu-text"> Logout </span>
								</a>
								<b class="arrow"></b>
							</li>
						</ul><!-- /.nav-list -->
