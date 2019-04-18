	</body>
</html>
<script>
	$(document).ready(function(){
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_sekolah/get_data_all') ?>',
			type : 'post',
			dataType : 'json',
			success : function(data){
				$("#LOGO-PROFILE").attr('src','<?php echo base_url("assets/img/user/sekolah/logo-profile/") ?>'+data[0].LOGO)
			}
		});
	});
</script>