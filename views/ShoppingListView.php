<?php



// views/ShoppingListView.php

class ShoppingListView
{
    public function render($Laptops)
    {
        echo "Shopping List:\n";
        foreach ($Laptops as $itemId => $item) {
            echo "{$itemId}. ";
            echo $item['brand'];
            
            echo "\n";
        }
    }
}
