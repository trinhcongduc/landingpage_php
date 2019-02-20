<?php
    require_once "./lib/database/class_database.php";



    // handle Database

    if($_POST["submit"]){
        $DB = new database("localhost","root","","test");
        $DB->connect();
        foreach ($_POST as $key => $value){
            if($key !== "submit"){
                $fields[] =  "`".$key."`";
                $datas[] =  "N'".$value."'";
            }
        }
        $fields = implode(',',$fields);
        $values = implode(',',$datas);
        $sql = " insert into `langdingpage` ( $fields) values ($values)";
        echo "<pre>";
        print_r($sql);
        echo "</pre>";
        $DB->query($sql);
        if($DB->getResult()){

        }
        $DB->disconnect();
    }





