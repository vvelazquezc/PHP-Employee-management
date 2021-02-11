<?php
session_start();

if (isset($_SESSION["id"])) {
  require("./library/sessionHelper.php");
} else {
  header("Refresh: 0; URL=../index.php?error=session");
  exit();
}

require("./library/employeeController.php");

require("../assets/html/header.html");
?>
<section id="form-wrapper">
  <div class="col-md-7 col-lg-8">
    <h4 class="mb-3">Billing address</h4>
    <form class="needs-validation" novalidate="">
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="uName" class="form-label">First name</label>
          <input type="text" class="form-control" id="uName" name="uName" placeholder="" value="<?= isset($employee) ? $employee['name'] : '' ?>" required="">
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="uLastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="uLastName" name="uLastName" placeholder="" value="<?= isset($employee) ? $employee['lastName'] : '' ?>" required="">
        </div>

        <div class="col-sm-6">
          <label for="uEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="uEmail" name="uEmail" value="<?= isset($employee) ? $employee['email'] : '' ?>" required="">
        </div>

        <div class="col-md-6">
          <label for="uGender" class="form-label">Gender</label><br>
          <select class="form-select" id="uGender" name="uGender" required>
            <option value="man" <?= isset($employee) ? ($employee['gender'] == "man" ? "selected" : "") : '' ?>>Man</option>
            <option value="woman" <?= isset($employee) ? ($employee['gender'] == "woman" ? "selected" : "") : '' ?>>Woman</option>
            <option value="nobinary" <?= isset($employee) ? ($employee['gender'] == "nobinary" ? "selected" : "") : '' ?>>No binary</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="uCity" class="form-label">City</label>
          <input type="text" class="form-control" id="uCity" name="uCity" value="<?= isset($employee) ? $employee['city'] : '' ?>">
        </div>

        <div class="col-md-6">
          <label for="uAddress" class="form-label">Street Address</label>
          <input type="text" class="form-control" id="uAddress" name="uAddress" required value="<?= isset($employee) ? $employee['streetAddress'] : '' ?>">
        </div>

        <div class="col-md-6">
          <label for="uState" class="form-label">State</label>
          <input type="text" class="form-control" id="uState" name="uState" value="<?= isset($employee) ? $employee['state'] : '' ?>">
        </div>

        <div class="col-md-6">
          <label for="uAge" class="form-label">Age</label>
          <input type="number" class="form-control" id="uAge" name="uAge" required value="<?= isset($employee) ? $employee['age'] : '' ?>">
        </div>

        <div class="col-md-6">
          <label for="uPostalCode" class="form-label">Postal Code</label>
          <input type="number" class="form-control" id="uPostalCode" name="uPostalCode" required value="<?= isset($employee) ? $employee['postalCode'] : '' ?>">
        </div>

        <div class="col-md-6">
          <label for="uPhoneNumber" class="form-label">Phone Number</label>
          <input type="number" class="form-control" id="uPhoneNumber" name="uPhoneNumber" required value="<?= isset($employee) ? $employee['phoneNumber'] : '' ?>">
        </div>
      </div>


      <button class="w-30 btn btn-primary" type="submit">Save</button>
      <a class="w-30 btn btn-primary" href="./dashboard.php">Go Back</a>
    </form>
  </div>
</section>

<?php
require("../assets/html/footer.html");
?>
</body>

</html>