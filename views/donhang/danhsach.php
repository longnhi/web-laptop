<div class="container mt-3">
    <h2>Đơn hàng gần đây</h2>
</div>
<div class="container mb-3">
    <?php if($datadh==null){?>
      <div class="container mt-3"><div class="media border p-3"><div class="media-body"><h5>Chưa có đơn hàng nào</h5><i>Hãy đến đặt hàng</i></div></div></div>
    <?php } ?>
    <?php foreach($datadh as $item){ $datactdh = $ctdh->detail($item['madh']); ?>
    <div class="container mt-3 mb-5 shadow">
        <h4>Đơn hàng mua ngày <small><i><?php echo $item['ngaydat'] ?></i></small></h4>
        <div class="media border">
            <table class="table table-responsive-lg table-borderless text-center">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <?php foreach($datactdh as $itemct){ ?>
                <tbody>
                    <tr>
                        <td class="align-middle"><img
                                src="<?php echo IMG_SANPHAM.$sp->detail($itemct['masp'])['hinhanh'] ?>" alt=""
                                class="mr-3 mt-3 rounded" style="width:60px;"></td>
                        <td class="align-middle">
                            <h5><?php echo $sp->detail($itemct['masp'])['tensp'] ?></h5>
                        </td>
                        <td class="align-middle"><?php echo $itemct['soluong'] ?></td>
                        <td class="align-middle"><?php echo number_format($itemct['thanhtien']) ?> VNĐ</td>
                    </tr>
                </tbody>
                <?php }?>
                <thead>
                    <tr>
                        <th colspan="3">Tổng tiền</th>
                        <th><?php echo number_format($item['thanhtien']) ?> VNĐ</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="mt-3">
            <table class="table table-borderless table-responsive-lg">
                <tbody>
                    <tr>
                        <td class="align-middle">Tên người nhận</td>
                        <td class="align-middle"><?php echo $item['tennguoinhan'] ?></td>
                    </tr>
                    <tr>
                        <td class="align-middle">Số điện thoại người nhận</td>
                        <td class="align-middle" colspan="3"><?php echo $item['sdtnguoinhan'] ?></td>
                    </tr>
                    <tr>
                        <td class="align-middle">Ngày đặt</td>
                        <td class="align-middle"><?php echo $item['ngaydat'] ?></td>
                    </tr>
                    <tr>
                        <td class="align-middle">Địa chỉ nhận</td>
                        <td class="align-middle"><?php echo $item['diachinhan'] ?></td>
                    </tr>
                    <tr>
                        <td class="align-middle">Phương thức thanh toán</td>
                        <td class="align-middle">
                            <?php echo $item['phuongthucthanhtoan']==1?'Thanh toán khi nhận hàng':'Thanh toán bằng thẻ'; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Trạng thái</td>
                        <td class="align-middle"><?php echo $item['trangthai'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container justify-content-center mb-5 text-center p-3">
        <?php if($item['trangthai']=='Đang Chờ Xử Lý'){ ?>  
        <a class="btn btn-outline-success" href="index.php?controller=donhang&action=huydh&madh=<?php echo $item['madh'] ?>">Huỷ đơn hàng</a>
        <?php }else if($item['trangthai']=='Đã Hủy'){ ?>
        <a class="btn btn-outline-success disabled" href="#">Đã huỷ</a>
        <?php }else if($item['trangthai']=='Đang Vận Chuyển'){?>
        <a class="btn btn-outline-success" href="index.php?controller=donhang&action=nhandh&madh=<?php echo $item['madh'] ?>">Nhận hàng</a>
        <?php }else if($item['trangthai']=='Đã Nhận'){?>
          <a class="btn btn-outline-success disabled" href="#">Đã nhận hàng</a>
        <?php }?>
        </div>
    </div>
    <?php }?>
</div>