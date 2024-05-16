<?php
include_once("includes/logged.php");

if (!isset($_GET["id_cat"])) {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        
        include_once("includes/conn.php");
        
        try {
            $sql = "DELETE categories 
                    FROM categories 
                    LEFT JOIN posts ON categories.id = posts.id_cat 
                    WHERE posts.id IS NULL 
                    AND categories.id = ?;";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);

            if ($stmt->rowCount() > 0) {
                echo "Delete successful: category with no associated posts removed.";
            } else {
                echo "No category deleted: either the category does not exist or it has associated posts.";
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    } else {
        echo "Category ID not provided.";
    }
} else {
    echo "You cannot delete.";
}
?>
