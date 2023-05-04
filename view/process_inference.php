<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
echo "<script>alert('It appeared')<script>";
$image_name = $_FILES["image"]["name"];

// Base 64 encode image
$data = base64_encode(file_get_contents($image_name));

// Set API Key and model endpoint (found in dataset URL)
$api_key = "J3NQpHOIVfrARAn7q3HC";
$model_endpoint = "dataset/v";

// URL for HTTP request
$url = "https://detect.roboflow.com/" . $model_endpoint
    . "?api_key=" . $api_key
    . "&name=YOUR_IMAGE.jpg";

// Set up and send HTTP request
$options = array(
    'http' => array (
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => $data
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo $result;
}
?>
