<?php
include "config.php";
function loadClass($className)
{
    if (is_file("models/$className.php"))
        include "./models/$className.php";
    else {
        echo 'Err';
        exit;
    }
}

spl_autoload_register('loadClass');
session_start();
$x = new Database();
$controller = Utilities::get('controller', 'index');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="tilte">Website bán đồ công nghệ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style type='text/css'>
        a:link {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php include './views/banner.php'; ?>
    <div class="container-fluid">
        <?php
        
        include './pages/header.php';
        ?>
        <div style="margin-top: 20px;margin-bottom: 80px;">
            <?php
            if($controller == 'index')
            {
                include './controllers/index.php';
            }
            if ($controller == 'sanpham') {
                include './controllers/sanpham.php';
            }
            if ($controller == 'giohang') {
                include './controllers/giohang.php';
            }

            if ($controller == 'khachhang') {
                include './controllers/khachhang.php';
            }
            
            if ($controller == 'loaisanpham') {
                include './controllers/loaisanpham.php';
            }
            
            if ($controller == 'nhasanxuat') {
                include './controllers/nhasanxuat.php';
            }
            
            if ($controller == 'donhang') {
                include './controllers/donhang.php';
            }

            if($controller=='thongbao'){
                include './controllers/thongbao.php';
            }
            ?>
        </div>
        <?php
        include './pages/footer.php';
        ?>
    </div>
</body>

</html>