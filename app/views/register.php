<?php include_once('../app/views/shares/header.php')?>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">TAO TAI KHOAN </h3>
            <p  class="text-danger">
                <?php echo($ErrorMessage);
                ?>
            </p>
          </div>
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <label for="UserName">USER NAME</label>
                <input type="text" class="form-control" id="UserName" name="UserName" required>
              </div>
              <div class="form-group">
                <label for="Pass">PASS</label>
                <input type="text" class="form-control" id="Pass" name="Pass" required>
              </div>
              <div class="form-group">
                <label for="PassWord">NHAP LAI PASS</label>
                <input type="text" class="form-control" id="PassWord" name="PassWord" required>
              </div>
              <div class="form-group">
                <label for="FullName">FULL NAME</label>
                <input type="text" class="form-control" id="FullName" name="FullName" required>
              </div>
              <br/>
              <button type="submit" class="btn btn-primary w-100">Dang Ky</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>