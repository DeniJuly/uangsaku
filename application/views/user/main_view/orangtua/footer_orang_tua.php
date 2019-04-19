	</body>
</html>
<script>
	$(document).ready(function(){
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_orangtua/get_data') ?>',
			type : 'post',
			dataType : 'json',
			success : function(data){
				$("#FOTO-PROFILE-HEADER").attr('src','<?php echo base_url("assets/img/user/orangtua/foto-profile/") ?>'+data[0].FOTO);
			}
		});
	});
</script>