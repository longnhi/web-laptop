<?php 
if($datatb==null){?>
<div class="container mt-3"><div class="media border p-3"><div class="media-body"><i>Không có thông báo nào</i></div></div></div>
<?php }else{
foreach($datatb as $item){?>
<div class="container mt-3">
  <div class="media border p-3">
    <div class="media-body">
      <h4><?php echo $item['tieude'] ?>  <small><i><?php echo $item['ngaydang'] ?></i></small></h4>
      <p><?php echo $item['noidung'] ?></p>      
    </div>
  </div>
</div>
<?php }}?>