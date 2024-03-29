<?php
session_start();
include "../database.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <script src="main.js"></script>
    <?php include "../bootstrap.php" ?>
</head>

<body>
    <div class="container">
        <h2 class="alert alert-warning">BMI換算 Website</h2>
        <hr>
        <?php include "header.php"; ?>
        <?php
        $sql = "SELECT * FROM tvinfo;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<select id="tvselect">';
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" .
                    $row["vid"] . "'>" .
                    $row["title"] . "</option>";
            }
            echo "</select>";
        }
        ?>
        <button onclick="changeTV()">切換</button>
        <br><br>
        <div align="center">
            <table width="800">
                <tr>
                    <td align="center">
                        <h2 id="tvtitle">請選擇電視台</h2>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <div id="tvdisplay">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/m_dhMSvUCIc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                            </iframe>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php include "../footer.php" ?>
</body>

</html>
