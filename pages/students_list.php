<?php 
  include '../php/students_data.php'; 
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIWES Attendance - Student List</title>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/students_list.css" />
  <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
</head>

<body>
  <div class="container-fluid bg-white m-0 p-0">
    <nav class="navbar py-3 px-5">

      <div class="logo">
        <img src="/images/logo-dark.png" alt="" />
      </div>

      <div class="nav-links">
        <a href="index.html">Home</a>
        <a href="students_list.html">Students-List</a>
        <a href="profile.html">Profile</a>
        <a href="instructions.html">Instructions</a>
        <a href="about.html">About</a>
      </div>

      <div class="auth-buttons">
        <a href="login.html" class="login px-3 py-2 me-3">
          <i class="fa fa-user-circle"></i> Login
        </a>
        <a href="register.html" class="register px-3 py-2">
          <i class="fa fa-user-plus"></i> Register
        </a>
      </div>

    </nav>

    <section class="summary-cards m-4">
      <div class="row g-4 m-sm-4">

        <div class="col-sm-12 col-md-4">
          <div class="card p-4  text-center text-white">
            <h3>Total Students</h3>
            <p class="number">20</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="card p-4  text-center text-white">
            <h3>Present</h3>
            <p class="number">12</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="card p-4  text-center text-white">
            <h3>Absent</h3>
            <p class="number">8</p>
          </div>
        </div>
      </div>
    </section>


    <section class="table-controls m-5">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          All Students
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Present</a></li>
          <li><a class="dropdown-item" href="#">Absent</a></li>
        </ul>
      </div>
    </section>


    <section class="student table m-5">
      <div class="table-responsive-sm">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Matric no</th>
              <th scope="col">Name</th>
              <th scope="col">Dept</th>
              <th scope="col">Date</th>
              <th scope="col">Status</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($datas as $student): ?>
            <tr>
              <td scope="row">
                <?php echo $student['matric_no']; ?>
              </td>
              <td>
                <?php echo $student['name']; ?>
              </td>
              <td>
                <?php echo $student['department']; ?>
              </td>
              <td>March 24, 2026</td>
              <td>
                <span class="badge py-2 px-3 badge-present">Present</span>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
    </section>




   <footer class="bg-purple text-white py-4">
        <div class="container-fluid">
            <div class="row text-center text-md-start align-items-center">

                <div class="col-12 col-md-4 mb-3 mb-md-0 ps-5">
                    <img src="../assets/images/logo-dark.png" class="img-fluid footer-logo" alt="Logo">
                </div>

                <div class="col-12 col-md-4 mb-1 mb-md-0 text-center">
                    <p class="mb-0">
                        &copy; MegaAttendance Copyright 2026. <br>
                        All Rights Reserved
                    </p>
                </div>

                <div class="col-12 col-sm-12 col-md-4 text-center text-md-end">
                    <div class="d-inline-block text-center">
                        <p class="mb-0">Contact us</p>
                        <p class="mb-0">+234 812 435 3021</p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

  </div>

  <script src="/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>