<?php
require './config/config.php';
$templates = array(
    '1'=>'default',
    '2'=>'format-audio'
);

function __autoload($clazz){
    require __DIR__."/class/$clazz.php";
}

function success($msg,$url=null){
    $url=$url?"location.href='{$url}'":"window.history.go(-1)";
    $html=<<<HTML
	    <div style="background:#dff0d8;color:#468847;border:1px solid #d6e9c6;padding:20px;"><h2>:) $msg</h2></div>
        <script>
            setTimeout(function(){
                {$url}
            },2000)
        </script>
HTML;
    echo $html;
}

function error($msg,$url=null){
    $url=is_null($url)?"window.history.go(-1)":"location.href='{$url}'";
    $html=<<<HTML
    <div style="background:#f2dede;color:#b94a48;border:1px solid #eed3d7;padding:20px;"><h2>:( $msg</h2></div>
        <script>
            setTimeout(function(){
                {$url}
            },2000)
    </script>
HTML;
    die($html);
}