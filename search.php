<!DOCTYPE html>
<html>
<head>
    <title>Database Search Results</title>
    <style>
        /* Add your CSS styles for the search results page here */
    </style>
</head>
<body>
    <h1>Database Search Results</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the search term from the form
        $search = $_POST['search'];

        // Connect to the database (replace with your actual database connection code)
        $db = new mysqli('localhost', 'username', 'password', 'database_name');

        // Check the database connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // Construct and execute a SQL query to search for records
        $sql = "SELECT * FROM your_table WHERE column_name LIKE '%$search%'";
        $result = $db->query($sql);

        // Display the search results
        if ($result->num_rows > 0) {
            echo "<h2>Search Results:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "<p>ID: " . $row['id'] . "<br>Name: " . $row['name'] . "<br>Email: " . $row['email'] . "</p>";
            }
        } else {
            echo "<p>No results found.</p>";
        }

        // Close the database connection
        $db->close();
    }
    ?>
</body>
</html>
