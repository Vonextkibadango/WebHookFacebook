<?php
echo "Hello World";
$challenge = $_REQUEST['hub_challenge'];
$veify_token  = $_REQUEST['hub_verify_token'];

if ($veify_token  === 'abc123'){
	echo $challenge;
}

?>