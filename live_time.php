<?php
// Set the content type to text/plain to ensure it can be easily fetched via JavaScript
header('Content-Type: text/plain');
// Get the current server time
date_default_timezone_set("Asia/calcutta");
$current_time = date("d-m-Y H:i:s");
// Output the current time
echo $current_time;
?>