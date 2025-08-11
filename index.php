<?php 

// Allowed Pages
$allowedPages = ["home", "about-us", "contact-us", "hiring", "projects"];

// Getting Loading Page
$page = $_GET['page'] ?? "home";

// Setting Title
if ($page === 'home'){
    $title = 'Home!';
}
elseif ($page === 'about-us'){
    $title = 'About us!';
}
elseif ($page === 'contact-us'){
    $title = 'Contact us!';
}
elseif ($page === 'hiring'){
    $title = 'Carrers';
}
elseif ($page === 'projects'){
    $title = 'Our Work';
}
else {
    $title = "Title Here";
};

// Valadating page
if (!in_array($page, $allowedPages)){
    $page = 'home';
}

// Defind Paths
$content = "templates/pages/$page.html";
$styles = "templates/styles/$page.css";
$JavaScript = "templates/controllers/$page.js";
$backend = "templates/backend/$page.php";

include("templates/pages/base.php");

// Checking if backend exists
if (file_exists($backend)) {
    include($backend);
}
?>