<?php

include_once ("classes/Database.class.php");
include_once ("classes/Posts.class.php");

$db = new Database();
$conn = $db->getConnection();
$post = new Posts($conn);

$array = array("post_category_id"=>10,"post_title"=>"Some New Post Title","post_body"=>"<b>My Contents!!!!</b><b>Added new line!</b>");
$post->updatePost($array,"post_id=3");