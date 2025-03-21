@extends('layouts.frontend')
@section('title', 'Đơn hàng')
@section('content')
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
            <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                    <div class="d-md-flex align-items-center">
                        <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width:6.375rem;">
                            <img class="rounded-circle" src="img/avatar.jpg" />
                        </div>
                        <div class="ps-md-3">
                            <h3 class="fs-base mb-0">Susan Gardner</h3>
                            <span class="text-accent fs-sm">s.gardner@example.com</span>
                        </div>
                    </div>
                    <a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ci-menu me-2"></i>Hồ sơ khách hàng
                    </a>
                </div>
                <div class="d-lg-block collapse" id="account-menu">
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="fs-sm mb-0 text-muted">Quản lý</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="#">
                                <i class="ci-bag opacity-60 me-2"></i>Đơn hàng<span class="fs-sm text-muted ms-auto">1</span>
                            </a>
                        </li>
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                <i class="ci-heart opacity-60 me-2"></i>Sản phẩm yêu thích<span class="fs-sm text-muted ms-auto">3</span>
                            </a>
                        </li>
                        <li class="mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                <i class="ci-star opacity-60 me-2"></i>Đánh giá sản phẩm<span class="fs-sm text-muted ms-auto">1</span>
                            </a>
                        </li>
                    </ul>
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="fs-sm mb-0 text-muted">Thiết lập tài khoản</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                <i class="ci-user opacity-60 me-2"></i>Hồ sơ cá nhân
                            </a>
                        </li>
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                <i class="ci-location opacity-60 me-2"></i>Sổ địa chỉ
                            </a>
                        </li>
                        <li class="mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                <i class="ci-card opacity-60 me-2"></i>Phương thức thanh toán
                            </a>
                        </li>
                        <li class="d-lg-none border-top mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                <i class="ci-sign-out opacity-60 me-2"></i>Đăng xuất
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <section class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
                <div class="d-flex align-items-center">
                    <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="order-sort">Sắp xếp theo:</label>
                    <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="order-sort">Sắp xếp theo:</label>
                    <select class="form-select" id="order-sort">
                        <option>Tất cả</option>
                        <option>Đã giao</option>
                        <option>Đang vận chuyển</option>
                        <option>Đã chuyển hoàn</option>
                        <option>Đã hủy</option>
                    </select>
                </div>
                <a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="#">
                    <i class="ci-sign-out me-2"></i>Đăng xuất
                </a>
            </div>
            <div class="table-responsive fs-md mb-4">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Mã đơn</th>
                            <th>Ngày đặt hàng</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#ChiTietDonHang" data-bs-toggle="modal">34VB5540K83</a></td>
                            <td class="py-3">May 21, 2019</td>
                            <td class="py-3"><span class="badge bg-info m-0">In Progress</span></td>
                            <td class="py-3 text-end">$358.75</td>
                        </tr>
                        <tr>
                            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">78A643CD409</a></td>
                            <td class="py-3">December 09, 2018</td>
                            <td class="py-3"><span class="badge bg-danger m-0">Canceled</span></td>
                            <td class="py-3 text-end"><span>$760.50</span></td>
                        </tr>
                        <tr>
                            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">112P45A90V2</a></td>
                            <td class="py-3">October 15, 2018</td>
                            <td class="py-3"><span class="badge bg-warning m-0">Delayed</span></td>
                            <td class="py-3 text-end">$1,264.00</td>
                        </tr>
                        <tr>
                            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">28BA67U0981</a></td>
                            <td class="py-3">July 19, 2018</td>
                            <td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
                            <td class="py-3 text-end">$198.35</td>
                        </tr>
                        <tr>
                            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">502TR872W2</a></td>
                            <td class="py-3">April 04, 2018</td>
                            <td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
                            <td class="py-3 text-end">$2,133.90</td>
                        </tr>
                        <tr>
                            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">47H76G09F33</a></td>
                            <td class="py-3">March 30, 2018</td>
                            <td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
                            <td class="py-3 text-end">$86.40</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
        </section>
    </div>
</div>

<div class="modal fade" id="ChiTietDonHang">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Chi tiết đơn hàng - 34VB5540K83</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-0">
                <div class="d-sm-flex justify-content-between mb-3 pb-3 pb-sm-2 border-bottom">
                    <div class="d-sm-flex text-center text-sm-start">
                        <a class="d-inline-block flex-shrink-0 mx-auto" href="#" style="width:10rem;">
                            <img src="img/01.jpg" alt="Product">
                        </a>
                        <div class="ps-sm-4 pt-2">
                            <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
                            <div class="fs-lg text-accent pt-2">$154<small>đ</small></div>
                        </div>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                        <div class="text-muted mb-2">Số lượng</div>
                        <span>1</span>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                        <div class="text-muted mb-2">Thành tiền</div>
                        <span>$154</span><small>đ</small>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-between mb-3 pb-3 pb-sm-2">
                    <div class="d-sm-flex text-center text-sm-start">
                        <a class="d-inline-block flex-shrink-0 mx-auto" href="#" style="width:10rem;">
                            <img src="img/01.jpg" alt="Product">
                        </a>
                        <div class="ps-sm-4 pt-2">
                            <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
                            <div class="fs-lg text-accent pt-2">$154<small>đ</small></div>
                        </div>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                        <div class="text-muted mb-2">Số lượng</div>
                        <span>1</span>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                        <div class="text-muted mb-2">Thành tiền</div>
                        <span>$154</span><small>đ</small>
                    </div>
                </div>
            </div>
            <div class="modal-footer flex-wrap bg-secondary fs-md">
                <div class="py-1 text-end">
                    <span class="text-muted">Tổng tiền sản phẩm:</span>
                    <span class="fs-lg">$297<small>đ</small></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection