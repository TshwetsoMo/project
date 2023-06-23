<?php
include 'dv200_db.php';

$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

echo "<select name= 'patients' id='patients'>";

while ($row = $result->fetch_assoc()) {

    echo "<option value='" . $row['NameSurname'] . "'> " . $row['NameSurname'] . " </option>";
    // <option value="name"> name </option>

}

echo "</select>";

$conn->close();

?>