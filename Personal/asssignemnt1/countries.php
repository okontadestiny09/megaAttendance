<?php
include "connection.php";
include "model.php";

$countries = fetchAllCountries($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Countries</title>
</head>
<body>

    <div>
         
        <h2>Country Directory</h2>
        
        <div>
            <table border = "1">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Population</th>
                       <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($countries)): ?>
                        <tr>
                            <td><?= $row['Code'] ?></td>
                            <td><?= $row['Name'] ?></td>
                            <td><?= $row['Population'] ?></td>
                       <td><a href="edit.php?code=<?= $row['Code'] ?>">edit</a></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>


        
        </div>
    </div>

</body>
</html>