<?php
require_once './lib/vendor/philipp15b/php-i18n/i18n.class.php';

if(!empty($_GET["lang"])){
    switch ($_GET["lang"]){
        case "en":{
            $i18n = new i18n('lang/lang_en.ini', 'langcache/', 'en');
            break;
        }
        case "vi":{
            $i18n = new i18n('lang/lang_vi.ini', 'langcache/', 'vi');
            break;
        }
        default : {
            $i18n = new i18n('lang/lang_en.ini', 'langcache/', 'vi');
        };
    }
}else{
    $i18n = new i18n('lang/lang_en.ini', 'langcache/', 'vi');
}
$i18n->init();

