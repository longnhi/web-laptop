<?php 
    $lsp = new LoaiSanPham();
    $data =$lsp->all();
    foreach($data as $r)
    {
    ?>
        <a class="dropdown-item" href="./index.php?controller=sanpham&action=lsp&maloai=<?php echo $r['maloai'] ?>"><?php echo $r['tenloai'] ?></a>
    <?php
    }
?>