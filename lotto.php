<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>樂透號碼預測</title>
</head>
<?php include "bootstrap.php" ?>
<body>
<div class="container">
  <h1 class="alert alert-warning">樂透號碼預測</h1>
  <?php include "header.php"; ?>
<?php echo "本期樂透特別號預測：" . rand(1, 50); ?>
<?php include "footer.php"; ?>
</body>
</html>
