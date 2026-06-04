<?php 
  include 'php/students_data.php'; 
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIWES Attendance - Student List</title>
  <link rel="stylesheet" href="/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="/css/students_list.css" />
  <link rel="stylesheet" href="/fontawesome/css/all.css">
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




    <div class="footer-d">
      <div><img src="./images/logo-dark.png" class="img-f" /></div>

      <div class="footer-last">
        <div class="footer-d1">
          <a href="index.html">Home</a>
          <a href="students_list.html">Students-List</a>
          <a href="profile.html">Profile</a>
          <a href="edit_profile.html">Edit Profile</a>
          <a href="about.html">About</a>
        </div>

        <div class="footer-d2">
          <p>© <span>MegaAttendance</span>Copyright 2026. All Rights Reserved.</p>
        </div>
      </div>

      <div class="footer-space">
        <p>Contact us</p>
        <p>Phone: 08124353021</p>
      </div>

      <div class="auth-buttons">
        <a href="login.html" class="login"><i class="fa fa-user-circle" aria-hidden="true"></i> Login</a>
        <a href="register.html" class="register"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
      </div>
    </div>
  </div>

  <script src="/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>