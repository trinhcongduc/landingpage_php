<?php
require_once './lib/vendor/philipp15b/php-i18n/i18n.class.php';
$redirect_uri = explode("/",$_SERVER['REQUEST_URI']);

if(in_array('en',$redirect_uri)){
    $i18n->setFilePath('./lang/lang_en.ini');
    $i18n->setFallbackLang('en');

    $lang_default = "en";
}
if(in_array('vi',$redirect_uri)){
    $i18n->setFilePath('./lang/lang_vi.ini');
    $i18n->setFallbackLang('vi');
    $lang_default = "vi";
}
$i18n->init();

