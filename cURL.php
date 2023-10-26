 <?php
// Set login and password
$login = "poonam.khatri.691@gmail.com";
$password = "75abc3f826fe3042";

// Encode credentials to base64
$cred = base64_encode($login . ":" . $password);

// API endpoint and request data
$apiEndpoint = "https://api.dataforseo.com/v3/serp/google/overview/live/advanced";
$requestData = [
    [
        "language_code" => "en",
        "location_code" => 2840,
        "keyword" => "flight ticket new york san francisco"
    ]
];

// Prepare cURL request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Basic " . $cred,
    "Content-Type: application/json"
]);

// Execute cURL request and get response
$response = curl_exec($ch);
curl_close($ch);

// Output the API response
echo $response;
?>
