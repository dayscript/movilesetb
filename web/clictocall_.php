<?php

date_default_timezone_set('America/Bogota');

//API Url
$url = 'https://e-channel.kerberusipbx.com/api/v0.1/callback';
 
//Initiate cURL.
$ch = curl_init($url);
 
//The JSON data.
$jsonData = array(
	"id"		=> "19082614a9",
  	"numero" 	=> $_POST['ingresa_tu_telefono_de_contacto_movil_o_fijo']
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

// $datos = 'Fecha: ' . date("Y-m-d H:i:s") . "; Telefono:" . $_POST . "; Respuesta: ". $response;

// $datos = date("Y-m-d H:i:s") . " - " . $_POST . " - " . $result;


echo "<pre>";
print_r( $jsonData );
echo "</pre>";

echo "<pre>";
print_r( $result );
echo "</pre>";

$datos = array(
				"Fecha" => date("Y-m-d H:i:s"),
				"Numero" => $_POST['ingresa_tu_telefono_de_contacto_movil_o_fijo'],
				'Resultado' => $result,
			);

$fp = fopen('test-file.csv', 'a');

    fputcsv($fp, $datos);

fclose($fp);




?>