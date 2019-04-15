	</body>
</html>
<script>
	$(document).ready(function(){
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_siswa/get_data_all') ?>',
			type : 'post',
			dataType : 'json',
			success : function(data){
				$("#FOTO-PROFILE-HEADER").attr('src','<?php echo base_url("assets/img/user/siswa/foto-profile/") ?>'+data[0].FOTO);
			}
		});
	});
</script>