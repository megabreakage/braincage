<!-- Page Header Start -->

<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
  <div class="container">
    <div class="title">
      <h2 class="h1 text-white">Login</h2>
    </div>
  </div>
</div>
<!-- Page Header End -->
<div class="container">
  <div class="col-md-6 col-md-offset-3">
    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
     ?>
     <?php if (isset($_SESSION['error'])) { ?>
     <div class="alert alert-danger text-center">
       <?php echo $_SESSION['error'] ?>
     </div>
     <?php } ?>
    <h4>Login</h4>
    <p>Fill in your credentials to access your account</p>
    <form action="" method="post">
      <div class="form-group">
        <label for="Username">Username</label>
        <input class="form-control" type="text" name="username" placeholder="kelly">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input class="form-control" type="password" name="password" placeholder="*****">
      </div>
      <div class="form-group">
        <select class="form-control" name="membership">
          <option value="1">Parrot</option>
          <option value="2">Peacock</option>
          <option value="3">Peguin</option>
        </select>
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" name="Login">
      </div>
      <p>Hi Guest, <a href="<?php echo base_url() ?>auth/account">Register</a></p>
    </form>
  </div>
</div>
