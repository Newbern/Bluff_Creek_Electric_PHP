<?php 
// FaceBook Web Token & ID
$accessToken = "EAAu6DgzAZAXcBPJCKQpPHv6I4mk4c29FbGb85BTtj4wuZCfr9sBKyzvKvTEfcg6ji75lOSq6Wfvd13I9uqiMu9AFSLaUXyUEjQvSvAzDHs0sLZC8mAJ4k1cp8x5jlDwR4z3bBLxULLHOlnsSimR8UW78Q1BfXYJXMDddgVzJH8bV4uJ7eWESwn1WE4yaUmsmHqI7b3OShIGLYiEaN0F1s6HjzXX8rN3ctwEUXUZD";
$pageId = "620911371115964";

// FaceBook Post IDs
$clients = ["620911371115964_122099720120922670", "620911371115964_1375984410151844", "620911371115964_122110691756922670"];
$generators = ["620911371115964_122100054164922670"];
$electrical_needs = ["620911371115964_122100510578922670"];
$utility_poles = ["620911371115964_122110642706922670"];

$url = 'https://graph.facebook.com/v23.0/'. $pageId .'/posts?fields=message,full_picture,permalink_url&access_token='.$accessToken;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For local testing only; remove in production // Add SSL certificate

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
}
curl_close($ch);

$data = json_decode($response, true);

echo "<pre style='color:white'>";
echo "<h1>Raw Data from Facebook API</h1>";
var_dump($response);
print_r($data);
echo "</pre>";
?>