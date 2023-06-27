<?php
// Retrieve the requested URL
$url = $_GET['url'] ?? '';

// Include the necessary files
require_once 'controllers/ShoppingListController.php';

// Instantiate the controller
$controller = new ShoppingListController();

// Define your routes and corresponding actions
switch ($url) {
    case '':
    case 'home.php':
        // Action for the home page
        $controller->home();
        break;

    case 'shop.php':
        // Action for the shop page
        $controller->displayList();
        break;

    case 'add.php':
        // Action for the add page
        $controller->addItem();
        break;

    default:
        // Handle 404 - Page not found
        $controller->home();
        break;
}
?>