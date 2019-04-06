	<div class="col s12 m12 l12" id="INFO">
		<div class="container">
			<div class="row">
				<div class="col m4 l4" id="INFO-ABOUT">
					<img src="<?php echo base_url('assets/img/app/logo/logo_64.png') ?>">
					<p class="left grey-text pengertian">UANGSAKU adalah aplikasi yang dapat digunakan untuk melakukan pembayaran kebutuhan sekolah dan juga tabungan siswa</p>
					<p class="left grey-text copy-right">UANGSAKU &copy <?php echo date('Y') ?></p>
				</div>
				<div class="col m3 l3" id="INFO-UANGSAKU">
					<ul>
						<li>
							<a href="#">Blog</a>
						</li>
						<li>
							<a href="#">Tentang Kami</a>
						</li>
					</ul>
				</div>
				<div class="col m3 l3 right" id="SOCIAL-MEDIA">
					<ul>
						<li class="social-media">
							<a href="#">
								<img src="<?php echo base_url('assets/img//app/icon/facebook_20.png') ?>">
							</a>
							<a href="#">
								<img src="<?php echo base_url('assets/img//app/icon/twitter_20.png') ?>">
							</a>
							<a href="#">
								<img src="<?php echo base_url('assets/img//app/icon/youtube_20.png') ?>">
							</a>
							<a href="#">
								<img src="<?php echo base_url('assets/img//app/icon/instagram_20.png') ?>">
							</a>
						</li>
					</ul>
				</div>
				<div class="col s12" id="INFO-ABOUT-SMALL">
					<p class="center left grey-text copy-right">UANGSAKU &copy <?php echo date('Y') ?></p>
				</div>
			</div>
		</div>
	</div>
	</body>
	<script>
		$(document).ready(function() {
			$(".page-control").click(function(e){
				var Tujuan = $(this).attr("href");
				
				var elementTujuan = $(Tujuan);

				$("html").animate({
					scrollTop:elementTujuan.offset().top-110
				});

				e.preventDefault();
			});
		});
	</script>
</html>