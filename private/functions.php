<?php 
function test(){
    return 'all functions imported succesfully';
};

function url_for($script_path){
    if($script_path[0] != '/'){
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function u($string=""){
    return urlencode($string);
}

function raw_u($string=""){
    return rawurlencode($string);
}

function h($string=""){
    return htmlspecialchars($string);
}

function is_post_request(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
    //returns true when post method has been used
}

function is_get_request(){
    return $_SERVER['REQUEST_METHOD'] == 'GET';
    //returns true when get method has been used
}
?>