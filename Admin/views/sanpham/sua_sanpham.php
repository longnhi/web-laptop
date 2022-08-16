<div class="m-auto"">
<?php
foreach ($data as $r) {
    ?>
    <div class=" container">
        <form method="post" action="index.php?controller=xuly&action=suasp" class="row" enctype='multipart/form-data'>
            <div class="mb-3 col-6">
                <label class="form-label">ID</label>
                <input readonly name="ID" class="form-control" type="text" value="<?php echo $r['masp'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">Giá</label>
                <input name="gia" type="number" class="form-control" value="<?php echo $r['gia'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">Tên Sản Phẩm</label>
                <input name="tensp" class="form-control" type="text" value="<?php echo $r['tensp'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">GPU - Card màng hình</label>
                <input name="gpu" class="form-control" type="text" value="<?php echo $r['gpu'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">Webcam</label>
                <input name="webcam" class="form-control" type="text" value="<?php echo $r['camera'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">Pin</label>
                <input name="pin" class="form-control" type="text" value="<?php echo $r['pin'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">Trọng Lượng</label>
                <input name="trongluong" class="form-control" type="text" value="<?php echo $r['trongluong'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">Bảo hành</label>
                <input name="baohanh" class="form-control" type="text" value="<?php echo $r['baohanh'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">CPU</label>
                <input name="cpu" class="form-control" type="text" value="<?php echo $r['cpu'] ?>">
            </div>

            <div class="mb-3 col-6">
                <label class="form-label">Số lượng</label>
                <input name="soluong" class="form-control" type="number" value="<?php echo $r['soluongtonkho'] ?>">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Hình</label>
                <input name="hinh" type="file" class="form-control" >
                <input name="hinhcu" type="text" class="form-control" value="<?php echo $r['hinhanh'] ?>" hidden>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Nhà Sản Xuất</label>
                <select name="nhasanxuat" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="<?php echo $r['mansx']; ?>"><?php echo $r['tennsx']; ?></option>
                    <?php
                    $nhasx = new NhaSanXuat();
                    $datansx = $nhasx->all();
                    foreach ($datansx as $n) {
                        ?>
                        <option value="<?php echo $n['mansx']; ?>"><?php echo $n['tennsx']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Loại</label>
                <select name="loai" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="<?php echo $r['maloai']; ?>"><?php echo $r['tenloai']; ?></option>
                    <?php
                    $loai = new LoaiSanPham();
                    $dataloai = $loai->all();
                    foreach ($dataloai as $n) {
                        ?>
                        <option value="<?php echo $n['maloai']; ?>"><?php echo $n['tenloai']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Kết Nối</label>
                <select name="mausac" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="<?php echo $r['mausac']; ?>"><?php echo $r['mausac']; ?></option>
                    <option value="Trắng">Trắng</option>
                    <option value="Đen">Đen</option>
                    <option value="Galaxy">Galaxy</option>
                    <option value="Xám">Xám</option>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Kết Nối</label>
                <select name="ketnoi" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="<?php echo $r['ketnoi']; ?>"><?php echo $r['ketnoi']; ?></option>
                    <option value="Bluetooth 5, Wifi 6, Type - C, HDMI">Bluetooth 5, Wifi 6, Type - C, HDMI</option>
                    <option value="Bluetooth 5, Wifi 6, Type - C">Bluetooth 5, Wifi 6, Type - C</option>
                    <option value="Bluetooth 4, Wifi 5, HDMI">Bluetooth 4, Wifi 5, HDMI</option>
                    <option value="Bluetooth 4, Wifi 5, VGA">Bluetooth 4, Wifi 5, VGA</option>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Hệ Điều Hành</label>
                <select name="hedieuhanh" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="<?php echo $r['hedieuhanh']; ?>"><?php echo $r['hedieuhanh']; ?></option>
                    <option value="Windows">Windows</option>
                    <option value="Ubuntu">Ubuntu</option>
                    <option value="MacOs">MacOs</option>
                    <option value="Android">Android</option>
                    <option value="IOS">IOS</option>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Ram</label>
                <select name="ram" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="<?php echo $r['ram']; ?>"><?php echo $r['ram']; ?></option>
                    <option value="32gb">32gb</option>
                    <option value="16gb">16gb</option>
                    <option value="8gb">8gb</option>
                    <option value="4gb">4gb</option>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Độ phân giải</label>
                <select name="dophangiai" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="<?php echo $r['dophangiai']; ?>"><?php echo $r['dophangiai']; ?></option>
                    <option value="1920x1080 - 144hz">1920x1080 - 144hz</option>
                    <option value="1920x1080 - 60hz">1920x1080 - 60hz</option>
                    <option value="1280x1024 - 60hz">1280x1024 - 60hz</option>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Ổ cứng</label>
                <select name="ocung" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="<?php echo $r['ocung']; ?>"><?php echo $r['ocung']; ?></option>
                    <option value="1TB - SSD">1TB - SSD</option>
                    <option value="1TB - HDD">1TB - HDD</option>
                    <option value="512GB - SSD">512GB - SSD</option>
                    <option value="512GB - HDD">512GB - HDD</option>
                    <option value="128GB - SSD">128GB - SSD</option>
                    <option value="128GB - HDD">128GB - HDD</option>
                </select>
            </div>

            <div class="mb-3 col-6" style="text-align: center">
                <button name="btnLuu" type="submit" class="btn btn-primary py-1 px-5">Lưu dữ liệu</button>
            </div>

            <div class="mb-3 col-6" style="text-align: center">
                <button type="reset" class="btn btn-danger py-1 px-5">Xóa làm lại</button>
            </div>
        </form>
    </div>
    <?php
}
?>