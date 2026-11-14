<?php

require_once __DIR__ . '/includes/scripts/database.php';

// Step 1: Connect to database
// mysqli_connect() - just in a different file
$connection = getConnection();

$id = 1;

// Step 2: Run a query agaisnt our database
$queryResult = mysqli_query($connection, 'SELECT * FROM issues WHERE id = ' . $id . ';');

//get the issue from the query
// contrary to the other page, its fine if we just load everything, as everything should only be one row.
$issue = mysqli_fetch_array($queryResult, MYSQLI_ASSOC);

echo '<pre><code>';
var_dump($issue);
echo '</code></pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>