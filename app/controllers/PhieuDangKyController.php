<?php
require_once('../app/models/PhieuDangKy.php');
class PhieuDangKyController
{

    public function index()
    {
        require_once('../app/views/dangKy.php');
    }

    public function showPhieuDangKy()
    {
        $danhSachPhieuDK = PhieuDangKy::getAll();
        require_once('../app/views/danhsach.php');
    }

    public function uploadcv(){
        session_start();
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $userId = $_SESSION['UserId'];
            
            $target_dir = "../app/uploads/";
            $target_file = $target_dir.basename($_FILES["cv"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["cv"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $cv = htmlspecialchars(basename( $_FILES["cv"]["name"]));
                    $isSuccess = User::update($userId, $cv);
                    if($isSuccess){
                        $_SESSION['cv']=$cv;
                        header('Location: ?');
                    }
                        // Redirect to homepage

            $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["cv"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["cv"]["name"])). " has been uploaded.";
                    $cv = htmlspecialchars(basename( $_FILES["cv"]["name"]));
                    $isSuccess = User::update($userId, $cv);
                    if($isSuccess){
                        $_SESSION['cv']=$cv;
                        header('Location: ?');
                    }      
                        // Redirect to homepage
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }



        }
        require_once('../app/views/cv.php');
    }



    function createPhieuDangKy()
    {

        $hoten = $_POST['hoten'];
        $masinhvien = $_POST['mssv'];
        $chuyennganh = $_POST['chuyennganh'];
        $congty = $_POST['congty'];

        $isSuccess = PhieuDangKy::create($hoten, $masinhvien, $chuyennganh, $congty);
        if ($isSuccess)
            // Redirect to homepage
            header('Location: ?route=danh-sach');
        else
            header('Location: ?route=failure');
        exit;
    }
    function editPhieuDangKy()
    {

        $danhSachPhieuDK = PhieuDangKy::getAll();
        require_once('../app/views/update.php');
    }

    function updatePhieuDangKy()
    {
        $hoten = $_REQUEST['HoTen'];
        $masinhvien = $_REQUEST['MaSinhVien'];
        $chuyennganh = $_REQUEST['ChuyenNganh'];
        $congty = $_REQUEST['CongTy'];
        $maphieu = $_REQUEST['MaSoPhieu'];
        $isSuccess = PhieuDangKy::update($hoten, $masinhvien, $chuyennganh, $congty, $maphieu);
        if ($isSuccess)
            // Redirect to homepage
            header('Location: ?route=danh-sach');
        else
            header('Location: ?route=failure');
        exit;
    }

    function deletePhieuDangKy()
    {

        $maphieu = $_GET['masophieu'];

        $isSuccess = PhieuDangKy::delete($maphieu);
        if ($isSuccess)
            // Redirect to homepage
            header('Location: ?route=danh-sach');
        else
            header('Location: ?route=failure');
        exit;
    }
    function addCart()
    {
        session_start();
        if (isset($_GET['masophieu'])) {
            $masophieu = $_GET['masophieu'];
            $_phieudangky = PhieuDangKy::find($masophieu);

            if (!empty($_SESSION['cart'])) {
                $acol = array_column($_SESSION['cart'], 'masophieu');
                if (in_array($masophieu, $acol)) {
                    $_SESSION['cart'][$masophieu]['soluong'] += 1;
                } else {
                    $item = [
                        'masophieu' => $_GET['masophieu'],
                        'soluong' => 1,
                        'ten' => $_phieudangky['HoTen']
                    ];
                    $_SESSION['cart'][$masophieu] = $item;
                }
            } else {
                $item = [
                    'masophieu' => $_GET['masophieu'],
                    'soluong' => 1,
                    'ten' => $_phieudangky['HoTen']
                ];
                $_SESSION['cart'][$masophieu] = $item;
            }
            header("location: ?route=view-cart");
            exit;
        } else {
            header("Location: ?route=error");
            exit;
        }
    }
    function viewCart()
    {
        require_once('../app/views/cart.php');
    }

    function emptyCart()
    {
        session_start();
        unset($_SESSION['cart']);
        header("location: ?route=view-cart");
        exit;
    }

    function deleteCartItem()
    {
        session_start();
        if (isset($_GET['masophieu'])) {
            $masophieu = $_GET['masophieu'];
            unset($_SESSION['cart'][$masophieu]);
            header("location: ?route=view-cart");
            exit;
        }
    }

    function updateCartItem()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $soluong = $_POST['soluong'];
            $masophieu = $_POST['masophieu'];
            if (!empty($_SESSION['cart'])) {
                $acol = array_column($_SESSION['cart'],'masophieu');
                if (in_array($masophieu, $acol)) {
                    $_SESSION['cart'][$masophieu]['soluong'] = $soluong;
                } 
            header("location: ?route=view-cart");
            exit;
        } else {
            header("Location: ?route=error");
            exit;
        }
        }
    }
}
