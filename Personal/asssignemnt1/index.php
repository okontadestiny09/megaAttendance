<?php
include "connection.php";
include "model.php";

// Fetch all three datasets
$topLifeExpectancy = fetchTopLifeExpectancy($con);
$topAfricanPopulations = fetchTopPopulatedAfricanCountries($con);
$smallestCities = fetchSmallestCities($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Assignments</title>

<link rel="stylesheet" href="/assets/bootstrap.css">
</head>
<body class="bg-light">

    <div class="container py-5" style="max-width: 800px;">
        
        <h2 class="h4 text-secondary border-bottom pb-2 mb-3">Top 10 Countries with Highest Life Expectancy</h2>
        <div class="table-responsive mb-5 shadow-sm rounded">
            <table class="table table-hover bg-white mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="text-uppercase text-secondary" style="font-size: 0.85rem;">Country</th>
                        <th scope="col" class="text-uppercase text-secondary" style="font-size: 0.85rem;">Life Expectancy</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($topLifeExpectancy)): ?>
                        <tr>
                            <td><?= $row['NAME'] ?></td>
                            <td><?= $row['LIFEEXPECTANCY'] ?></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
        
        <h2 class="h4 text-secondary border-bottom pb-2 mb-3">Top 10 Most Populated Countries in Africa</h2>
        <div class="table-responsive mb-5 shadow-sm rounded">
            <table class="table table-hover bg-white mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="text-uppercase text-secondary" style="font-size: 0.85rem;">Country</th>
                        <th scope="col" class="text-uppercase text-secondary" style="font-size: 0.85rem;">Population</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($topAfricanPopulations)): ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['Population'] ?></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>

        <h2 class="h4 text-secondary border-bottom pb-2 mb-3">Top 10 Smallest Cities in the World</h2>
        <div class="table-responsive mb-5 shadow-sm rounded">
            <table class="table table-hover bg-white mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="text-uppercase text-secondary" style="font-size: 0.85rem;">City</th>
                        <th scope="col" class="text-uppercase text-secondary" style="font-size: 0.85rem;">Population</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($smallestCities)): ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['Population'] ?></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>