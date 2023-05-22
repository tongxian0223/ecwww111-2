<html>
<head>
<title>匯率換算</title>
</head>
<body>
<?php include "bootstrap.php" ?> 

<div class="container">
  <h1 class="alert alert-warning">匯率換算</h1>
  <?php include "header.php"; ?>

<form action="rate.php" method="post">
    新台幣：<input type="text" size="10" name="ntd">元
    <input type="submit" value="轉換">
</form>

<?php
    $NTD = $_POST["ntd"] ?? 10000;
    $USD = $NTD * 0.033;
    echo "新台幣" . $NTD . "元換成美金是" . $USD . "元";
?>

<?php include "footer.php" ?>
</body>
</html>
