<?php 
$unicodeData = [
    "country"=>"বাংলাদেশ"
];
echo json_encode($unicodeData, JSON_UNESCAPED_UNICODE);

//echo json_last_error_msg(); //error show er jonno

if(json_last_error_msg()){
	echo json_last_error_msg();
}