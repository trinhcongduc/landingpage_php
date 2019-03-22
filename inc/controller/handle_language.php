<?php
require_once './lib/vendor/philipp15b/php-i18n/i18n.class.php';
echo "<pre>";
print_r($_SERVER['REDIRECT_URL']);
echo "</pre>";
$redirect_url = explode("/",$_SERVER['REDIRECT_URL']);


//if(!empty($_GET["lang"])){
//    switch ($_GET["lang"]){
//        case "en":{
////            $i18n = new i18n('lang/lang_en.ini', 'langcache/', 'en');
//            return $lang_default = "en";
//            break;
//        }
//        case "vi":{
////            $i18n = new i18n('lang/lang_vi.ini', 'langcache/', 'vi');
//            return $lang_default = "vi";
//            break;
//        }
//        default : {
////            $i18n = new i18n('lang/lang_en.ini', 'langcache/', 'vi');
//            return $lang_default ;
//        };
//    }
//}else{
//    $i18n = new i18n('lang/lang_en.ini', 'langcache/', 'vi');
//}
//$i18n->init();

if(in_array('en',$redirect_url)){
    $lang_default = "en";
}
if(in_array('vi',$redirect_url)){
    $lang_default = "vi";
}

