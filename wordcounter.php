<!DOCTYPE html>
<html>
<head>
<title>匯率換算</title>
</head>
<body>
 
<h1>匯率換算</h1>
<?php include "header.php"; ?>

<form action="wrodcounter.php" method=POST>
    欲測：<input type=text size=99 name=word>元
    <input type=submit value="轉換">
</form>

<?php

str_word_count($word)