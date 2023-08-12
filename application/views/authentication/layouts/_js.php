<script>
	var hostUrl = "<?php echo base_url('assets'); ?>/";
</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?php echo base_url('assets'); ?>/plugins/global/plugins.bundle.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?php echo base_url('assets'); ?>/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?php echo base_url('assets'); ?>/js/custom/widgets.js"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->

<script>
	window.onload = function() {
		<?php if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		} ?>
	}

	function effect_msg_form() {
		$('.form-msg').slideDown(1000),
			setTimeout(function() {
				$('.form-msg').slideUp(1000);
			}, 3000)
	}

	function effect_msg() {
		$('.msg').show(1000),
			setTimeout(function() {
				$('.msg').fadeOut(1000);
			}, 3000)
	}
</script>