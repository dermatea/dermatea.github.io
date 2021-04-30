<?php
$api_key = 'XwdXbQk4r6zb4gEbYO6IkvNQPAJ4AoV8DYuMX3nsZXGLIPnyHBQDLqV8EI'; //API ключ
$offer_id = 5778; //ID оффера
$country = 'PH'; //Гео лида
$apiUrl = 'http://api.cpa.tl/api/lead/send';

$data = array(
	'key' => $api_key,
	'id' => microtime(true),
	'offer_id' => $offer_id,
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'country' => $country,
	'ip_address' => $_SERVER['REMOTE_ADDR'],
	'user_agent' => $_SERVER['HTTP_USER_AGENT'],
    "sub1" => $_POST['sub1'],
    "sub2" => $_POST['sub2'],
    "sub3" => $_POST['sub3'],
    "sub4" => $_POST['sub4'],
    "sub5" => $_POST['sub5'],
);

$options = array(
	'http' => array(
		'header' => "Content-type: application/x-www-form-urlencoded\r\n",
		'method' => 'POST',
		'content' => http_build_query($data),
		'ignore_errors' => true,
	)
);

$context = stream_context_create($options);
$result = file_get_contents($apiUrl, false, $context);

header('Location: success.php?fb='.$_POST['sub3']);