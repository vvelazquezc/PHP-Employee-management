<?php

session_start();

if (isset($_SESSION["id"])) {
  require("./library/sessionHelper.php");
} else {
  header("Refresh: 0; URL=../index.php?error=session");
  exit();
}

if (isset($_GET['success'])) {
  $message = $_GET['success'];
}

require("../assets/html/header.html");

?>
<section class="toast-msg">
  <?= isset($message) ? "
<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
  <div class='toast-body'>
    $message
  </div>
</div>" : "" ?>
</section>

<main id="main-wrapper">
</main>

<?php require("../assets/html/footer.html"); ?>


<script src="../assets/js/index.js" type="module"></script>
<script>
  $(".toast").toast({
    delay: 3000
  });
  $(".toast").toast('show');
</script>
</body>

</html>