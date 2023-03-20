<?php include_once('../app/views/shares/header.php')?>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">UPLOAD AVATAR</h3>
            <p  class="text-danger">
            </p>
          </div>
          <div class="card-body">
            <form method="post" action="?route=upload-avatar" enctype="multipart/form-data">
              <div class="form-group">
                <label for="avatar">UPLOAD FILE</label>
                <input type="file" class="form-control" name="avatar" required>
              </div>
             
              <br/>
              <button type="submit" class="btn btn-primary w-100">SUBMIT</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>