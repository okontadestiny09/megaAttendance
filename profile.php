<?php
include "php/students_data.php";

// username comes from POST
$username = $_POST['username'] ?? null;

$user = null;

// search user in array
foreach ($datas as $student) {
    if ($student['username'] === $username) {
        $user = $student;
        break;
    }
}

if (!$user) {
    echo "<h3 style='text-align:center;margin-top:50px;'>User not found or invalid access</h3>";
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>

  <link rel="stylesheet" href="./bootstrap/bootstrap.css">
  <link rel="stylesheet" href="./fontawesome/css/all.css">
  <link rel="stylesheet" href="./css/profile.css">
</head>

<body>

  <nav class="navbar py-3 px-5">

    <div class="logo">
      <img src="./images/logo-dark.png" alt="logo" />
    </div>

    <div class="nav-links">
      <a href="index.html">Home</a>
      <a href="students_list.html">Students-List</a>
      <a href="profile.php">Profile</a>
      <a href="instructions.html">Instructions</a>
      <a href="about.html">About</a>
    </div>

  </nav>

  <div class="container pt-2 mt-2 pb-2">

    <div class="row align-items-center mb-3">
      <div class="col-12 col-sm-6">
        <p class="fs-4 mb-0">My Profile</p>
        <p class="d-none d-sm-block text-secondary small mb-0">Your Personal information</p>
      </div>

      <div class="col-12 col-sm-6 text-sm-end mt-2 mt-sm-0">
        <a href="./edit_profile.html" class="btn text-white px-3 py-2 bg-pri">
          <i class="fa-solid fa-user-pen me-2 text-white"></i>Edit Profile
        </a>
      </div>
    </div>

    <!-- PROFILE HEADER -->
    <div class="row pt-3 pb-3 bg-pri align-items-center rounded">

      <div class="col-3 col-sm-2 col-lg-1">
        <img src="./images/profile-pic.jpeg" class="img-fluid rounded p-img" alt="">
      </div>

      <div class="col-9 col-sm-10 col-lg-11">
        <p class="m-name mb-0">
          <?php echo $user["name"]; ?>
        </p>
      </div>

    </div>

    <!-- BASIC INFO -->
    <div class="row bg-white pb-3 rounded mb-3">

      <div class="col-12 col-sm-4 col-md-3 offset-sm-2 offset-md-1 pt-2">
        <p class="mb-0"><?php echo $user["matric_no"]; ?></p>
        <p class="mb-0">Student</p>
      </div>

    </div>

  </div>

  <!-- DETAILS -->
  <div class="container mb-3">
    <div class="bg-light p-3 rounded">

      <div class="row mb-2">
        <div class="col-12">
          <p class="fs-4 mb-0">Student Information</p>
        </div>
      </div>

      <div class="row g-2">

        <div class="col-12">
          <div class="bg-white p-2 rounded">
            <p class="text-secondary mb-1 small">Email</p>
            <p class="mb-0"><?php echo $user["email"]; ?></p>
          </div>
        </div>

        <div class="col-12">
          <div class="bg-white p-2 rounded">
            <p class="text-secondary mb-1 small">Matric Number</p>
            <p class="mb-0"><?php echo $user["matric_no"]; ?></p>
          </div>
        </div>

        <div class="col-12">
          <div class="bg-white p-2 rounded">
            <p class="text-secondary mb-1 small">Faculty</p>
            <p class="mb-0"><?php echo $user["faculty"]; ?></p>
          </div>
        </div>

        <div class="col-12">
          <div class="bg-white p-2 rounded">
            <p class="text-secondary mb-1 small">Department</p>
            <p class="mb-0"><?php echo $user["department"]; ?></p>
          </div>
        </div>

        <div class="col-12">
          <div class="bg-white p-2 rounded">
            <p class="text-secondary mb-1 small">Place of IT</p>
            <p class="mb-0"><?php echo $user["place_of_it"]; ?></p>
          </div>
        </div>

      </div>

    </div>
  </div>

</body>
</html>