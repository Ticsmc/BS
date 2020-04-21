<?php
/**
 * Created by PhpStorm.
 * User: zhuhu
 * Date: 2020/3/24
 * Time: 8:42
 */
require_once("../config.php");
session_start();

//foreach ($a as  $_POST){
//    echo  $a;
//}
//echo  $DB_USER;
//echo $_GET["type"];
//echo file_get_contents("php://input");
$db = @new mysqli($DB_HOST, $DB_USER ,$DB_PASS , $DB_NAME);
if (mysqli_connect_errno()) {

    echo "<script>document.location.href = \"../404.html\";</script>";

}
switch ($_GET["type"]){

    case "login":
        login($db,$_POST["username"],$_POST["password"]);
        break;
    case  "register":
        register($db,$_POST["username"],$_POST["password"]);
        break;
    default:
        echo "<script>document.location.href = \"../404.html\";</script>";
}

function login($db,$username,$pwd){
    $sql = "select u_id from `user` WHERE u_name='$username' AND u_password=MD5('$pwd')";
    $rs = $db->query($sql);
//    echo $sql;
    if ($rs && $rs->num_rows > 0) {


        echo "<script>document.location.href = \"../cn/index.php\";</script>";

    } else {

        echo "<script>document.location.href = \"../index.html\";</script>";
    }
    setcookie ("asas", "yes", time()+60*20);
    $db->close();
}
function register($db,$username,$pwd){
    $sql = "INSERT INTO `user`(u_name,u_password)VALUES (\"$username\",MD5(\"$pwd\"));";
    if ($db->query($sql) === TRUE) {
        setcookie ("register", "yes", time()+20);
        echo "<script>document.location.href = \"../index.html\";</script>";
    } else {

        echo "<script>document.location.href = \"../404.html\";</script>";
    }

    $db->close();
}


//if ($type) { // 用户填写了数据才执行数据库操作
//
//
//    if (empty($username)) {
//
//        $errmsg = '数据输入不完整';
//
//    }
//
//
//    if (empty($errmsg)) {
//
//        $db = @new mysqli("127.0.0.1", "developer", "123456", "test");
//
//
//        if (mysqli_connect_errno()) {
//
//            $errmsg = "数据库连接失败!\n";
//
//        } else {
//            $sql = "SELECT * FROM t_user WHERE f_username='$username' AND f_password='$pwd'";
//            $rs = $db->query($sql);
//            if ($rs && $rs->num_rows > 0) {
//                $errmsg = "登录成功!";
//            } else {
//                $errmsg = "用户名或密码不正确，登录失败!";
//            }
//
//
//            $db->close();
//        }
//    }
//}
?>
