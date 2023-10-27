<?php 
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//insert data
// Define SQL query for insertion
$sql = "INSERT INTO table_name (column1, column2, column3) VALUES ('value1', 'value2', 'value3')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//update data
// Define SQL query for updating data
$sql = "UPDATE table_name SET column1 = 'new_value' WHERE some_condition";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//retrieve data
// Define SQL query for data retrieval
$sql = "SELECT column1, column2 FROM table_name WHERE some_condition";

// Execute the query
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Column1: " . $row["column1"] . ", Column2: " . $row["column2"] . "<br>";
    }
} else {
    echo "No results found";
}
//close database connection
$conn->close();




?>