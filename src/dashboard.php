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

<main id="main-wrapper"></main>

<?php require("../assets/html/footer.html"); ?>

<script src="../assets/js/index.js" type="module"></script>
</body>

</html>