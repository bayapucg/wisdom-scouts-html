<?php include('header.php'); ?>

<section class="py-4">

<div class= "container">
<form>
<div class="row">

  <div class="form-group col-md-4">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" placeholder="Enter username" name="uname">
   
  </div>
<div class="form-group col-md-4">
    <label for="lname">Lastname:</label>
    <input type="text" class="form-control" placeholder="Enter lastname" name="lname">
   
  </div>
  <div class="form-group col-md-4">
    <label for="suf">Suffix:</label>
    <input type="text" class="form-control" placeholder="Enter suffix" name="suf">
   
  </div>
  <div class="form-group col-md-6">
    <label for="email">Email Id:</label>
    <input type="text" class="form-control" placeholder="Enter email" name="email">
   
  </div>
<div class="form-group col-md-6">
    <label for="uname">Password:</label>
    <input type="text" class="form-control" placeholder="Enter password" name="pwd">
	</div>
	
<div class="form-group col-md-6">
      <label for="inputState">Gender</label>
      <select id="inputState" class="form-control">
        <option selected>Select gender</option>
        <option>male</option>
		<option>female</option>
      </select>
    </div>
<div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity"  placeholder="Enter city name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Select state</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip"  placeholder="Zip code">
    </div>
	
   <div class="form-check col-md-12">
      <input class="form-group-input" type="checkbox" id="gridCheck">
      <label class="form-group-label" for="gridCheck">Check me out
      </label>
    </div>
   <div class="form-group col-md-12">
    
      <button type="submit" class="btn btn-primary">Sign in</button>
    
  </div>
  
</form>
</div>
</div>
</section>

<?php include('footer.php'); ?>