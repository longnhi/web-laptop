<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="../index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">USER</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <?php if (!isset($_SESSION['username'])) { ?>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link align-middle text-white px-0">
                                <i class="fs-4 bi-house"></i> <span class="fs-5 d-none d-sm-inline">Đăng nhập</span>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="index.php?controller=sanpham&action=index" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Quản Lý Sản
                                Phẩm</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=sanpham&action=index1" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách sản phẩm</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Quản Lý Nhà Sản
                                Xuất</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=nhasanxuat&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách nhà sản xuất</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Quản Lý Loại Sản
                                Phẩm</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=loaisanpham&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách loại sản phẩm</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Quản Lý Banner</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=banner&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách banner</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span
                                        class="ms-1 d-none d-sm-inline">Quản Lý Bình Luận</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=binhluan&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách bình luận</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu6" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span
                                        class="ms-1 d-none d-sm-inline">Quản Lý Đơn Hàng</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu6" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=donhang&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách đơn hàng</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="index.php?controller=donnhaphang&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách đơn nhập hàng</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu7" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span
                                        class="ms-1 d-none d-sm-inline">Quản Lý Khuyến Mãi</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu7" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=khuyenmai&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách khuyến mãi</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu8" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span
                                        class="ms-1 d-none d-sm-inline">Quản Lý Thông Báo</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu8" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=thongbao&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách thông báo</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu9" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span
                                        class="ms-1 d-none d-sm-inline">Quản Lý Tin Tức</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu9" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=tintuc&action=index" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách tin tức</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu10" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Quản Lý Tài
                                Khoản</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu10" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=taikhoan&action=user" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách tài khoản user</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="index.php?controller=taikhoan&action=admin" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Danh sách tài khoản admin</span></a>
                                </li>
                            </ul>
                        </li>


                        <li class="mt-3">
                            <a href="#submenu12" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span
                                        class="ms-1 d-none d-sm-inline"><?php echo $_SESSION['hoten']; ?></span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu12" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?controller=login&action=logout" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Đăng xuất</span></a>
                                </li>
                            </ul>
                        </li>

                    <?php } ?>
                </ul>
            </div>

        </div>
        <div class="col py-3">