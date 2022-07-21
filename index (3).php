<?php

// PHP SCRIPT FOR PROCESSING PLAYER INPUT DURING THE CASHING OUT PROCESS AND MAKING PAYMENT TO A PARTNER SERVICE

if (isset($_POST['player_cashout_form'])) {
  $player_name = $_POST['player_name'];
  $player_national_id = $_POST['player_national_id'];
  $player_phone_number = $_POST['player_phone_number'];
  $cashout_amount_by_player = $_POST['cashout_amount_by_player'];
}



// THE DEVELOPER SHOULD GET HONEY COIN API DEVELOPER CREDENTIALS TO GET THE HONEY DEVELOPER ID AND AP1


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-v2.honeycoin.app/v3/mpesa-to-paybill',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => '{
"account": "ACCOUNT NUMBER FOR THE SERVICE YOU WANT TO PAY FOR",
"businessNumber": "THE BUSINESS NUMBER OF THE SERVICE YOU WANT TO PAY FOR",
"amount": "AMOUNT YOU WANT TO PAY FOR THE SERVICE",
"apiKey": "THE API KEY OF THE DEVELOPER",
}',
  CURLOPT_HTTPHEADER => array(
    'developer-id: THE DEVELOPER ID',
    'Content-Type: application/json'
  ),
));


$result = curl_exec($curl);
curl_close($curl);


// <CONVERT THE RESPONSE TO JSON 
$result = json_decode($result, true);
