<?php
require_once("../func.php");
$status = 1;
$msg = "出现未知错误，去问问神奇的海螺吧，去问问神奇的海螺吧";
$data = "";
$id = $_POST["id"];
$name = $_POST["name"];
$mysqli=new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME,$DB_PORT);
$mysqli->set_charset("utf8");
if ($mysqli->connect_errno){
    $msg = "数据库连接失败，请检查 config.php 配置文件";
}
else if (is_empty($id) ||is_empty($name)){
    $msg = "你是不是漏了什么？";
}
else if (utf8_length($name) > 10) {
    $msg = "插入这么长的东西的话，数据库酱会痛得受不了的哟~";
}
else{
    $stmt=$mysqli->prepare("SELECT * FROM site_type WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if (!($row = $result->fetch_assoc())){
        $msg = "tan90°_(:3」∠)_";
    }
    else{
        $stmt=$mysqli->prepare("SELECT * FROM site_type WHERE name = ?");
        $stmt->bind_param('s', $name);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()){
            $msg = "这个名字的网站分类已经有了哟~请不要尝试生产御坂妹妹";
        }
        else {
            $stmt=$mysqli->prepare("UPDATE site_type SET name = ? WHERE id = ?");
            $stmt->bind_param('si', $name, $id);
            $stmt->execute();
            $status = 0;
            $msg = "修改成功";
            $data = array(
                'id' => $id,
                'name' => $name);
        }
    }
}
mysqli_close($mysqli);
echo json_encode(array(
    'status' => $status,
    'msg' => $msg,
    'data' => $data
));