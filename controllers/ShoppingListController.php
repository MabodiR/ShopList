<?php

class ShoppingListController
{
    private $shoppingListModel;

    public function __construct()
    {
        $this->shoppingListModel = new ShoppingListModel();
    }

    public function addItem($image, $brand, $model, $price) {


        // Connect to the database
        $dbHost = 'localhost';
        $dbName = 'shopping'; 
        $dbUser = 'root'; 
        $dbPass = ''; 
    
        try {
          $dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass);
          $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
          /// Retrieve the form data
            $image = $_FILES['image']['name'];
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $price = $_POST['price'];

            // Process the image upload
            $targetDirectory = 'public/images/'; // Directory to store the uploaded images
            $targetFile = $targetDirectory . basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

            // Instantiate the ShoppingListModel
            require_once 'models/ShoppingListModel.php';
            $model = new ShoppingListModel();

            // Call the addItem method in the model
            $model->addItem($image, $brand, $model, $price);

          // Redirect to the desired page after insertion
          header('Location: add.php');
          exit();
        } catch (PDOException $e) {
          // Handle the database error
          echo "Error: " . $e->getMessage();
        }
      }



    public function displayList()
    {
    // Include the ShoppingListModel file
    require_once 'models/ShoppingListModel.php';

    // Create a database connection
    $dbConnection = new PDO('mysql:host=localhost;dbname=shopping', 'root', '');

    // Instantiate the ShoppingListModel with the database connection
    $model = new ShoppingListModel($dbConnection);

    // Get all items from the model
    $items = $model->getAllItems();

    // Render the view
    require_once 'views/shop.php';
    }

    public function home()
    {
        // Load the view
        include_once('views/index.php');
    }
}
