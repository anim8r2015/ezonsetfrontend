<?php

    $url = "http://104.197.141.62/api/collections/create";
    $curl = curl_init();

    $postRequest = array(
        'collectionName' => 'foo',
        'documentName' => 'bar',
        'collectionData' => array(
                'bidId' => 'bid5',
                'bidby' =>' Anthony',
                'bidPrice' => '2005.00',
                'bidItemId' => 'Web Design'
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

    // $apiResponse - available data from the API request
    $apiResponse = json_encode($apiResponse);
    $jsonArrayResponse = json_decode($apiResponse);
    echo $jsonArrayResponse;
?>