
<?php
global $accesstoken;
$accessToken = "";

// Getting the access token
function requestAccessToken() {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://europe-west3-kotanipay-prod.cloudfunctions.net/api_v2/api/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
    "phoneNumber": "254721948852",
    "countryCode": "KE",
    "password": "@P;P//=)DpmuCk:BcES8t@AdbDL%(cdV"
}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $str_arr = explode (",", $response);
    $convertedToArray = $str_arr;
    $backToString = implode(" ",$convertedToArray);
    $accessToken  = substr($backToString,29, 552);

    return($accessToken);

}

// send money to the impact partner
$accesstoken =  requestAccessToken();


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://europe-west3-kotanipay-prod.cloudfunctions.net/api_v2/transactions/paybill',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
	"merchantNumber": "200222",
	"accountNumber": "32773103",
	"amount": "1"
}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accesstoken
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;


    $str_arr = explode (",", $response);
    $convertedToArray = $str_arr;
    $backToString = implode(" ",$convertedToArray);
    $transactionId  = substr($backToString,7, 36);



// get full transaction details
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://europe-west3-kotanipay-prod.cloudfunctions.net/api_v2/transactions/status/' . $transactionId ,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $accesstoken
    ),
));

//print_r( $transactionId);
$response = curl_exec($curl);

curl_close($curl);
echo "<pre>";

print_r ($response);

echo "</pre>";

