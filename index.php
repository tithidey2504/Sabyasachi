<?php
// Get the page from the URL query, default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define a content variable and CSS based on the page
switch ($page) {
    case 'accessories':
        $css = '<link rel="stylesheet" href="assets/css/accessories.css">';
        $content = 'accessories.php';
        break;
    case 'high-jewellery':
        $css = '<link rel="stylesheet" href="assets/css/high-jewellery.css">';
        $content = 'high-jewellery.php';
        break;
    case 'menswear':
        $css = '<link rel="stylesheet" href="assets/css/menswear.css">';
        $content = 'menswear.php';
        break;
    case 'met-gala':
        $css = '<link rel="stylesheet" href="assets/css/met-gala.css">';
        $content = 'met-gala.php';
        break;
    case 'wedding':
        $css = '<link rel="stylesheet" href="assets/css/wedding.css">';
        $content = 'wedding.php';
        break;
    default:
        $css = '<link rel="stylesheet" href="assets/css/style.css">';
        $content = 'home.php';
        break;
}
//include the template
include 'base.php'
?>
