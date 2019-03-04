<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

if(!empty($_GET["lang"])){
    switch ($_GET["lang"]){
        case "en":{
            echo $_GET["lang"];
            break;
        }
        case "vi":{
            echo $_GET["lang"];
            break;
        }
        default : echo "vi";
    }
}
