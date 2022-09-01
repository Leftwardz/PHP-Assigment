<?php 
//Shortcut to htmlspecialchars and urlenconde
function h($string=''){
    return htmlspecialchars($string);
}

function u($string=''){
    return urlencode($string);

}

function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
  }

function redirect_to($path){
    header('Location:' . $path);
    exit;
}

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

?>