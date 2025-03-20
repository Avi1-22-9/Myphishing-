<?php

// Get visitor details

$ip_address = $_SERVER['REMOTE_ADDR'];

$timestamp = date("Y-m-d H:i:s");

$user_agent = $_SERVER['HTTP_USER_AGENT'];



// Detect if the device is Android

$is_android = (stripos($user_agent, "Android") !== false) ? "Yes" : "No";



// Log the details to a file

$log_entry = "IP: $ip_address | Time: $timestamp | Android: $is_android | User-Agent: $user_agent\n";

file_put_contents("ip_log.txt", $log_entry, FILE_APPEND);



// Redirect to a fake success page

header("Location: success.html");

exit();

?>
