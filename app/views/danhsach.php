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
            <th scope="col">Xoa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($danhSachPhieuDK as $phieu) : ?>
            <tr>
                <td><?= $phieu['MaSoPhieu'] ?></td>
                <td><?= $phieu['HoTen'] ?></td>
                <td><?= $phieu['MaSinhVien'] ?></td>
                <td><?= $phieu['ChuyenNganh'] ?></td>
                <td><?= $phieu['CongTy'] ?></td>
                <td><a href="?route=edit&masophieu=<?= $phieu['MaSoPhieu'] ?>">Sua</a></td>
                <td><a href="?route=delete&masophieu=<?= $phieu['MaSoPhieu'] ?>">Xoa</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<div class="row">
    <?php foreach ($danhSachPhieuDK as $phieu) : ?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $phieu['MaSoPhieu'] ?></h5>
                    <p class="card-text"><?= $phieu['HoTen'] ?></p>
                    <a href="?route=add-cart&masophieu=<?= $phieu['MaSoPhieu'] ?>" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>