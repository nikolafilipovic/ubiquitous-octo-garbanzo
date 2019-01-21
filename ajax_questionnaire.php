<?php
// echo 'test ajax';

extract($_POST);
$zap_data = [
  "full_address" => $full_address,
  "bedrooms" => $bedrooms,
  "bathrooms" => $bathrooms,
  "area" => $area,
  "kitchen_island" => $kitchen_island,
  "cabinets" => $cabinets,
  "tile_backsplash" => $tile_backsplash,
  "double_oven" => $double_oven,
  "built_in_microwave" => $built_in_microwave,
  "walk_in_pantry" => $walk_in_pantry,
  "none_of_the_above" => $none_of_the_above,
  "condition_master_bedroom" => $condition_master_bedroom,
  "upgrade" => $upgrade,
  "fname" => $fname,
  "lname" => $lname,
  "phone" => $phone,
  "email" => $email,
  "password" => $password
];

$zap_url = "https://hooks.zapier.com/hooks/catch/3497148/0az8w1/";
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