<?php
$conn = mysqli_connect(
	'localhost',
	'chan',
	'ninano',
	'chaum'
);
$sql = "SELECT id, name, phone FROM mom";
$result = mysqli_query($conn, $sql);
$select_mom = '<select class="form-control text-center" name="mom_id">';
$select_mom .= '<option value="#">산모이름 / 전화번호</option>';
while($row = mysqli_fetch_array($result)){
	$select_mom .= '<option value="'.$row['id'].'">'.$row['name'].' / '.$row['phone'].'</option>';
}
$select_mom .= '</select>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
	<title>Trinity - Bootstrap Admin Template</title>

	<link rel="stylesheet" href="../libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
	<!-- build:css ../assets/css/app.min.css -->
	<link rel="stylesheet" href="../libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="../libs/bower/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="../libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/core.css">
	<link rel="stylesheet" href="../assets/css/app.css">
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script src="../libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
	<script>
		Breakpoints();

		function moveOnMax(field, nextFieldID) {
			if (field.value.length >= field.maxLength) {
				document.getElementById(nextFieldID).focus();
			}
		}
	</script>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
	<!--============= start main area -->

	<!-- APP NAVBAR ==========-->
	<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">

		<!-- navbar header -->
		<div class="navbar-header">
			<button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
				<span class="sr-only">Toggle navigation</span>
				<span class="hamburger-box"><span class="hamburger-inner"></span></span>
			</button>

			<button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="zmdi zmdi-hc-lg zmdi-more"></span>
			</button>

			<button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="zmdi zmdi-hc-lg zmdi-search"></span>
			</button>

			<a href="../index.html" class="navbar-brand">
				<span class="brand-icon"><i class="fa fa-gg"></i></span>
				<span class="brand-name">Trinity</span>
			</a>
		</div><!-- .navbar-header -->

		<div class="navbar-container container-fluid">
			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
					<li class="hidden-float hidden-menubar-top">
						<a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
							<span class="hamburger-box"><span class="hamburger-inner"></span></span>
						</a>
					</li>
					<li>
						<h5 class="page-title hidden-menubar-top hidden-float">Dashboard</h5>
					</li>
				</ul>

				<ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
					<li class="nav-item dropdown hidden-float">
						<a href="javascript:void(0)" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
							<i class="zmdi zmdi-hc-lg zmdi-search"></i>
						</a>
					</li>

					<li class="dropdown">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
						<div class="media-group dropdown-menu animated flipInY">
							<a href="javascript:void(0)" class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-xs avatar-circle">
											<img src="../assets/images/221.jpg" alt="">
											<i class="status status-online"></i>
										</div>
									</div>
									<div class="media-body">
										<h5 class="media-heading">John Doe</h5>
										<small class="media-meta">Active now</small>
									</div>
								</div>
							</a><!-- .media-group-item -->

							<a href="javascript:void(0)" class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-xs avatar-circle">
											<img src="../assets/images/205.jpg" alt="">
											<i class="status status-offline"></i>
										</div>
									</div>
									<div class="media-body">
										<h5 class="media-heading">John Doe</h5>
										<small class="media-meta">2 hours ago</small>
									</div>
								</div>
							</a><!-- .media-group-item -->

							<a href="javascript:void(0)" class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-xs avatar-circle">
											<img src="../assets/images/207.jpg" alt="">
											<i class="status status-away"></i>
										</div>
									</div>
									<div class="media-body">
										<h5 class="media-heading">Sara Smith</h5>
										<small class="media-meta">idle 5 min ago</small>
									</div>
								</div>
							</a><!-- .media-group-item -->

							<a href="javascript:void(0)" class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-xs avatar-circle">
											<img src="../assets/images/211.jpg" alt="">
											<i class="status status-away"></i>
										</div>
									</div>
									<div class="media-body">
										<h5 class="media-heading">Donia Dyab</h5>
										<small class="media-meta">idle 5 min ago</small>
									</div>
								</div>
							</a><!-- .media-group-item -->
						</div>
					</li>

					<li class="dropdown">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
						<ul class="dropdown-menu animated flipInY">
							<li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My Profile</a></li>
							<li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
							<li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span class="label label-primary">3</span></a></li>
							<li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class" data-target="#side-panel" data-class="open" role="button"><i class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
					</li>
				</ul>
			</div>
		</div><!-- navbar-container -->
	</nav>
	<!--========== END app navbar -->

	<!-- APP ASIDE ==========-->
	<aside include-html="aside.html" id="menubar" class="menubar light">
	</aside>
	<!--========== END app aside -->

	<!-- navbar search -->
	<div id="navbar-search" class="navbar-search collapse">
		<div class="navbar-search-inner">
			<form action="#">
				<span class="search-icon"><i class="fa fa-search"></i></span>
				<input class="search-field" type="search" placeholder="search..." />
			</form>
			<button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
				<i class="fa fa-close"></i>
			</button>
		</div>
		<div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false"></div>
	</div><!-- .navbar-search -->

	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
		<div class="wrap">
			<section class="app-content">
				<div class="row">
					<div class="col-md-12">
						<div class="widget">
							<header class="widget-header">
								<h4 class="widget-title">신생아 카드</h4>
							</header><!-- .widget-header -->
							<hr class="widget-separator">
							<div class="widget-body" style="padding:2rem">
								<form action="process_create_baby.php" class="form-horizontal" method="POST">
									<div class="form-group">
											<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">산모이름</label>
											<div class="col-xs-9 col-sm-3">
												<?=$select_mom?>
											</div>
									</div><!-- .form-group -->
									<div class="form-group">
										<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">아기이름</label>
											<div class="col-xs-9 col-sm-3">
												<input class="form-control text-center" type="text" name="name" required>
											</div>
									</div><!-- .form-group -->
									<div class="form-group">
										<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">혈액형</label>
											<div class="col-xs-9 col-sm-3">
												<input class="form-control text-center" type="text" name="blood" required>
											</div>
									</div><!-- .form-group -->
									<div class="form-group">
										<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">출산병원</label>
											<div class="col-xs-9 col-sm-3">
												<input class="form-control text-center" type="text" name="hospital" required>
											</div>
									</div><!-- .form-group -->
									<div class="form-group">
										<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">분만형태</label>
											<div class="col-xs-9 col-sm-3">
												<input class="form-control text-center" type="text" name="delivery" required>
											</div>
									</div><!-- .form-group -->
									<div class="form-group">
										<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">재태기간</label>
											<div class="col-xs-9 col-sm-3">
												<input class="form-control text-center" type="text" name="gastation" required>
											</div>
									</div><!-- .form-group -->
									<div class="form-group">
											<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">출산일</label>
											<div class="col-xs-9 col-sm-3">
												<input class="form-control text-center" type="date" name="birthday">
											</div>
									</div><!-- .form-group -->
									<div class="form-group">
										<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">출산시무게</label>
											<div class="col-xs-9 col-sm-3">
												<input class="form-control text-center" type="text" name="weight_birth" required>
											</div>
									</div><!-- .form-group -->
									<div class="form-group">
											<label for="#" class="col-xs-3 col-sm-2 col-sm-offset-3 control-label">입실일</label>
											<div class="col-xs-9 col-sm-3">
												<input class="form-control text-center" type="date" name="enterday">
											</div>
									</div><!-- .form-group -->
									<div class="form-group text-center">
										<input type="submit" class="btn mw-md btn-lg btn-warning" value="생성">
									</div>
								</form>
							</div><!-- .widget-body -->
						</div><!-- .widget -->
					</div><!-- END column -->
				</div><!-- .row -->
			</section><!-- #dash-content -->
		</div><!-- .wrap -->
		<!-- APP FOOTER -->
		<div class="wrap p-t-0">
			<footer include-html="footer.html" class="app-footer">
			</footer>
		</div>
		<!-- /#app-footer -->
	</main>
	<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	<div id="app-customizer" class="app-customizer">
		<a href="javascript:void(0)" class="app-customizer-toggle theme-color" data-toggle="class" data-class="open" data-active="false" data-target="#app-customizer">
			<i class="fa fa-gear"></i>
		</a>
		<div class="customizer-tabs">
			<!-- tabs list -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#menubar-customizer" aria-controls="menubar-customizer" role="tab" data-toggle="tab">Menubar</a></li>
				<li role="presentation"><a href="#navbar-customizer" aria-controls="navbar-customizer" role="tab" data-toggle="tab">Navbar</a></li>
			</ul><!-- .nav-tabs -->

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane in active fade" id="menubar-customizer">
					<div class="hidden-menubar-top hidden-float">
						<div class="m-b-0">
							<label for="menubar-fold-switch">Fold Menubar</label>
							<div class="pull-right">
								<input id="menubar-fold-switch" type="checkbox" data-switchery data-size="small" />
							</div>
						</div>
						<hr class="m-h-md">
					</div>
					<div class="radio radio-default m-b-md">
						<input type="radio" id="menubar-light-theme" name="menubar-theme" data-toggle="menubar-theme" data-theme="light">
						<label for="menubar-light-theme">Light</label>
					</div>

					<div class="radio radio-inverse m-b-md">
						<input type="radio" id="menubar-dark-theme" name="menubar-theme" data-toggle="menubar-theme" data-theme="dark">
						<label for="menubar-dark-theme">Dark</label>
					</div>
				</div><!-- .tab-pane -->
				<div role="tabpanel" class="tab-pane fade" id="navbar-customizer">
					<!-- This Section is populated Automatically By javascript -->
				</div><!-- .tab-pane -->
			</div>
		</div><!-- .customizer-taps -->
		<hr class="m-0">
		<div class="customizer-reset">
			<button id="customizer-reset-btn" class="btn btn-block btn-outline btn-primary">Reset</button>
			<a href="https://themeforest.net/item/infinity-responsive-web-app-kit/16230780" class="m-t-sm btn btn-block btn-danger">Buy Now</a>
		</div>
	</div><!-- #app-customizer -->

	<!-- SIDE PANEL -->
	<div id="side-panel" class="side-panel">
		<div class="panel-header">
			<h4 class="panel-title">Friends</h4>
		</div>
		<div class="scrollable-container">
			<div class="media-group">
				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/221.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">John Doe</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/205.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">John Doe</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/206.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Adam Kiti</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/207.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jane Doe</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/208.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Sara Adams</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/209.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Smith Doe</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/219.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Dana Dyab</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/210.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jeffry Way</h5>
							<small class="media-meta">2 hours ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/211.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jane Doe</h5>
							<small class="media-meta">5 hours ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/212.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Adam Khoury</h5>
							<small class="media-meta">22 minutes ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/207.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Sara Smith</h5>
							<small class="media-meta">2 days ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/211.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Donia Dyab</h5>
							<small class="media-meta">3 days ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->
			</div>
		</div><!-- .scrollable-container -->
	</div><!-- /#side-panel -->

	<!-- build:js ../assets/js/core.min.js -->
	<script src="../libs/bower/jquery/dist/jquery.js"></script>
	<script src="../libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="../libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="../libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="../libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="../libs/bower/PACE/pace.min.js"></script>
	<!-- endbuild -->

	<!-- build:js ../assets/js/app.min.js -->
	<script src="../assets/js/library.js"></script>
	<script src="../assets/js/plugins.js"></script>
	<script src="../assets/js/app.js"></script>
	<!-- endbuild -->
	<script src="../libs/bower/moment/moment.js"></script>
	<script src="../libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="../assets/js/fullcalendar.js"></script>
</body>

</html>