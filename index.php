<?php
// Retrieve the requested URL
$url = $_GET['url'] ?? '';

// Define your routes and corresponding actions
switch ($url) {
    case '':
    case 'views/home':
        // Action for the home page
        require_once 'controllers/ShoppingListController.php';
        ShoppingListController::home();
        break;

    case 'views/shop':
        // Action for the shop page
        require_once 'controllers/ShoppingListController.php';
        ShoppingListController::displayList();
        break;

    case 'views/add':
        // Action for the shop page
        require_once 'controllers/ShoppingListController.php';
        ShoppingListController::addItem();
        break;
  

    default:
        // Handle 404 - Page not found
        require_once 'controllers/ShoppingListController.php';
        ShoppingListController::home();
        break;
}
