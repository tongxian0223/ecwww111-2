<?php echo date("Y/m/d") ?>
<hr>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/ecwww111-2/">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="wordpress">WordPress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.stm.nkust.edu.tw">航運管理系</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rate.php">匯率換算</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        所有功能
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="bmi.php">BMI計算</a></li>
                        <li><a class="dropdown-item" href="lotto.php">樂透預測</a></li>
                        <li><a class="dropdown-item" href="bodyinfo.php">健康管理</a></li>
                        <li><a class="dropdown-item" href="js-examples/index.html">JS Pratice</a></li>
                        <li><a class="dropdown-item" href="js-examples/tv.php">TV選台器</a></li>
                        <li><a class="dropdown-item" href="tvlist.php">TV編輯</a></li>
                    </ul>
                </li>
                <li>   
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
