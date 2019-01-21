<?php
// echo 'test ajax';

extract($_POST);
$zap_url = "https://hooks.zapier.com/hooks/catch/3497148/wawpat/";
if ($method == 'buyer'){
$zap_data = [
  "method" => $method,
  "street_address" => $street_address,
  "state" => $state,
  "city" => $city,
  "zip" => $zip,
  "first_name" => $fname,
  "last_name" => $lname,
  "phone" => $phone,
  "email" => $email
];

$status = sendPostRequestJson( $zap_url, $zap_data );
if (!$status){
  echo 'Whoops';
}else{
  echo "success";  
}

}elseif($method == 'buyer_with_own_agent'){
  $zap_data = [
    "method" => $method,
    "street_address" => $street_address,
    "state" => $state,
    "city" => $city,
    "zip" => $zip,
    "first_name" => $fname,
    "last_name" => $lname,
    "email" => $email,
    "agent_first_name" => $agent_fname,
    "agent_last_name" => $agent_lname,
    "agent_email" => $agent_email
  ];

$status = sendPostRequestJson( $zap_url, $zap_data );
if (!$status){
  echo 'Whoops';
}else{
  echo "success";  
}
}elseif($method == "buyer_agent"){
    $zap_data = [
    "method" => $method,
    "street_address" => $street_address,
    "state" => $state,
    "city" => $city,
    "zip" => $zip,
    "agent_first_name" => $fname,
    "agent_last_name" => $lname,
    "agent_email" => $email,
    "agent_phone" => $phone,
    "purchase_price" => $purchase_price,
    "earnest_money" => $earnest_money,
    "down_payment" => $down_payment,
    "loan_amount" => $loan_amount,
    "payment_method" => $payment_method,
    "close_of_escrow" => $close_of_escrow,
    "deadline" => $deadline,
    "time" => $time,
    "appraisal" => $appraisal,
    "home_inspection" => $home_inspection,
    "sale_of_another_property" => $sale_of_another_property,
    "as_is" => $as_is,
    "other_terms" => $other_terms
  ];
$status = sendPostRequestJson( $zap_url, $zap_data );
if (!$status){
  echo 'Whoops';
}else{
  echo "success";  
}
}elseif($method == "investor"){
  $zap_data = [
    "method" => $method,
    "street_address" => $street_address,
    "state" => $state,
    "city" => $city,
    "zip" => $zip,
    "first_name" => $fname,
    "last_name" => $lname,
    "phone" => $phone,
    "email" => $email,
    "purchase_price" => $purchase_price,
    "earnest_money" => $earnest_money,
    "down_payment" => $down_payment,
    "loan_amount" => $loan_amount,
    "payment_method" => $payment_method,
    "close_of_escrow" => $close_of_escrow,
    "deadline" => $deadline,
    "time" => $time,
    "appraisal" => $appraisal,
    "home_inspection" => $home_inspection,
    "sale_of_another_property" => $sale_of_another_property,
    "as_is" => $as_is,
    "other_terms" => $other_terms
  ];
$status = sendPostRequestJson( $zap_url, $zap_data );
if (!$status){
  echo 'Whoops';
}else{
  echo "success";  
}
}else{
  $zap_data = array();
  echo 'Whoops';
}

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