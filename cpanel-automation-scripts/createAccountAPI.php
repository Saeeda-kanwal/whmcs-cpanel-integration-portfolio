<?php
// cPanel API: Create Hosting Account using UAPI (example with WHM)

$whmUsername = "root";
$token = "your_whm_api_token_here";
$server = "https://your-server-ip:2087";

$accountData = [
    'username' => 'newuser',
    'domain' => 'example.com',
    'password' => 'securePass123',
    'plan' => 'basic',
    'contactemail' => 'user@example.com'
];

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "$server/json-api/createacct?api.version=1&" . http_build_query($accountData),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER => [
        "Authorization: whm $whmUsername:$token"
    ],
]);

$response = curl_exec($curl);
curl_close($curl);
echo $response;
?>
