<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the IDs to delete
    $idsToDelete = explode(',', $_POST['ids']);

    // Implement your deletion logic based on the IDs received
    // Connect to your database and perform the necessary deletion

    // Example:
    // Connect to your database (you will need to replace these with your actual database credentials)
        include('config.php');


    // Loop through the IDs and delete the corresponding rows
    foreach ($idsToDelete as $id) {
        $sql = "DELETE FROM your_table WHERE id = $id";  // Adjust this query based on your table structure
        if ($conn->query($sql) !== TRUE) {
            echo "Error deleting record: " . $conn->error;
            // Handle the error appropriately based on your needs
        }
    }

    // Close the database connection
    $conn->close();

    // Provide a response to indicate success
    echo "Deleted successfully.";
}
?>

