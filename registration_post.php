<?php
    require('global_vars.php');

    $fullname = $_POST['name'];
    $username = $_POST['u_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $passwordConfirm = $_POST['con_pass'];

    $url = "http://104.197.141.62/api/collections/create";

    $postRequest = array(
        'collectionName' => 'users',
        'documentName' => time(). "" . $username,
        'collectionData' => array(
                'uid' => time(). "" . $username,
                'email' => $email,
                'displayName' => $fullname,
                'userName ' => $username,
                'userType' => 'Buyer',
                'verified' => 'No'
            )
        );

    $cURLConnection = curl_init($url);
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    //$apiResponse - available data from the API request
    $result = json_decode($apiResponse);
    
    //if transaction is succesfull show login page
    if($result->success){
        header('Location:index.php');
    } else {
        //data to parse and show response front end 
        echo $apiResponse;
    }
?>