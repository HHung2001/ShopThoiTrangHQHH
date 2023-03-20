<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web dang ky thuc tap</title>
    <link rel="stylesheet" href="../app/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?">Trang chu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=dang-ky">Dang ky</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="?route=danh-sach">Danh Sach</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="?route=view-cart">Gio Hang</a>
        </li>
        <?php
        @session_start();
        $avatar = $_SESSION['Avatar'] ?? "default.png";
        if($avatar == null)
          $avatar = "default.png";
        if(!isset($_SESSION['UserId'])){
          echo'
              <li class="nav-item">
                <a class="nav-link btn btn-danger" href="?route=login">Dang Nhap</a>
              </li>
              &nbsp;
              <li class="nav-item">
                <a class="nav-link btn btn-warning" href="?route=register">Tao Tai Khoan</a>
              </li>
                ';
          }
          else{
          echo'
          <li class="nav-item" ><a class="nav-link text-danger" href="#">Xin chao '.$_SESSION['UserName'].'</a>
          </li>
          <a href="?route=upload-avatar"><img src="../app/uploads/'.$avatar.'" height="40px" alt=""></a>&nbsp;&nbsp;
          
          <li class="nav-item">
                  
          <a class="nav-link btn btn-warning" href="?route=logout">Dang Xuat</a>';
          }

        ?>
      </ul>
    </div>
  </div>
</nav>