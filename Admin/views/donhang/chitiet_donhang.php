<table class="table table-bordered">
    <tr>
        <td>Đơn Hàng</td>
        <td>Sản Phẩm</td>
        <td>Số Lượng</td>
        <td>Đơn Giá</td>
        <td>Tổng Cộng</td>
    </tr>
    <?php
    foreach ($data

             as $r) {
        ?>
        <tr>
            <td><?php echo $r['madh'] ?></td>
            <td><?php echo $r['tensp'] ?></td>
            <td><?php echo $r['soluong'] ?></td>
            <td><?php echo number_format($r['gia']) ?> VND</td>
            <td><?php echo number_format($r['gia'] * $r['soluong']) ?> VND</td>
        </tr>
        <?php
    }
    ?>
</table>
<div class="container">
    <div style="color: red; font-weight: bold; font-size: 22px">Khuyến Mãi: -
        <?php
        foreach ($datakm

                 as $e) {
            $o = $e['giagiam'];
        }
        echo number_format($o);
        ?>
        VND
    </div>

    <div style="color: red; font-weight: bold; font-size: 22px">Tổng Tiền:
        <?php
        foreach ($data

                 as $f) {
            $b = $f['thanhtien'];
        }
        echo number_format($b);
        ?>
        VND
    </div>
</div>
