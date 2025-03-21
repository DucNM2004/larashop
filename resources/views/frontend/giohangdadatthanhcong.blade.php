@extends('layouts.frontend')
@section('title', 'Hoàn tất đặt hànghàng')
@section('content')

	<div class="container pb-5 mb-sm-4">
			<div class="pt-5">
				<div class="card py-3 mt-sm-3">
					<div class="card-body text-center">
						<h2 class="h4 pb-3">Cảm ơn bạn đã đặt hàng!</h2>
						<p class="fs-sm mb-2">Đơn hàng của bạn đã được đặt và sẽ được xử lý trong thời gian sớm nhất.</p>
						<p class="fs-sm">Bạn sẽ sớm nhận được email xác nhận đơn đặt hàng của bạn.</p>
						<a class="btn btn-danger mt-3 me-3" href="#"><i class="ci-cart me-2"></i>Tiếp tục mua hàng</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<footer class="footer bg-dark">
		<div class="pt-5 bg-darker">
			<div class="container">
				<div class="row pb-2">
					<div class="col-md-6 text-center text-md-start mb-4">
						<div class="text-nowrap mb-4">
							<a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" /></a>
						</div>
						<div class="widget widget-links widget-light">
							<ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Trang chủ</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Sản phẩm</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Tin tức</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Tuyển dụng</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 text-center text-md-end mb-4">
						<div class="mb-3">
							<a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a>
							<a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a>
							<a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a>
							<a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a>
							<a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">Bản quyền © 2023 bởi Cartzilla.</div>
			</div>
		</div>
	</footer>
	
	<a class="btn-scroll-top" href="#top" data-scroll>
		<span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
		<i class="btn-scroll-top-icon ci-arrow-up"></i>
	</a>
	
	<script src="vendor/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="vendor/simplebar/simplebar.min.js"></script>
	<script src="vendor/tiny-slider/tiny-slider.js"></script>
	<script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
	<script src="vendor/nouislider/nouislider.min.js"></script>
	<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/shufflejs/shuffle.min.js"></script>
	<script src="vendor/lightgallery/lightgallery.min.js"></script>
	<script src="vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
	<script src="vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
	<script src="vendor/lightgallery/plugins/video/lg-video.min.js"></script>
	<script src="vendor/drift-zoom/Drift.min.js"></script>
	<script src="js/theme.min.js"></script>
</body>
