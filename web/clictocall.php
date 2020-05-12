<?php

date_default_timezone_set('America/Bogota');


$telefono = $_POST['ingresa_tu_telefono_de_contacto_movil_o_fijo'] . $_POST['telefono'];


// if ( isset( $_POST['ingresa_tu_telefono_de_contacto_movil_o_fijo'] ) && $_POST['ingresa_tu_telefono_de_contacto_movil_o_fijo'] != "" ) {
// 	$telefono = $_POST['ingresa_tu_telefono_de_contacto_movil_o_fijo'];	
// }

// if ( isset( $_POST['edit_telefono'] ) && $_POST['edit_telefono'] != "" ) {
// 	$telefono = $_POST['edit_telefono'];
// }

	//API Url
	$url = 'https://e-channel.kerberusipbx.com/api/v0.1/callback';
	 
	//Initiate cURL.
	$ch = curl_init($url);
	 
	//The JSON data.
	$jsonData = array(
		"id"		=> "044c658987",
	  	"numero" 	=> "57" . $telefono,
	  	"timeout"	=> 25000
	  	// "numero" 	=> "3127819356",
	  	// "testmode" 	=> true
	);
	 
	//Encode the array into JSON.
	$jsonDataEncoded = json_encode($jsonData);
	 
	//Tell cURL that we want to send a POST request.
	curl_setopt($ch, CURLOPT_POST, 1);
	 
	//Attach our encoded JSON string to the POST fields.
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
	 
	//Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'apikey: 33773765884528abb39471fc4b70d203' )); 
	 
	//Execute the request
	$result = curl_exec($ch);

	$datos = array(
					"Fecha" => date("Y-m-d H:i:s"),
					"Numero" => "57" . $telefono,
					// "Numero" => "3127819356",
					'Resultado' => $result,
				);

	$fp = fopen('test-file.csv', 'a');

	    fputcsv($fp, $datos);

	fclose($fp);

// }





?>