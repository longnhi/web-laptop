<?php 
    $nsx = new NhaSanXuat();
    $data =$nsx->all();
    foreach($data as $r)
    {
    ?>
        <a class="dropdown-item" href="./index.php?controller=sanpham&action=nsx&mansx=<?php echo $r['mansx'] ?>"><?php echo $r['tennsx'] ?></a>
    <?php
    }
?>