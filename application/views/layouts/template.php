<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Ceres HTML Free  - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme
Upgrade to Pro: https://keenthemes.com/products/ceres-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="http://localhost/trx/">
	<!-- <base href="../"> -->
	<title><?php echo $title ?></title>
	<!-- meta -->
	<?php require_once('_meta.php'); ?>

	<!-- css -->
	<?php require_once('_css.php'); ?>

	<!-- jQuery 2.2.3 -->

	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url(assets/media/patterns/header-bg.png)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="container-xxl d-flex align-items-center">
						<!--begin::Heaeder menu toggle-->
						<!-- header -->
						<?php require_once('_header.php'); ?>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Toolbar-->
				<div class="toolbar py-5 py-lg-5">
					<!--begin::Container-->
					<!-- <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap"> -->
					<!--begin::Title-->

					<!-- <h5 class="text-white fw-bolder fs-2qx me-3">Welcome
						</h5> -->

					<!--begin::Title-->
					<!--begin::Actions-->
					<!-- <div class="d-flex align-items-center flex-wrap py-2"> -->
					<!--begin::Search-->

					<!-- </div> -->
					<!--end::Actions-->
					<!-- </div> -->
					<!--end::Container-->
				</div>
				<!--end::Toolbar-->
				<!--begin::Container-->
				<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
					<!--begin::Aside-->
					<div id="kt_aside" class="aside card" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '265px'}" data-kt-sticky-left="auto" data-kt-sticky-top="95px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
						<!--begin::Aside menu-->
						<div class="aside-menu flex-column-fluid">
							<!--begin::Aside Menu-->
							<!-- sidebar -->
							<?php require_once('_sidebar.php'); ?>
						</div>
						<!--end::Aside menu-->
						<!--begin::Post-->
						<?php echo $contents; ?>
						<!--end::Post-->
					</div>
					<!--end::Aside-->
				</div>
				<!--end::Container-->
				<!--begin::Footer-->
			</div>
			<!--end::Wrapper-->
			<!-- footer -->
			<?php require_once('_footer.php'); ?>
			<!--end::Footer-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->
	<?php require_once('draw.php'); ?>
	<!--end::Main-->
	<!-- js -->
	<?php require_once('_js.php'); ?>
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>