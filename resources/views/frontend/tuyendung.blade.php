@extends('layouts.frontend')
@section('title', 'tuyển dụng')
@section('content')
<div class="container pb-5">
    <div class="row justify-content-center pt-3 mt-md-3">
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4 mt-n1">
                <div class="d-flex align-items-center fs-sm mb-2">
                    <a class="blog-entry-meta-link" href="#">
                        <div class="blog-entry-author-ava">
                            <img src="img/03.jpg" />
                        </div>
                        Cynthia Gomez
                    </a>
                    <span class="blog-entry-meta-divider"></span>
                    <a class="blog-entry-meta-link" href="#">Ngày 17 Tháng 7</a>
                </div>
                <div class="fs-sm mb-2">
                    <a class="blog-entry-meta-link text-nowrap" href="#" data-scroll>
                        <i class="ci-eye"></i>3 lượt xem</a>
                </div>
            </div>

            <p style="text-align:justify">Nhân Viên Thiết Kế Tàu ( Shipbuilding Designer ) - Không Yêu Cầu Kinh Nghiệm - Tại Hồng Bàng, Hải Phòng - Thu Nhập Từ 11 Triệu - Đi Làm Ngay</p>
            <p style="text-align:justify">Chuyên Viên Dự Toán (NỘI THẤT) Thu Nhập Lên Đến 15 Triệu Đồng - Đi Làm Sau Tết Nguyên Đán</p>
            <p style="text-align:justify">Chuyên Viên Đào Tạo, Thu Nhập Upto 15 Triệu (Được Trang Bị Các Thiết Bị Làm Việc) Tại Hà Nội </p>

            <div class="d-flex flex-wrap justify-content-between pt-2 pb-4 mb-1">
                <div class="mt-3 me-3">
                    <a class="btn-tag me-2 mb-2" href="#">#nội thất</a>
                    <a class="btn-tag mb-2" href="#">#tuyen dụng</a>
                </div>
                <div class="mt-3">
                    <span class="d-inline-block align-middle text-muted fs-sm me-3 mt-1 mb-2">Chia sẻ bài viết:</span>
                    <a class="btn-social bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a>
                    <a class="btn-social bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a>
                    <a class="btn-social bs-pinterest me-2 mb-2" href="#"><i class="ci-pinterest"></i></a>
                </div>
            </div>

            <!-- Bình luận -->
            <div class="pt-2 mt-5" id="comments">
                <h2 class="h4">Bình luận<span class="badge bg-secondary fs-sm text-body align-middle ms-2">2</span></h2>
                <!-- Bình luận -->
                <div class="d-flex align-items-start py-4">
                    <img class="rounded-circle" src="img/03.jpg" width="50" />
                    <div class="ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="fs-md mb-0">Benjamin Miller</h6>
                        </div>
                        <p class="fs-md mb-1" style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. (Đây là đoạn văn mẫu Lorem Ipsum.)</p>
                        <span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Ngày 15 Tháng 8, 2019</span>
                    </div>
                </div>
                <!-- Bình luận -->
                <div class="d-flex align-items-start py-4">
                    <img class="rounded-circle" src="img/03.jpg" width="50" />
                    <div class="ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="fs-md mb-0">Benjamin Miller</h6>
                        </div>
                        <p class="fs-md mb-1" style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. (Đây là đoạn văn mẫu Lorem Ipsum.)</p>
                        <span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Ngày 15 Tháng 8, 2019</span>
                    </div>
                </div>
                <!-- Biểu mẫu bình luận -->
                <div class="card border-0 shadow mt-2 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <img class="rounded-circle" src="img/03.jpg" width="50" />
                            <form class="w-100 needs-validation ms-3" novalidate>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Chia sẻ ý kiến của bạn..." required></textarea>
                                    <div class="invalid-feedback">Nội dung bình luận không được bỏ trống.</div>
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit">Đăng bình luận</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-secondary py-5">
    <div class="container py-3">
        <h2 class="h4 text-center pb-4">Bài viết cùng chuyên mục</h2>
        <div class="tns-carousel">
            <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
                <article>
                    <a class="blog-entry-thumb mb-3" href="#"><img src="img/02.jpg" /></a>
                    <div class="d-flex align-items-center fs-sm mb-2">
                        <a class="blog-entry-meta-link" href="#">bởi Rafael Marquez</a>
                        <span class="blog-entry-meta-divider"></span>
                        <a class="blog-entry-meta-link" href="#">Ngày 16 Tháng 9</a>
                    </div>
                    <h3 class="h6 blog-entry-title"><a href="#">Chúng tôi đã triển khai dịch vụ giao hàng bằng drone ở California. Xem video minh họa</a></h3>
                </article>
                <!-- Tiếp tục với các bài viết khác -->
            </div>
        </div>
    </div>
</div>

@endsection