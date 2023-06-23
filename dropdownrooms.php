<?php
include 'dv200_db.php';

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

echo "<select name= 'rooms' id='rooms'>";

while ($row = $result->fetch_assoc()) {

    echo "<option value='" . $row['Number'] . "'> " . $row['Number'] . " </option>";
    // <option value="name"> name </option>

}

echo "</select>";

$conn->close();

?>