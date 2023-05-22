<!DOCTYPE HTML>  
<html>
<head>
    <title>BMI換算</title> 
    <style> 
        .error {color: #FF0000;} 
    </style>
    <?php include "bootstrap.php" ?>
</head>
<body>
    <div class="container">
        <h1 class="alert alert-warning">BMI換算 Website</h1>
        <?php include "header.php"; ?>
        <?php
        // define variables and set to empty values
        $cmErr = $kgErr = "";
        $cm = $kg = $BMI = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["cm"])) {
                $cmErr = "請輸入身高";
            } else {
                $cm = test_input($_POST["cm"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9' ]*$/",$cm)) {
                    $cmErr = "請輸入半形數字";
                }
            }

            if (empty($_POST["kg"])) {
                $kgErr = "請輸入體重";
            } else {
                $kg = test_input($_POST["kg"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9' ]*$/",$kg)) {
                    $kgErr = "請輸入半形數字";
                }
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>BMI計算</h2>
    <p><span class="error">* 必填欄位</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        身高：<input type="text" name="cm" value="<?php echo $cm;?>">公分
        <span class="error">* <?php echo $cmErr;?></span>
        <br><br>
        體重：<input type="text" name="kg" value="<?php echo $kg;?>">公斤
        <span class="error">* <?php echo $kgErr;?></span>
        <br><br>
        <input type="submit" value="提交">  
    </form>
    <br>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cm = $_POST["cm"];
            $kg = $_POST["kg"];
            $BMI = round(($kg/($cm*$cm))*10000,2);
            echo 'BMI=' . $BMI;
            echo "<br>";
            echo "您的BMI值";
            if ($BMI >=18.5 && $BMI <24) {
                echo "在標準之內";
            } else {
                echo "不在標準之內";
                echo "<br>";
                if($BMI < 18.5){
                    echo "小於標準";
                } else {
                    echo "超出標準";
                }
            }
        }
    ?><br>
</div>
<br><a input type="button" href="/ecwww111-2/">首頁</a>
<?php include "footer.php" ?>
</body>
</html>