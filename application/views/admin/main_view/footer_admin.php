	</body>
</html>
<script>
	$(document).ready(function(){
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_admin/get_data') ?>',
			type : 'post',
			dataType : 'json',
			success : function(data){
				$("#HEADER-FOTO-PROFILE").attr('src','<?php echo base_url("assets/img/app/admin//") ?>'+data[0].FOTO)
			}
		});
	});
</script>