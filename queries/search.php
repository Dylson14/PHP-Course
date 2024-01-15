<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];
   

    try {
        require_once "./includes/dbh.inc.php";
        $query = "SELECT * FROM comments WHERE username = :userSearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":userSearch", $userSearch);
       

        // $stmt -> execute([$username,$pwd,$email]);//no longer needed
        $stmt -> execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
</head>
<body>

    <section>

    <h3>This is our search results:</h3>

    <?php 
        if(empty($results)){
            echo "There is no data to show!";
        } else {
            foreach($results as $row) {
               echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
               echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
               echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
            };
        }
    ?>

    </section>


</body>
</html>