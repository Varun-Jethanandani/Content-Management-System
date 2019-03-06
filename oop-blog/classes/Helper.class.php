<?php
//require_once("../includes/constants.php");
class Helper{
    
    public static function sectionYield($sectionName){
        require_once(LAYOUT."$sectionName.php");
    }
    public static function redirect($url){
        header("Location: {$url}");
    }
    
}

 
//$h1 = new Helper();
//Helper::sectionYield("blog");
?>