<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
  <div class="container">
    <div class="title">
      <h2 class="h1 text-white">Register</h2>
      <ul class="breadcrumb text-gray ff--primary">
          <li><a href="<?php echo base_url() ?>auth/account" class="btn-link">Account type</a></li>
          <li class="active"><span class="text-primary">Standard</span></li>
      </ul>
    </div>
  </div>
</div>
<!-- Page Header End -->
<div class="container pt--30 pb--30">
  <div class="col-md-8 col-md-offset-2">
    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
     ?>
     <?php if (isset($_SESSION['success'])) { ?>
     <div class="alert alert-success">
       <?php echo $_SESSION['success'] ?>
     </div>
     <?php } ?>
    <h5 class="text-center">Fill in your credentials to register with Braincage </h5>
    <form action="" method="post">
      <div class="col-md-6 form-group">
        <input class="form-control" type="text" name="fname" placeholder="First Name">
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" type="text" name="lname" placeholder="Last Name">
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" type="text" name="id_num" placeholder="ID. Number">
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" type="text" name="country" placeholder="Country">
      </div>
      <div class="col-md-2 form-group">
        <input class="form-control" type="number" name="code" value="+254">
      </div>
      <div class="col-md-4 form-group">
        <input class="form-control" type="number" name="cell" placeholder="Phone Number">
      </div>
      <div class="col-md-6 form-group">
        <div class="col-md-6">
          <label for="">D.O.B</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="date" name="dob" placeholder="">
        </div>
      </div>
      <div class="col-md-8 form-group">
        <input class="form-control" type="text" name="username" placeholder="Username">
      </div>
      <div class="col-md-8 form-group">
        <input class="form-control" type="email" name="email" placeholder="email">
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" type="password" name="password" placeholder="password">
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" type="password" name="password" placeholder="confirm password">
      </div>
      <div class="col-md-12">
        <label for="">Who introduced you to braincage?</label>
        <input type="radio" name="options" id="option1" autocomplete="off" name="rd1" value="1"> Media <br><br>
      </div>
      <div class="col-md-2 form-group">
        <input type="radio" name="options" id="option2" autocomplete="off" name="rd2" value="2"> Friend
      </div>
      <div class="col-md-10">
        <input class="form-control" type="number" name="phobe_number" placeholder="Friend's Phone Number"><br>
      </div>

      <div class="col-md-12 text-center">
        <input class="btn btn-primary" type="submit" name="register" value="Register">
      </div>
    </form>
  </div>
</div>
