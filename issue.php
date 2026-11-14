<?php

require_once __DIR__ . '/includes/scripts/database.php';

// Step 1: Connect to database
// mysqli_connect() - just in a different file
$connection = getConnection();

$id = $_GET['id'] ?? null;

// Step 2: Run a query agaisnt our database
$queryResult = mysqli_query($connection, 'SELECT * FROM issues WHERE id = ' . $id . ';');

//get the issue from the query
// contrary to the other page, its fine if we just load everything, as everything should only be one row.

// 3. grab the single result
// alternatively we can just use _assoc() instead of passing the flag
$issue = mysqli_fetch_array($queryResult);

// we could use $id but if it was a different field on $issue that we needed, we would grab instead like this.
$issueId = $issue['id'];

$articleResult = mysqli_query($connection, 'SELECT * FROM articles WHERE issue_id = ' . $issueId. ';');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- dont just use the name of the record, use some context that is consistent in the title as well -->
    <title>Issues - <?php echo $issue['name']; ?></title>
</head>
<body>
    <header>
        <h1><?php echo $issue['name']; ?></h1>
    </header>
    <main>
        <h2>Articles</h2>
        <ul>
            <?php while ($article = mysqli_fetch_assoc($articleResult)) { ?>
            <li>
                <article>
                   
                </article>
            </li>
            <?php } ?>
        </ul>
    </main>

    <footer>
        <a href="index.php">Home</a>
    </footer>

    
    
</body>
</html>