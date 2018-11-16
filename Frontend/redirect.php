<?php
$code = $_GET["code"];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api-uat.unionbankph.com/partners/sb/convergent/v1/oauth2/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "grant_type=authorization_code&client_id=46e33463-8184-432e-aaa4-062d7a7a9c49&code=$code&redirect_uri=http://localhost/teamsf_osams/Frontend/redirect.php&x-partner-id=01bbb51e-1e6c-4bd4-af9c-450957522aac&undefined=",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/x-www-form-urlencoded",
        "Postman-Token: 771c3e0e-7ffe-4b45-9597-7fecf0adfcb4",
        "cache-control: no-cache"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $result = json_decode($response, true);
    header('location: ubpayment.php');
    //echo $result['access_token'];
}