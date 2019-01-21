<?php
// echo 'test ajax';

extract($_POST);
$zap_data = [
  "first_name" => $fname,
  "last_name" => $lname,
  "phone" => $phone,
  "email" => $email,
  "info" => $info,
  "property_id" => $property_id,
  "street_address" => $street_address,
  "city" => $city,
  "state" => $state,
  "postal_code" => $postal_code
];

$zap_url = "https://hooks.zapier.com/hooks/catch/3497148/0gm90l/";
sendPostRequestJson( $zap_url, $zap_data );
echo "success";
function sendPostRequestJson( $base_url, $properties, $returns_json = TRUE ) {

    $json_string = json_encode( $properties );

    $response = file_get_contents(
      $base_url,
      null,
      stream_context_create(
        [
          "http" => [
            "protocol_version" => 1.1,
            "method" => "POST",
            "header" => "Content-type: application/json\r\n".
                  "Connection: close\r\n" .
                  "Content-length: " . strlen( $json_string ) . "\r\n",
            "content" => $json_string,
          ],
        ]
      )
    );

    if ( ! $response )
      return FALSE;

    if ( $returns_json ) {
      try {
        $data = json_decode( $response );
      } catch ( Exception $error ) {
        return FALSE;
      }

      if ( ! $data ) {
        return FALSE;
      }
      else {
        return $data;
      }
    }
    else {
      return $response;
    }
  }
?>