<?php

session_start();

if (isset($_SESSION["id"])) {
  require("./library/sessionHelper.php");
} else {
  header("Refresh: 0; URL=../index.php?error=session");
  exit();
}

require("../assets/html/header.html");

?>

<main id="main-wrapper">
<?= isset($message) ? "
<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
  <div class='toast-body'>
    $message
  </div>
</div>" : "" ?>
</main>

<?php require("../assets/html/footer.html"); ?>

<script src="../assets/js/index.js" type="module"></script>
</body>

</html>