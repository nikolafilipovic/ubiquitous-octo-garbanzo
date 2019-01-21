<?php
// echo 'test ajax';

extract($_POST);
$zap_data = [
  "agent_id" => $agent_id,
  "full_name" => $full_name,
  "phone" => $fname,
  "email" => $email,
  "question" => $question
];

$zap_url = "https://hooks.zapier.com/hooks/catch/3497148/0enqim/";
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