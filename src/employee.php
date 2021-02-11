<?php
require ('./library/employeeManager.php');

session_start();

if (isset($_SESSION["id"])){
  require("./library/sessionHelper.php");
}else{
  header("Refresh: 0; URL=../index.php?error=session");
  exit();
}

  require("../assets/html/header.html");
  print_r(getEmployee($_GET['employeeId'])['name']);
?>
<section id="form-wrapper">
  <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="name" class="form-label">First name</label>
              <input type="text" class="form-control" id="name" placeholder="" value="<?= (isset($_GET['employeeId'])) ? (getEmployee($_GET['employeeId'])['name']) : ('') ?>" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-md-6">
              <label for="gender" class="form-label">Gender</label><br>
              <select class="form-select" id="gender" required="">
                <option value="">man</option>
                <option>Woman</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" placeholder="San Jone">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-md-6">
              <label for="address" class="form-label">Street Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-6">
              <label for="address2" class="form-label">State</label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-6">
              <label for="age" class="form-label">Age</label>
              <input type="number" class="form-control" id="age" placeholder="" required="">
            </div>

            <div class="col-md-6">
              <label for="postalCode" class="form-label">Postal Code</label>
              <input type="number" class="form-control" id="postalCode" placeholder="" required="">
            </div>

            <div class="col-md-6">
              <label for="phoneNumber" class="form-label">Phone Number</label>
              <input type="number" class="form-control" id="phoneNumber" placeholder="" required="">
            </div>
          </div>


          <button class="w-30 btn btn-primary" type="submit">Save</button>
          <button class="w-30 btn btn-primary">Go Back</button>
        </form>
      </div>
  </section>

  <?php
  require("../assets/html/footer.html");
  ?>
  </body>
  </html>