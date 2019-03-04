<?php class L {
const greeting = 'Chào mày!';
const category_saysomthing = 'Nói gì đó đê!!!';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}