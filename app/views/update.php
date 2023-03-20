<?php include_once('../app/views/shares/header.php') ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Ma So Phieu</th>
            <th scope="col">Ho Ten</th>
            <th scope="col">Ma Sinh Vien</th>
            <th scope="col">Chuyen Nganh</th>
            <th scope="col">Cong Ty</th>
            <th scope="col">Sua</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($danhSachPhieuDK as $phieu):
                if($phieu['MaSoPhieu']==$_GET['masophieu']) {?>
                <form action="?route=update" method="post">
                    <tr>
                        <td><input type="text" readonly name="MaSoPhieu" value="<?= $phieu['MaSoPhieu'] ?>"></td>
                        <td><input value="<?= $phieu['HoTen'] ?>" name="HoTen"></td>
                        <td><input value="<?= $phieu['MaSinhVien'] ?>" name="MaSinhVien"></td>
                        <td><input value="<?= $phieu['ChuyenNganh'] ?>" name="ChuyenNganh"></td>
                        <td><input value="<?= $phieu['CongTy'] ?>" name="CongTy"></td>
                        <td><input type="submit" value="Xong"></td>
                    </tr>
                </form>
        
        <?php } endforeach ?>
    </tbody>
</table>