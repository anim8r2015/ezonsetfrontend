<?php

	//php playground
	$url = "http://104.197.141.62/api/collections/projects";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);

	$result = json_decode($response);
	//use $result->[json attribute name to get data]
	echo "success: ". $result->success ." (1 evaluates to true 0 false) <br>"; //1 is true php decodes that
	echo "message: ". $result->message ."<br>"; 
	echo "<br>";
	
	//check number of items in data array
	echo "Data count is ". count($result->data);
	
	echo "<br>";
	echo "<br>";

	for ($x = 0; $x < count($result->data); $x++) {
		//isset is used to check for nulls
		if (isset($result->data[$x]->service_title)) {
			echo "service_title: " . $result->data[$x]->service_title . "<br>";
		}
		
		if (isset($result->data[$x]->project_service_id)) {
			echo "project_service_id: " . $result->data[$x]->project_service_id . "<br>";
		}
		if (isset($result->data[$x]->status)) {
			echo "status: " . $result->data[$x]->status . "<br>";
		}
		
		if (isset($result->data[$x]->project_description)) {
			echo "project_description: " . $result->data[$x]->project_description . "<br>";
		}
		
		echo "<br>";
		echo "<br>";
		
	}

?>