<?php
error_reporting(0);

include 'dv200_db.php';

$sql = "SELECT * FROM `patients`";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

    echo "<tr>";

    if ($row['id'] == $_GET['id']) {
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td>' . $row['ID'] . '</td>';
        echo '<td>' . $row['ProfileImg'] . '</td>';
        echo '<td>' . $row['NameSurname'] . '</td>';
        echo '<td>' . $row['Age'] . '</td>';
        echo '<td>' . $row['Gender'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['Password'] . '</td>';
        echo '<td>' . $row['PhoneNumber'] . '</td>';
        echo '<td>' . $row['MedicalAidNumber'] . '</td>';
        echo '<td>' . $row['history'] . '</td>';
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '</form>';
    } else {
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Profile img'] . "</td>";
        echo "<td>" . $row['NameSurname'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['PhoneNumber'] . "</td>";
        echo "<td>" . $row['MedicalAidNumber'] . "</td>";
        echo "<td>" . $row['history'] . "</td>";
        echo '<td><a class="btn btn-primary" href="patients.php?id=' . $row['id'] . '" role="button">Update</a></td>';

        //Associative array
        //$age = array("Peter"=>"Doe", "Ben"=>"Floor", "Joe"=>"Dirt");
    }

    echo '<td><a class="btn btn-danger" href="deletepatient.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
}
$conn->close();
?>