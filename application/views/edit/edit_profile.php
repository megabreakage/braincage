

<div class="container">
  <div class="col-md-8 col-md-offset-2 pt--40 pb--10" id="bio">

    <h4 class="text-center pb--10">Update your profile</h4>
    <form method="post">
      <div class="col-md-6 form-group">
        <input class="form-control" type="text" name="fname" value="<?php echo $bio['fname']; ?>" placeholder="First name">
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" type="text" name="lname" value="<?php echo $bio['lname']; ?>" placeholder="Last name">
      </div>
      <div class="col-md-8 form-group">
        <input class="form-control" type="text" name="occupation" value="<?php echo $bio['occupation']; ?>" placeholder="Occupation">
      </div>
      <div class="col-md-12 form-group">
        <input class="form-control" type="text" name="skills" value="<?php echo $bio['skills']; ?>" placeholder="Skills (seperate each by a comma)">
      </div>
      <div class="col-md-2">
        <label for="dob">Date of Birth:</label>
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" type="date" name="dob" value="<?php echo $bio['dob']; ?>">
      </div>
      <div class="col-md-12 form-group">
        <textarea class="form-control" name="bio" rows="5" cols="80" placeholder="Biography"><?php echo $bio['bio']; ?></textarea>
      </div>
      <div class="col-md-12">
        <input class="btn btn-primary" type="submit" name="update_bio" value="Update">
      </div>
    </form>

  </div>
  <hr class="col-md-8 col-md-offset-2">

  <div class="col-md-8 col-md-offset-2 pb--10" id="xp">
    <h5 class="pb--10"> Work Experience</h5>

    <form method="post">
      <?php // TODO: use foreach to display experience ?>

      <div class="col-md-8 form-group">
        <input class="form-control" type="text" name="position" value="" placeholder="Position">
      </div>
      <div class="col-md-5 form-group">
        <input class="form-control col-md-5" type="date" name="start_date" value="" placeholder="Start date">
      </div>
      <div class="col-md-2 text-center">
        to
      </div>
      <div class="col-md-5 form-group">
        <input class="form-control col-md-5" type="date" name="end_date" value="" placeholder="End date">
      </div>
      <div class="col-md-8 form-group">
        <input class="form-control" type="text" name="company" value="" placeholder="Company">
      </div>
      <div class="col-md-12 form-group">
        <textarea class="form-control" name="bio" rows="5" cols="80" placeholder="Position Description"></textarea>
      </div>
      <hr class="col-md-12">

      <?php // TODO: close the foreach loop here ?>
      <div class="col-md-12">
        <input class="btn btn-primary" type="submit" name="update_xp" value="Update">
      </div>
    </form>

  </div>
  <hr class="col-md-8 col-md-offset-2">
  <div class="col-md-8 col-md-offset-2 pb--30">
    <h5 class="pb--10">Education</h5>

    <form method="post">
      <?php // TODO: use foreach to display experience ?>

      <div class="col-md-8 form-group">
        <input class="form-control" type="text" name="study" value="" placeholder="Study">
      </div>
      <div class="col-md-5 form-group">
        <input class="form-control col-md-5" type="date" name="start_date" value="" placeholder="Start date">
      </div>
      <div class="col-md-2 text-center">
        to
      </div>
      <div class="col-md-5 form-group">
        <input class="form-control col-md-5" type="date" name="end_date" value="" placeholder="End date">
      </div>
      <div class="col-md-8 form-group">
        <input class="form-control" type="text" name="school" value="" placeholder="School/College">
      </div>
      <div class="col-md-12 form-group">
        <textarea class="form-control" name="bio" rows="5" cols="80" placeholder="Study Description"></textarea>
      </div>
      <hr class="col-md-12">

      <?php // TODO: close the foreach loop here ?>
      <div class="col-md-12">
        <input class="btn btn-primary" type="submit" name="update_ed" value="Update">
      </div>
    </form>

  </div>
</div>
