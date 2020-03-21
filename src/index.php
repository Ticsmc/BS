<?php
require_once("func.php");
$mysqli=new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME,$DB_PORT);
$mysqli->set_charset("utf8");?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <title><?php echo $TITLE?></title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link href="css/materialize.min.css" rel="stylesheet" type="text/css">
    <script src="js/materialize.min.js"></script>
    <link href="css/jquery.contextMenu.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.contextMenu.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        #search-bar{
            margin:20px auto;
            background-color: rgba(255,255,255,0.65);
            width:60%;
            border-radius:3px;
        }
        #tab-nav{
            min-height:450px; height:auto!important; height:450px;
            margin:20px auto;
            background-color: rgba(255,255,255,0.55);
            width:80%;
            position: relative;
            top: 20px;
            border-radius:3px;
            padding-bottom: 10px;
        }
        .website{
            background-color: rgba(255,255,255,0.3);
            padding: 5px;
            border-radius:5px;
        }
        .tabs .indicator {
            background-color: #26A69A;
        }
    </style>
</head>
<body>
<div id="search-bar" ><H1 align="center"  style="color:#26A69A">我的毕业设计</H1></div>
<div id="tab-nav" class="z-depth-1">
    <ul class="tabs transparent">
        <div id="site-types">
            <?php
            $stmt=$mysqli->prepare("SELECT * FROM site_type ORDER BY st_id");
            $stmt->execute();
            $result = $stmt->get_result();
            $site_type_ids = array();
            while ($row = $result->fetch_assoc()) {
                array_push($site_type_ids, $row['st_id']);
                ?>
                <li data-id="<?php echo $row['st_id'];?>" class="tab"><a href="#<?php echo $row['st_id']; ?>"  class="teal-text" style="text-transform: none !important"><?php echo $row['st_name']; ?></a></li>
            <?php } ?>
        </div>
        <li class="indicator teal" style="right: 186px; left: 68px;"></li>
    </ul>
    <?php
    for ($i = 0; $i < count($site_type_ids); $i++){ ?>
        <div id="<?php echo $site_type_ids[$i] ?>" class="row website-row" style="min-height:450px; height:auto!important; height:450px;">
            <?php
            $stmt=$mysqli->prepare("SELECT * from site WHERE s_type_id = ?");
            $stmt->bind_param('i', $site_type_ids[$i]);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {?>
                <div class="website-div tooltipped col s6 m4 l3" style="margin-top: 20px; display: block;" data-id="<?php echo $row['s_id']; ?>" data-position="right" data-tooltip="<?php echo $row['s_name']; ?>">
                    <a href="<?php echo $row['s_url'] ?>" target="_blank">

                        <div class="website hoverable z-depth-2" style="position:relative;">

                            <p class="teal-text center truncate" style="margin-left: 16px"><?php echo $row['s_name']?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    <?php mysqli_close($mysqli);?>
</div>
</body>
</html>
