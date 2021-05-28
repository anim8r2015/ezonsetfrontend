<?php
    //require('global_vars.php');

    $fullname = $_POST['name'];
    $username = $_POST['u_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $passwordConfirm = $_POST['con_pass'];

    //before request, check if user exists

    $url = "http://104.197.141.62/api/collections/create";
    $curl = curl_init();

    $transId = time(). "" . $username;

    $postRequest = array(
        'collectionName' => 'users',
        'documentName' => $username,
        'collectionData' => array(
                'uid' =>$transId,
                'email' => $email,
                'displayName' => $fullname,
                'userName' => $username,
                'userType' => 'Buyer',
                'verified' => 'No'
            )
        );

    $json_string = json_encode($postRequest);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, TRUE);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $json_string);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($curl);
    curl_close($curl);

    //$apiResponse - available data from the API request
    //$apiResponse = json_encode($apiResponse);
    $result = json_decode($apiResponse);
    
    //if transaction is succesfull show login page
    if($result->success){
        header('Location:index.php');
    } else {
        //data to parse and show response front end 
        echo $apiResponse;
    }
?>