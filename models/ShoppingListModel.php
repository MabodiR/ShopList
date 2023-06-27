<?php



class ShoppingListModel
{
     // Database connection
     private $conn;

     public function __construct()
     {
         // Establish database connection
         $this->conn = new PDO('mysql:host=localhost;dbname=shopping', 'root', '');
         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }

    public function getAllItems()
    {
        // Fetch all Laptops from the database
        $query = "SELECT * FROM Laptops";
        $result = $this->db->query($query);
        return $result->fetchAll();
    }

 
     public function addItem($image, $brand, $model, $price)
     {
         // Prepare the SQL statement
         $stmt = $this->conn->prepare("INSERT INTO Laptops (image, brand, model, price) VALUES (?, ?, ?, ?)");
 
         // Bind the parameters with the form data
         $stmt->bindParam(1, $image);
         $stmt->bindParam(2, $brand);
         $stmt->bindParam(3, $model);
         $stmt->bindParam(4, $price);
 
         // Execute the query
         $stmt->execute();
     }

    public function deleteItem($itemId)
    {
        // Delete the item from the database
        $query = "DELETE FROM Laptops WHERE id = :itemId";
        $statement = $this->db->prepare($query);
        $statement->execute(['itemId' => $itemId]);
    }

    public function editItem($itemId, $newItem)
    {
        // Update the item in the database
        $query = "UPDATE Laptops SET name = :name, checked = :checked WHERE id = :itemId";
        $statement = $this->db->prepare($query);
        $statement->execute(['name' => $newItem['name'], 'checked' => $newItem['checked'], 'itemId' => $itemId]);
    }

    public function markItemChecked($itemId)
    {
        // Mark the item as checked in the database
        $query = "UPDATE Laptops SET checked = 1 WHERE id = :itemId";
        $statement = $this->db->prepare($query);
        $statement->execute(['itemId' => $itemId]);
    }
}
