<?php
require('global_vars.php');

//should be in an environment variable


$username = $_POST['seller_user_name'];
$password = $_POST['seller_pass'];


if(isset($username) && isset($password)){
    $data2 = json_encode(array($username, $password));

    $url = "http://104.197.141.62/api/collections/users/username/".$username;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);

	$result = json_decode($response);
	

    echo $result->success . " data count is " . count($result->data);

    if ($result->success == 1 && count($result->data) > 0){
        
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        header('Location:home.php');
        for ($x = 0; $x < count($result->data); $x++) {
            //isset is used to check for nulls
           
            /*
            if (isset($result->data[$x]->service_title)) {
                echo "service_title: " . $result->data[$x]->service_title . "<br>";
            }*/
        }
    } else {
        header('Location:index.php');
    }

} else {
    $data2 = json_encode(array($error=>"Please enter the correct user name or password."));
}

echo $_SERVER['DOCUMENT_ROOT'];

//close connection
