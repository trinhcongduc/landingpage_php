<?php
require_once "./lib/database/class_database.php";
require_once "./config/index.php";
require_once "./inc/controller/send_mail.php";
//include "./inc/test_senMail.php";

if ($_POST["submit"]) {
    $DB = new database($hostname, $userhost, $passhost, $dbname);
    $DB->connect();
    $html = '<h3>Thông tin người dùng </h3><br/>';

    foreach ($_POST as $key => $value) {
        if ($key !== "submit") {
            $fields[] = "`" . $key . "`";
            $datas[] = "'" . $value . "'";
            $html .= ucfirst(str_replace('_',' ',$key)) . " : " . $value . "<br/>";
        }
    }
    $date = new DateTime();
    $fields[] = "created_date";
    $datas[] = "'".$date->format('Y-m-d')."'";

    $html .=  "Ngày đăng ký : " . $date->format('d-m-Y') . "<br/>";
    $fields = implode(',', $fields);
    $values = implode(',', $datas);
    $sql = " insert into `$tablename` ( $fields) values ($values)";
    $DB->query($sql);
    if (!$DB->getResult()) {
        echo "<script type='text/javascript'>";
        echo "window.location.href='$base_url'";
        echo "</script>";
    }
    sendMail( $email_config,$html);
    $DB->disconnect();
} else {

    echo "<script type='text/javascript'>";
    echo "window.location.href='$base_url'";
    echo "</script>";
}