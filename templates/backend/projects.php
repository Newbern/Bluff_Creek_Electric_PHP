<?php 
// FaceBook Web Token & ID
$accessToken = "EAAVXdURuduoBPeaSaqDpWk2UJXFheDXhbDsZAgEJVF1ZCP2mHushJp3ZA0ZCWXxYxRgqQuQORkmsgUT2ub1Mye62RHokhKwPbwTy2ks9ZBUyhi1T6z0ltnvbKtLBV7n7JWZBVx8i45TU5ZCzChAlGhBo2Qp0qwE1DwJKSKeuPWDX1ev86gVTPwNdDWUFhIwdttLRqL8XSxmRvGkw9VZAXZCnZCJGkeMhhG4BrSc836CqG43a4ZD";
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

$clients_posts = [];
$generators_posts = [];
$electrical_needs_posts = [];
$utility_poles_posts = [];


for ($i = 0; $i < count($data['data']); $i++) {

    $full_picture = $data['data'][$i]['full_picture'] ?? '';
    $created_time = $data['data'][$i]['created_time'] ?? '';
    $message = $data['data'][$i]['message'] ?? '';

    // Check if the post ID is in any of the categories
    if (in_array($data['data'][$i]['id'], $clients)) {
        $clients_posts[] = [
            'full_picture' => $full_picture,
            'created_time' => $created_time,
            'message' => $message
        ];
    } elseif (in_array($data['data'][$i]['id'], $generators)) {
        $generators_posts[] = [
            'full_picture' => $full_picture,
            'created_time' => $created_time,
            'message' => $message
        ];
    } elseif (in_array($data['data'][$i]['id'], $electrical_needs)) {
        $electrical_needs_posts[] = [
            'full_picture' => $full_picture,
            'created_time' => $created_time,
            'message' => $message
        ];
    } elseif (in_array($data['data'][$i]['id'], $utility_poles)) {
        $utility_poles_posts[] = [
            'full_picture' => $full_picture,
            'created_time' => $created_time,
            'message' => $message
        ];
    }
}


?>