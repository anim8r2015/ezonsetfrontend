<?php

$url = "http://104.197.141.62/api/collections/create";
$postRequest = array(
    'collectionName' => 'foo',
    'documentName' => 'bar',
	'collectionData' => array(
            'bidId' => 'bid5',
            'bidby' =>' Anthony',
            'bidPrice' => '200.00',
            'bidItemId' => 'Web Desgin'
        )
	);

$cURLConnection = curl_init($url);
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

// $apiResponse - available data from the API request
$jsonArrayResponse = json_decode($apiResponse);
echo $jsonArrayResponse;
?>