<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary text-light">
    <a class="navbar-brand" href="index.php">STU</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?controller=sanpham&action=tatca">Tất cả sản phẩm<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=khuyenmai">Sản phẩm khuyến mãi<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?controller=sanpham&action=loc">Danh mục<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline navbar-center my-2 my-lg-0 mr-2" action='index.php' method='get'>
            <input type="hidden" name='controller' value='sanpham'>
            <input type="hidden" name='action' value='search'>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name='kw'>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav navbar-right mt-2 mt-lg-0 mr-2">
            <li class="nav-item active">
                <a class="btn btn-outline-light" href="index.php?controller=giohang&action=index">Giỏ hàng<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php
        if(!isset($_SESSION['email'])){?>
        <ul class="navbar-nav navbar-right mt-2 mt-lg-0 mr-5">
            <li class="nav-item active">
                <a class="btn btn-outline-light" href="./index.php?controller=khachhang&action=dangnhap">Tài khoản<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php
        }else{?>
        <ul class="navbar-nav navbar-right mt-2 mt-lg-0 mr-5">
            <li class="nav-item dropdown active">
                <a class="btn btn-outline-light dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ($_SESSION['tenkh']);?><span class="sr-only">(current)</span></a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownId">
                <a class="nav-link dropdown-item text-dark" href="index.php?controller=thongbao">Thông báo</a>
                <a class="nav-link dropdown-item text-dark" href="index.php?controller=donhang&action=theodoi">Theo dõi đơn hàng</a>
                <a class="nav-link dropdown-item text-dark" href="index.php?controller=khachhang&action=info">Thông tin cá nhân</a>
                <a class="nav-link dropdown-item text-dark" href="index.php?controller=khachhang&action=doimatkhau">Đổi mật khẩu</a>
                <a class="nav-link dropdown-item text-dark" href="index.php?controller=khachhang&action=dangxuat">Đăng xuất</a>
                </div>
            </li>
        </ul>
        <?php
        }?>
        <ul class="navbar-nav navbar-right mt-2 mt-lg-0 mr-5"></ul>
    </div>
</nav>