<?php include_once('../app/views/shares/header.php')?>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">DANG NHAP</h3>
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
              <br/>
              <button type="submit" class="btn btn-warning w-100">Dang Nhap</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>