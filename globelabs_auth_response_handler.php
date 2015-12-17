<?php
$myFile="globelabs_response.log";
$fh = fopen($myFile, 'a') or die("can't open file");
if (isset($_GET['subscriber_number']) && ($_GET['access_token'])) {
   $data = $_GET['subscriber_number']. " - ". $_GET['access_token']. "\n";
} else if (isset($_GET['code'])) {
   $data = $_GET['code']. "\n";
} else {
   $data = "Error: Wrong format of request";
}

fwrite($fh, $data);
fclose($fh);

echo "Recorded!";
return true;
?>
