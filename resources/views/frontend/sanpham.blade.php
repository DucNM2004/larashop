@extends('layouts.frontend')
@section('title', 'Sản phẩm')
@section('content')

<!-- Bắt đầu edit sản phẩm từ đây từ đây -->
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row pt-3 mx-n2">
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <a class="card-img-top d-block overflow-hidden" href="#">
                     <!-- Tạo floder rồi để hình dô vào floder-->
                    <!-- lấy đường dẫn ảnh từ database (floder) vscode thì chọn dô hình chuột phải chọn  Copy Ralative Path -->
                    <img src="{{ asset('public\img\u-oa-meo-dau-roi.jpg') }}" />
                </a>
                <div class="card-body py-2">
                    <a class="product-meta d-block fs-xs pb-1" href="#">Iphone 7 128 GB</a>
                    <h3 class="product-title fs-sm">
                        <a href="#">Iphone 7 128 GB</a>
                    </h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price">
                            <span class="text-accent">7.200.000<small>đ</small></span>
                        </div>
                        <div class="star-rating">
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <a class="btn btn-primary btn-sm d-block w-100 mb-2" href="#">
                        <i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
                    </a>
                </div>
            </div>
            <!--  Tới đây là 1 sản phẩm  -->

            <hr class="d-sm-none">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <a class="card-img-top d-block overflow-hidden" href="#">
                    <img src="{{ asset('public\img\dien-thoai\iphone-12-pro-max-256gb-190320-020344-400x400.jpg') }}" />
                </a>
                <div class="card-body py-2">
                    <a class="product-meta d-block fs-xs pb-1" href="#">Iphone 12 Pro Max 256 GB</a>
                    <h3 class="product-title fs-sm">
                        <a href="#">Iphone 12 Pro Max 256 GB</a>
                    </h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price">
                            <span class="text-accent">31.200.000<small>đ</small></span>
                        </div>
                        <div class="star-rating">
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <a class="btn btn-primary btn-sm d-block w-100 mb-2" href="#">
                        <i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
                    </a>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <a class="card-img-top d-block overflow-hidden" href="#">
                    <img src="img/01.jpg" />
                </a>
                <div class="card-body py-2">
                    <a class="product-meta d-block fs-xs pb-1" href="#">Sneakers & Keds</a>
                    <h3 class="product-title fs-sm">
                        <a href="#">Women Colorblock Sneakers</a>
                    </h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price">
                            <span class="text-accent">3.200.000<small>đ</small></span>
                        </div>
                        <div class="star-rating">
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <a class="btn btn-primary btn-sm d-block w-100 mb-2" href="#">
                        <i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
                    </a>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <a class="card-img-top d-block overflow-hidden" href="#">
                    <img src="img/01.jpg" />
                </a>
                <div class="card-body py-2">
                    <a class="product-meta d-block fs-xs pb-1" href="#">Sneakers & Keds</a>
                    <h3 class="product-title fs-sm">
                        <a href="#">Women Colorblock Sneakers</a>
                    </h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price">
                            <span class="text-accent">3.200.000<small>đ</small></span>
                        </div>
                        <div class="star-rating">
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <a class="btn btn-primary btn-sm d-block w-100 mb-2" href="#">
                        <i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
                    </a>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
    </div>
    <hr class="my-3">

    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
        </ul>
        <ul class="pagination">
            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
        </ul>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
        </ul>
    </nav>
</div>
</main>

@endsection