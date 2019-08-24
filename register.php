<?php include('header.php'); ?>

<section class="py-4">

<div class= "container">
<form>
<div class="row">

  <div class="form-group col-md-6">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" placeholder="Enter username" name="uname">
   
  </div>
<div class="form-group col-md-6">
    <label for="uname">Lastname:</label>
    <input type="text" class="form-control" placeholder="Enter lastname" name="lname">
   
  </div>
<div class="form-group col-md-6">
    <label for="uname">Password:</label>
    <input type="text" class="form-control" placeholder="Enter password" name="pwd">
   
  </div>
  <div class="form-group form-check col-md-12">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> I agree on blabla.
   
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</div>
</form>
</div>
</section>

<?php include('footer.php'); ?>