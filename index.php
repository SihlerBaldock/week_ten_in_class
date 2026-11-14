<?php

require_once __DIR__ . '/includes/scripts/database.php';

// Step 1: Connect to database
// mysqli_connect() - just in a different file
$connection = getConnection();

// Step 2: Run a query agaisnt our database
$queryResult = mysqli_query($connection, 'SELECT * FROM issues;');

// Step 3: Fetch all the results (not best practice, will discuss alternative shortly




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP &amp; HTML</title>
</head>
<body>
    <header>
        <h1>PHP &amp; HTML</h1>
    </header>
    <main>
        <h2>Issues</h2>
        <ul>
            <!-- loop over each result from our query -->
            <?php while ($result = mysqli_fetch_array($queryResult)): ?>
            <li>
                <article>
                    <h3><?php echo $result['name']; ?></h3>
                </article>
            </li>
            <?php endwhile; ?>
        </ul>
    </main>
    <footer></footer>
</body>
</html>