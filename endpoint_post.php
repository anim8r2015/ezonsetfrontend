<?php
require('global_vars.php');

$username = $_POST['seller_user_name'];
$password = $_POST['seller_pass'];


if(isset($username) && isset($password)){
    $data2 = json_encode(array($username, $password));
    //should be in an environment variable
    $url = "http://104.197.141.62/api/collections/users/username/".$username;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);

	$result = json_decode($response);
	

    echo $result->success . " data count is " . count($result->data);

    if ($result->success == 1 && count($result->data) > 0){
        
        $_SESSION["username"] = $username;
       

        for ($x = 0; $x < count($result->data); $x++) {
            //isset is used to check for nulls
           
            if (isset($result->data[$x]->email)) {
                //echo "service_title: " . $result->data[$x]->service_title . "<br>";
                $_SESSION["email"] = $result->data[$x]->email;
            }
            if (isset($result->data[$x]->userType)) {
                $_SESSION["userType"] = $result->data[$x]->userType;
            }
            if (isset($result->data[$x]->displayName)) {
                $_SESSION["displayName"]  = $result->data[$x]->displayName;  
                
                $_SESSION["username"] =  $result->data[$x]->displayName;  
            }

            if (isset($result->data[$x]->verified)) {
                $_SESSION["verified"]  = $result->data[$x]->verified;   
            }

        }
        header('Location:home.php');
    } else {
        header('Location:index.php');
    }

} else {
    $data2 = json_encode(array($error=>"Please enter the correct user name or password."));
}

//echo $_SERVER['DOCUMENT_ROOT'];

//close connection
