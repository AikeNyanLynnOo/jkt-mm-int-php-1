<?php
session_start();
function encrypt_decrypt($action, $string) {
    /* =================================================
    * ENCRYPTION-DECRYPTION
    * =================================================
    * ENCRYPTION: encrypt_decrypt('encrypt', $string);
    * DECRYPTION: encrypt_decrypt('decrypt', $string) ;
    */
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'JKT-2019-20IT85-MM-JP';
    $secret_iv = 'JKT-2019-serV1ce-MM-JP';
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'encrypt') {
        $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
    } else {
        if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
    }
    return $output;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.jpg" />
    <title>JKT Myanmar International - JAPANESE SCHOOL</title>
    <meta name="description" content="We offer entry-level to business-level Japanese and we also offer conversation courses for those who wish to go to Japan for study or work purposes, or to work in a local Japanese company." />
    <meta name="keywords" content="jkt myanmar, jkt, JKT mm, JKT mm international, Business Counseling, IT, training, language school, Overseas Employment, JKT Myanmar International Co., Ltd., JKT Myanmar International" />
    <meta name="author" content="JKT IT Team" />
    <meta name="title" content="JKT Myanmar International Co., Ltd." />
    <meta name="copyright" content="JKT Myanmar International" />
    <meta name="robots" content="japanese school, follow" />
    <meta name="googlebot" content="jkt myanmar, jkt, JKT mm, JKT mm international, Business Counseling, IT, training, language school, Overseas Employment" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <meta name="revisit-after" content="1 days" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg gray-dark float-panel" data-top="0" data-scroll="300">
        <div class="container-fluid mynav">
            <a href="index.html" class="navbar-brand">
                <img src="./assets/images/logo.jpg" alt="" height="50px" width="50px" />
                <span style="font-weight: bolder; font-size: larger; color: #029eff">JKT</span>
                Myanmar International
            </a>
            <a href="index.html" class="small-brand">
                <img src="./assets/images/logo.jpg" alt="" height="50px" width="50px" />
                <span style="font-weight: bolder; font-size: larger; color: #029eff">JKT</span>
                Myanmar International
            </a>
            <a href="index.html" class="icon-brand">
                <img src="./assets/images/logo.jpg" alt="" height="50px" width="50px" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon toggler-icon-color"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto text-sm-start">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active"> HOME </a>
                    </li>
                    <li class="nav-item">
                        <a href="./about.html" class="nav-link active"> ABOUT </a>
                    </li>
                    <li class="nav-item">
                        <a href="./activities.html" class="nav-link active">
                            ACTIVITIES
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="./services.html" class="nav-link active" id="serviceNavbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            SERVICES <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="serviceNavbarDropdown">
                            <a class="dropdown-item" href="./overseas.html">OVERSEAS EMPLOYMENT</a>
                            <a class="dropdown-item" href="./business.html">BUSINESS CONSULTANT</a>
                            <!-- <a class="dropdown-item" href="./announcement.html">IT SERVICES</a> -->
                            <a class="dropdown-item" href="./announcement.html">TRAVEL AND TOURS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="./trainings.html" class="nav-link" id="trainingNavbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            TRAININGS <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="trainingNavbarDropdown">
                            <a class="dropdown-item" href="./jp-school.php">JAPANESE LANGUAGE SCHOOL</a>
                            <a class="dropdown-item" href="./digital-institute.php">DIGITAL INSTITUTE</a>
                            <a class="dropdown-item" href="./announcement.html">HR TRAINING</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.html" class="nav-link active"> CONTACT </a>
                    </li>
                    <li class="lang">
                        <div class="btn-group" role="group" aria-label="First group">
                            <a href="./school-detail.php"><button type="button" class="btn btn1" style="background-color: rgba(91, 175, 231, 0.5)">
                                    <img src="./assets/images/icon/ukFlag.png" height="20px" width="25px" /></button></a>
                            <a href="./mm/school-detail.php"><button type="button" class="btn btn2">
                                    <img src="./assets/images/icon/mmFlag.svg" height="20px" width="25px" /></button></a>
                            <a href="./jp/school-detail.php"><button type="button" class="btn btn3">
                                    <img src="./assets/images/icon/japanFlag.jpg" height="20px" width="25px" /></button></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn-group lang-xl" role="group" aria-label="First group">
                <a href="./school-detail.php"><button type="button" class="btn btn1" style="background-color: rgba(91, 175, 231, 0.5)">
                        <img src="./assets/images/icon/ukFlag.png" height="20px" width="25px" /></button></a>
                <a href="./mm/school-detail.php"><button type="button" class="btn btn2">
                        <img src="./assets/images/icon/mmFlag.svg" height="20px" width="25px" /></button></a>
                <a href="./jp/school-detail.php"><button type="button" class="btn btn3">
                        <img src="./assets/images/icon/japanFlag.jpg" height="20px" width="25px" /></button></a>
            </div>
        </div>
    </nav>

    <!-- JP School header start -->
    <section>
        <div class="header">
            <h3>Training Schools</h3>
            <div class="bg-cover"></div>
            <img src="./assets/images/cover/cover.jpg" alt="jpschool-cover" />
        </div>
    </section>
    <!-- JP School header end -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="./trainings.html">Trainings</a></li>
            <li class="breadcrumb-item"><a href="./school-detail.php" id="some-sch">Training Schools</a></li>
            <li class="breadcrumb-item active" aria-current="page">Schedule Detail</li>
        </ol>
    </nav>

    <!-- School Schedule Blog start -->
    <section>
        <div class="container schedule-blog mt-5">
            <div class="row">
                <div class="col-12 col-lg-6 mt-2 ">
                    <h1 class="pb-3">Class Schedule</h1>
                </div>
                <div class="col-12 col-lg-6 text-lg-right text-left">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <?php
                        if (isset($_SESSION['courseId'])) {
                            unset($_SESSION['courseId']);
                        }
                        include_once("../jktmyanmarint.admin.com/confs/config.php");

                        ?>
                        <select name="categories" class="class-filter">
                            <option value="" selected>Filter By Categories</option>
                            <?php
                            if (isset($_POST['filterSubmit'])) {
                                $selected_cat = $_POST['categories'];
                                $select_cat = "SELECT * FROM categories";
                                $cat_result = mysqli_query($conn, $select_cat);
                                while ($row1 = mysqli_fetch_array($cat_result)) {
                            ?>
                                    <option name="categories" value="<?php echo $row1['category_id'] ?>" <?php if ($row1['category_id'] == $selected_cat) echo "selected" ?>><?php echo $row1['title'] ?></option>
                                <?php }
                            } else {
                                $select_cat = "SELECT * FROM categories";
                                $cat_result = mysqli_query($conn, $select_cat);
                                while ($row2 = mysqli_fetch_array($cat_result)) {
                                ?>
                                    <option name="categories" value="<?php echo $row2['category_id'] ?>"><?php echo $row2['title'] ?></option>
                            <?php }
                            } ?>
                        </select>
                        <input type="submit" name="filterSubmit" value="Filter" class="filter-button" />
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 schedule-blog-info">
                    <div class="schedule-table-block">
                        <table class="schedule-table">
                            <thead>
                                <tr>
                                    <th scope="col">Class</th>
                                    <th scope="col" style="width: 15em">Days & Time</th>
                                    <th scope="col">Fees (Kyats)</th>
                                    <th scope="col">Start Date & <br> Duration</th>
                                    <!-- <th scope="col"></th> -->
                                    <th scope="col" style="width: 6em">Detail</th>
                                    <th scope="col" style="width: 6em">Enroll</th>
                                </tr>
                            </thead>
                            <?php
                            if (isset($_POST['filterSubmit'])) {
                                $get_category =  $_POST['categories'];
                                if ($get_category === '') {
                            ?>
                                    <tbody>
                                        <?php
                                        $schedule = "SELECT course_id, c.title AS course_title, cty.title AS category_title,
                                                    t.title AS type_title, level_or_sub, fee, instructor,
                                                    services, discount_percent, start_date, duration, sections, note
                                                    FROM courses c, categories cty, types t WHERE c.category_id = cty.category_id 
                                                    AND c.type_id = t.type_id ORDER BY c.created_at";
                                        $schedule_result = mysqli_query($conn, $schedule);
                                        while ($row = mysqli_fetch_array($schedule_result)) {
                                            $_SESSION['courseId'] = $row['course_id'];
                                        ?>
                                            <tr id="<?php echo $row["course_id"]; ?>">
                                                <td style="display: none">
                                                    <span id="category_title" class="row-data"><?php echo $row["category_title"] ?></span>
                                                    <span id="type_title" class="row-data"><?php echo $row["type_title"] ?></span>
                                                    <span id="course_level" class="row-data"><?php echo $row["level_or_sub"] ?></span>
                                                    <span id="instructor" class="row-data"><?php echo $row["instructor"] ?></span>
                                                    <span id="services" class="row-data"><?php echo $row["services"] ?></span>
                                                    <span id="discount_percent" class="row-data"><?php echo $row["discount_percent"] ?></span>
                                                    <span id="price" class="row-data"><?php echo $row["fee"]; ?></span>
                                                    <span id="note" class="row-data"><?php echo $row["note"]; ?></span>
                                                </td>
                                                <td data-label="Class" scope="row">
                                                    <?php echo $row["category_title"] . " "; ?>
                                                    <span id="course_title" class="row-data"><?php echo $row["course_title"]; ?></span>
                                                    <span><?php echo empty($row["level_or_sub"]) ? '' : '- ' . $row["level_or_sub"]; ?></span>
                                                    <?php echo " (" . $row["type_title"] . ")"; ?>
                                                    <?php
                                                    // echo $row['start_date'] < date("Y-m-d") ? "<br><br><span class='in-progress-badges'>In Progess</span>" : "";
                                                    ?>
                                                </td>
                                                <td data-label="Days & Time" class="text-right text-lg-left">
                                                    <?php
                                                    // var_dump($row["sections"]);
                                                    // var_dump($row["sections"][0]); 
                                                    $sections = json_decode($row["sections"], true);
                                                    for ($i = 0; $i < count($sections); $i++) {
                                                        // var_dump($sections[$i]["days"]);
                                                        echo "<div class='sections'>";
                                                        for ($j = 0; $j < count($sections[$i]["days"]); $j++) {
                                                    ?>
                                                            <span id="days" class="days schedule-days-badges <?php
                                                                                                                switch ($sections[$i]["days"][$j]) {
                                                                                                                    case "Sa":
                                                                                                                    case "Su":
                                                                                                                        echo "weekend";
                                                                                                                        break;
                                                                                                                    default:
                                                                                                                        echo "weekday";
                                                                                                                        break;
                                                                                                                }
                                                                                                                ?>"><?php
                                                                                                                    echo $sections[$i]["days"][$j];
                                                                                                                    echo "</span>";
                                                                                                                }
                                                                                                                    ?>
                                                            <span class="section-hour schedule-time-badges" id="section_hour">
                                                                <?php
                                                                echo $sections[$i]["sectionHour"];
                                                                ?>
                                                            </span><br>
                                                        <?php }
                                                    echo "</div>";
                                                        ?>
                                                </td>
                                                <td data-label="Fees (Kyats)">
                                                    <span id="price"><?php echo number_format($row["fee"]) ?></span>
                                                </td>
                                                <td data-label="Start Date & Duration">
                                                    <?php if (!empty($row["start_date"])) { ?>
                                                        <span id="start_date" class="row-data"><?php echo $row["start_date"] ?></span><br><br>
                                                    <?php } else { ?>
                                                        <span id="start_date" class="row-data"></span>
                                                    <?php } ?>
                                                    <span id="duration" class="row-data">
                                                        <?php echo $row["duration"] . " Months"; ?>
                                                    </span>
                                                </td>
                                                <td data-label="Detail">
                                                    <button class="detail" data-toggle="modal" data-target="#detailModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </td>
                                                <td data-label="Enroll">
                                                    <?php $encryptedCourseId = encrypt_decrypt("encrypt", $row['course_id']) ?>
                                                    <span class="hidden row-data"><?php echo $encryptedCourseId; ?></span>
                                                        <a href="./classEnroll.php?courseId=<?php echo $encryptedCourseId; ?>"><button class="enroll">
                                                            <img src="./assets/images/icon/contract.png" alt="" width="20" height="20" />
                                                        </button></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                <?php
                                } else {
                                    if (isset($_SESSION['selected_category'])) {
                                        unset($_SESSION['selected_category']);
                                    }
                                    $schedule = "SELECT course_id, c.title AS course_title, cty.title AS category_title,
                                                t.title AS type_title, level_or_sub, fee, instructor,
                                                services, discount_percent, start_date, duration, sections, note
                                                FROM courses c, categories cty, types t WHERE c.category_id = cty.category_id 
                                                AND c.type_id = t.type_id AND c.category_id = $get_category ORDER BY c.created_at";
                                    $schedule_result = mysqli_query($conn, $schedule);
                                ?>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($schedule_result)) {
                                            $_SESSION['courseId'] = $row['course_id'];
                                        ?>
                                            <tr id="<?php echo $row["course_id"]; ?>">
                                                <td style="display: none">
                                                    <span id="category_title" class="row-data"><?php echo $row["category_title"] ?></span>
                                                    <span id="type_title" class="row-data"><?php echo $row["type_title"] ?></span>
                                                    <span id="course_level" class="row-data"><?php echo $row["level_or_sub"] ?></span>
                                                    <span id="instructor" class="row-data"><?php echo $row["instructor"] ?></span>
                                                    <span id="services" class="row-data"><?php echo $row["services"] ?></span>
                                                    <span id="discount_percent" class="row-data"><?php echo $row["discount_percent"] ?></span>
                                                    <span id="price" class="row-data"><?php echo $row["fee"]; ?></span>
                                                    <span id="note" class="row-data"><?php echo $row["note"]; ?></span>
                                                </td>
                                                <td data-label="Class" scope="row">
                                                    <?php echo $row["category_title"] . " "; ?>
                                                    <span id="course_title" class="row-data"><?php echo $row["course_title"]; ?></span>
                                                    <span><?php echo empty($row["level_or_sub"]) ? '' : '- ' . $row["level_or_sub"]; ?></span>
                                                    <?php echo " (" . $row["type_title"] . ")"; ?>
                                                    <?php
                                                    // echo $row['start_date'] < date("Y-m-d") ? "<br><br><span class='in-progress-badges'>In Progess</span>" : "";
                                                    ?>
                                                </td>
                                                <td data-label="Days & Time" class="text-right text-lg-left">
                                                    <?php
                                                    // var_dump($row["sections"]);
                                                    // var_dump($row["sections"][0]); 
                                                    $sections = json_decode($row["sections"], true);
                                                    for ($i = 0; $i < count($sections); $i++) {
                                                        // var_dump($sections[$i]["days"]);
                                                        echo "<div class='sections'>";
                                                        for ($j = 0; $j < count($sections[$i]["days"]); $j++) {
                                                    ?>
                                                            <span id="days" class="days schedule-days-badges <?php
                                                                                                                switch ($sections[$i]["days"][$j]) {
                                                                                                                    case "Sa":
                                                                                                                    case "Su":
                                                                                                                        echo "weekend";
                                                                                                                        break;
                                                                                                                    default:
                                                                                                                        echo "weekday";
                                                                                                                        break;
                                                                                                                }
                                                                                                                ?>"><?php
                                                                                                                    echo $sections[$i]["days"][$j];
                                                                                                                    echo "</span>";
                                                                                                                }
                                                                                                                    ?>
                                                            <span class="section-hour schedule-time-badges" id="section_hour">
                                                                <?php
                                                                echo $sections[$i]["sectionHour"];
                                                                ?>
                                                            </span><br>
                                                        <?php }
                                                    echo "</div>";
                                                        ?>
                                                </td>
                                                <td data-label="Fees (Kyats)">
                                                    <span id="price"><?php echo number_format($row["fee"]) ?></span>
                                                </td>
                                                <td data-label="Start Date & Duration">
                                                    <?php if (!empty($row["start_date"])) { ?>
                                                        <span id="start_date" class="row-data"><?php echo $row["start_date"] ?></span><br><br>
                                                    <?php } else { ?>
                                                        <span id="start_date" class="row-data"></span>
                                                    <?php } ?>
                                                    <span id="duration" class="row-data">
                                                        <?php echo $row["duration"] . " Months"; ?>
                                                    </span>
                                                </td>
                                                <td data-label="Detail">
                                                    <button class="detail" data-toggle="modal" data-target="#detailModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </td>
                                                <td data-label="Enroll">
                                                    <?php $encryptedCourseId = encrypt_decrypt("encrypt", $row['course_id']) ?>
                                                    <span class="hidden row-data"><?php echo $encryptedCourseId; ?></span>
                                                        <a href="./classEnroll.php?courseId=<?php echo $encryptedCourseId; ?>"><button class="enroll">
                                                            <img src="./assets/images/icon/contract.png" alt="" width="20" height="20" />
                                                        </button></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                <?php
                                }
                            } else {
                                ?>
                                <tbody>
                                    <?php
                                    $schedule = "SELECT course_id, c.title AS course_title, cty.title AS category_title,
                                                t.title AS type_title, level_or_sub, fee, instructor,
                                                services, discount_percent, start_date, duration, sections, note
                                                FROM courses c, categories cty, types t WHERE c.category_id = cty.category_id 
                                                AND c.type_id = t.type_id ORDER BY c.created_at";

                                    $schedule_result = mysqli_query($conn, $schedule);
                                    while ($row = mysqli_fetch_array($schedule_result)) {
                                        $_SESSION['courseId'] = $row['course_id'];
                                    ?>
                                        <tr id="<?php echo $row["course_id"]; ?>">
                                            <td style="display: none">
                                                <span id="category_title" class="row-data"><?php echo $row["category_title"] ?></span>
                                                <span id="type_title" class="row-data"><?php echo $row["type_title"] ?></span>
                                                <span id="course_level" class="row-data"><?php echo $row["level_or_sub"] ?></span>
                                                <span id="instructor" class="row-data"><?php echo $row["instructor"] ?></span>
                                                <span id="services" class="row-data"><?php echo $row["services"] ?></span>
                                                <span id="discount_percent" class="row-data"><?php echo $row["discount_percent"] ?></span>
                                                <span id="price" class="row-data"><?php echo $row["fee"]; ?></span>
                                                <span id="note" class="row-data"><?php echo $row["note"]; ?></span>
                                            </td>
                                            <td data-label="Class" scope="row">
                                                <?php echo $row["category_title"] . " "; ?>
                                                <span id="course_title" class="row-data"><?php echo $row["course_title"]; ?></span>
                                                <span><?php echo empty($row["level_or_sub"]) ? '' : '- ' . $row["level_or_sub"]; ?></span>
                                                <?php echo " (" . $row["type_title"] . ")"; ?>
                                                <?php
                                                // echo $row['start_date'] < date("Y-m-d") ? "<br><br><span class='in-progress-badges'>In Progess</span>" : "";
                                                ?>
                                            </td>
                                            <td data-label="Days & Time" class="text-right text-lg-left">
                                                <?php
                                                // var_dump($row["sections"]);
                                                // var_dump($row["sections"][0]); 
                                                $sections = json_decode($row["sections"], true);
                                                for ($i = 0; $i < count($sections); $i++) {
                                                    // var_dump($sections[$i]["days"]);
                                                    echo "<div class='sections'>";
                                                    for ($j = 0; $j < count($sections[$i]["days"]); $j++) {
                                                ?>
                                                        <span id="days" class="days schedule-days-badges <?php
                                                                                                            switch ($sections[$i]["days"][$j]) {
                                                                                                                case "Sa":
                                                                                                                case "Su":
                                                                                                                    echo "weekend";
                                                                                                                    break;
                                                                                                                default:
                                                                                                                    echo "weekday";
                                                                                                                    break;
                                                                                                            }
                                                                                                            ?>"><?php
                                                                                echo $sections[$i]["days"][$j];
                                                                                echo "</span>";
                                                                            }
                                                                                ?>
                                                        <span class="section-hour schedule-time-badges" id="section_hour">
                                                            <?php
                                                            echo $sections[$i]["sectionHour"];
                                                            ?>
                                                        </span><br>
                                                    <?php }
                                                echo "</div>";
                                                    ?>
                                            </td>
                                            <td data-label="Fees (Kyats)">
                                                <span id="price"><?php echo number_format($row["fee"]) ?></span>
                                            </td>
                                            <td data-label="Start Date & Duration">
                                                <?php if (!empty($row["start_date"])) { ?>
                                                    <span id="start_date" class="row-data"><?php echo $row["start_date"] ?></span><br><br>
                                                <?php } else { ?>
                                                    <span id="start_date" class="row-data"></span>
                                                <?php } ?>
                                                <span id="duration" class="row-data">
                                                    <?php echo $row["duration"] . " Months"; ?>
                                                </span>
                                            </td>
                                            <td data-label="Detail">
                                                <button class="detail" data-toggle="modal" data-target="#detailModal">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                            <td data-label="Enroll">
                                                <?php $encryptedCourseId = encrypt_decrypt("encrypt", $row['course_id']) ?>
                                                <span class="hidden row-data"><?php echo $encryptedCourseId; ?></span>
                                                    <a href="./classEnroll.php?courseId=<?php echo $encryptedCourseId; ?>"><button class="enroll">
                                                        <img src="./assets/images/icon/contract.png" alt="" width="20" height="20" />
                                                    </button></a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="hr" />
        </div>
    </section>
    <!-- School Schedule Blog end -->

    <!-- The Detail Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLongTitle" aria-hidden="true">
        <div class="modal-dialog detail-modal" role="document">
            <div class="modal-content detail-modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title detail-modal-title">Class Detail Information</h4>
                    <button class="btn-close" data-dismiss="modal">
                        <i class='fas fa-times' style='font-size:24px; color: grey'></i>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table class="detail-schedule">
                        <tr>
                            <td class="schedule-modal-label">Class :</td>
                            <td>
                                <span id="modal_category_title"></span>
                                <span id="modal_course_title"></span>
                                <span id="modal_level"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="schedule-modal-label">Type :</td>
                            <td>
                                <span id="modal_type_title"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="schedule-modal-label">Days & Time :</td>
                            <td id="modal_days_time" class="modal_days_time"></td>
                        </tr>
                        <tr>
                            <td class="schedule-modal-label">Fees (Kyats) :</td>
                            <td>
                                <span id="modal_fees"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="schedule-modal-label">Duration :</td>
                            <td>
                                <span id="modal_duration"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="schedule-modal-label">Start Date :</td>
                            <td>
                                <span id="modal_start_date"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="schedule-modal-label">Instructor :</td>
                            <td>
                                <span id="modal_instructor"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="schedule-modal-label">Services :</td>
                            <td>
                                <span id="modal_services"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="schedule-modal-label">Description :</td>
                            <td>
                                <span id="modal_description"></span>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn-cancel" data-dismiss="modal">Cancel</button>
                    <a id="modalEnroll"><button type="button" class="btn-submit" id="enroll_class">Enroll</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- to top button -->
    <button class="to-top-btn" id="toTop">
        <i class="fa fa-arrow-up"></i>
    </button>
    <!-- end to top button -->

    <!-- footer start -->
    <footer class="footer">
        <div class="left">
            <a href="index.html"><span>JKT</span> Myanmar International </a>
            <div>
                <a href="https://www.facebook.com/JKT-Japanese-Language-School-100339937999010/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <div class="right">
            <div class="footer-flex">
                <div>
                    <header>Join us for your business</header>
                    <p>We're here to give you a hand whenever you need</p>
                </div>
                <a href="./contact.html"><button id="btn-contact" class="primary-btn">CONTACT US</button></a>
            </div>
            <div class="footer-flex-nav">
                <div class="nav">
                    <header>Services</header>
                    <ul class="footer-list" id="first">
                        <li>
                            <span><a href="./overseas.html">Oversea Employment Services (only Japan)</a></span>
                        </li>
                        <li>
                            <span><a href="./business.html">Business Consultant Service</a></span>
                        </li>
                        <!-- <li>
                            <span><a href="./announcement.html">IT Services</a></span>
                        </li> -->
                        <li>
                            <span><a href="./announcement.html">Travel and Tours</a></span>
                        </li>
                    </ul>
                </div>
                <div class="nav">
                    <header>Training</header>
                    <ul class="footer-list" id="second">
                        <li>
                            <span><a href="./jp-school.php">Japanese Language School</a></span>
                        </li>
                        <li>
                            <span><a href="./digital-institute.php">Digital Institute</a></span>
                        </li>
                        <li>
                            <span><a href="./announcement.html">HR Training</a></span>
                        </li>
                    </ul>
                </div>
                <div class="nav">
                    <header>Contact</header>
                    <ul class="footer-list" id="last">
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+959269564339">+959 269 564 339</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+959770411708">+959 770 411 708</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>No.86, 3A, Shinsawpu Road,
                            Near Myaynigone Citymart, Sanchaung Township, Yangon, Myanmar
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:jkt.mm.int@gmail.com">jkt.mm.int@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-copyright">
        Copyright © 2021 | JKT Myanmar International Co., Ltd.
    </div>
    <!-- script -->
    <script src="./assets/js/jquery-3.6.0.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/float-panel.js"></script>
    <script src="./assets/js/comment.js"></script>
    <script src="./assets/js/style.js"></script>
    <script src="./assets/js/jp-class-schedule.js"></script>
    <script src="./assets/js/school-detail.js"></script>
</body>

</html>