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
<?= isset($message) ? "
<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
  <div class='toast-body'>
    $message
  </div>
</div>" : "" ?>
<section id="form-wrapper">
  <div class="container overflow-hidden">
    <form class="needs-validation" action="./library/employeeController.php" method="POST">
    <div class="container_avatar">
      <?php require("./imageGallery.php"); ?>
    </div>
    <img src="<?= isset($employee) ? $employee['avatar'] : "../assets/images/no-user.png" ?>" class="img_profile" alt="avatar">
    <h4 class="mb-3"><?= isset($employee) ? $employee['name'] . "'s profile" : "New employee" ?></h4>
    <input type="hidden" name="_method" value="<?= isset($employee) ? "PUT" : "POST" ?>">
      <div class="row">
        <div class="col-sm-6 p-2">
          <label for="uName" class="form-label">First name</label>
          <input type="text" class="form-control" id="uName" name="name" placeholder="" value="<?= isset($employee) ? $employee['name'] : '' ?>" required="">
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6 p-2">
          <label for="uLastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="uLastName" name="lastName" placeholder="" value="<?= isset($employee) ? $employee['lastName'] : '' ?>" required="">
        </div>

        <div class="col-sm-6 p-2">
          <label for="uEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="uEmail" name="email" value="<?= isset($employee) ? $employee['email'] : '' ?>" required="">

          <label for="uGender" class="form-label">Gender</label><br>
          <select class="form-control" id="uGender" name="gender" required>
            <option value="man" <?= isset($employee) ? ($employee['gender'] == "man" ? "selected" : "") : '' ?>>Man</option>
            <option value="woman" <?= isset($employee) ? ($employee['gender'] == "woman" ? "selected" : "") : '' ?>>Woman</option>
            <option value="nobinary" <?= isset($employee) ? ($employee['gender'] == "nobinary" ? "selected" : "") : '' ?>>No binary</option>
          </select>
        </div>

        <div class="col-md-6 p-2">
          <label for="uCity" class="form-label">City</label>
          <input type="text" class="form-control" id="uCity" name="city" value="<?= isset($employee) ? $employee['city'] : '' ?>">
        </div>

        <div class="col-md-6 p-2">
          <label for="uAddress" class="form-label">Street Address</label>
          <input type="text" class="form-control" id="uAddress" name="streetAddress" required value="<?= isset($employee) ? $employee['streetAddress'] : '' ?>">
        </div>

        <div class="col-md-6 p-2">
          <label for="uState" class="form-label">State</label>
          <input type="text" class="form-control" id="uState" name="state" value="<?= isset($employee) ? $employee['state'] : '' ?>">
        </div>

        <div class="col-md-6 p-2">
          <label for="uAge" class="form-label">Age</label>
          <input type="number" class="form-control" id="uAge" name="age" required value="<?= isset($employee) ? $employee['age'] : '' ?>">
        </div>

        <div class="col-md-6 p-2">
          <label for="uPC" class="form-label">Postal Code</label>
          <input type="number" class="form-control" id="uPC" name="PC" required value="<?= isset($employee) ? $employee['PC'] : '' ?>">
        </div>

        <div class="col-md-6 p-2">
          <label for="uPhoneNumber" class="form-label">Phone Number</label>
          <input type="number" class="form-control" id="uPhoneNumber" name="phoneNumber" required value="<?= isset($employee) ? $employee['phoneNumber'] : '' ?>">
        </div>
      </div>
      <input type="hidden" name="id" value="<?= isset($employee) ? $employee['id'] : '' ?>" >

      <input type="submit" class="w-30 btn btn-dark mt-5 mr-3" value="<?= isset($employee) ? 'Update' : 'Create' ?>" name="employeePage">
      <a class="w-30 btn btn-dark mt-5" href="./dashboard.php">Go Back</a>
    </form>
  </div>
</section>

<?php
require("../assets/html/footer.html");
?>
</body>

</html>