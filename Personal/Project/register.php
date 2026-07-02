<?php
session_start();
require_once __DIR__ . '/backend/connection.php';

// Fetch branches for dropdown
$branches = [];
$branch_query = mysqli_query($con, "SELECT id, name FROM branches ORDER BY name ASC");
if ($branch_query) {
    while ($row = mysqli_fetch_assoc($branch_query)) {
        $branches[] = $row;
    }
}

// Handle registration
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name    = trim($_POST['full_name'] ?? '');
    $email        = trim($_POST['email'] ?? '');
    $phone_number = trim($_POST['phone_number'] ?? '');
    $password     = $_POST['password'] ?? '';
    $branch_id    = intval($_POST['branch_id'] ?? 0);

    // Validation
    if ($full_name === '') {
        $error = 'Full name is required.';
    } elseif ($email === '') {
        $error = 'Email is required.';
    } elseif ($phone_number === '') {
        $error = 'Phone number is required.';
    } elseif ($branch_id === 0) {
        $error = 'Please select a branch.';
    } elseif ($password === '') {
        $error = 'Password is required.';
    } elseif (strlen($password) < 6) {
        $error = 'Password must be at least 6 characters.';
    } else {
        // Check if user already exists
        $check = "SELECT id FROM users WHERE email = ?";
        $prep_check = mysqli_prepare($con, $check);
        mysqli_stmt_bind_param($prep_check, 's', $email);
        mysqli_stmt_execute($prep_check);
        $results = mysqli_stmt_get_result($prep_check);

        if (mysqli_fetch_assoc($results)) {
            $error = 'An account with this email already exists.';
        } else {
            // Hash password using same pattern as parent project
            $hash_password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (branch_id, full_name, email, phone_number, password_hash, role) VALUES (?, ?, ?, ?, ?, 'Admin')";
            $prepared = mysqli_prepare($con, $query);

            if ($prepared) {
                mysqli_stmt_bind_param($prepared, 'issss', $branch_id, $full_name, $email, $phone_number, $hash_password);

                if (mysqli_stmt_execute($prepared)) {
                    // Auto-login: store user info in session (same pattern as process.php)
                    $_SESSION['name'] = $full_name;
                    $_SESSION['email'] = $email;
                    $_SESSION['authenticated'] = true;
                    header("Location: app.php");
                    exit;
                } else {
                    $error = 'Unable to create account. Please try again.';
                }
            } else {
                $error = 'Something went wrong. Please try again.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register — StockWarden</title>
  <link rel="stylesheet" href="/css/style.css" />
  <script>const t=localStorage.getItem('sw-theme');if(t)document.documentElement.setAttribute('data-theme',t);</script>
  <style>
    .theme-toggle {
      background: var(--bg-2);
      border: 1px solid var(--border);
      color: var(--text-dim);
      font-family: var(--font-mono);
      font-size: 0.62rem;
      letter-spacing: 0.1em;
      padding: 0.35rem 0.8rem;
      cursor: pointer;
      transition: all 0.25s;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      text-transform: uppercase;
    }
    .theme-toggle:hover { border-color: var(--accent); color: var(--accent); }
    .theme-toggle .icon { font-size: 0.8rem; }
  </style>
  <style>
    .alert {
      font-family: var(--font-mono);
      font-size: 0.72rem;
      letter-spacing: 0.06em;
      padding: 0.75rem 1rem;
      margin-bottom: 1.5rem;
      border-left: 3px solid;
    }
    .alert-error {
      color: var(--rust);
      border-color: var(--rust);
      background: rgba(168, 78, 40, 0.06);
    }
    .alert-success {
      color: var(--olive);
      border-color: var(--olive);
      background: rgba(91, 98, 69, 0.06);
    }

    .form-group select {
      appearance: none;
      -webkit-appearance: none;
      background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%239A9690'/%3E%3C/svg%3E") no-repeat right 0 center;
      cursor: pointer;
    }

    .form-group select option {
      background: var(--bg);
      color: var(--text);
      font-family: var(--font-body);
    }

    .password-strength {
      height: 2px;
      background: var(--border);
      margin-top: 0.5rem;
      overflow: hidden;
      transition: all 0.3s;
    }
    .password-strength-bar {
      height: 100%;
      width: 0%;
      transition: width 0.3s, background 0.3s;
    }

    .auth-form-panel {
      animation: fadeUp 0.5s ease both;
    }
  </style>
</head>
<body>

  <!-- Nav -->
  <nav class="nav">
    <div class="nav-brand">
      <span class="brand-name">StockWarden</span>
      <span class="brand-tag">Inventory System</span>
    </div>
    <button class="theme-toggle" id="themeToggle" title="Toggle dark mode">
      <span class="icon" id="themeIcon">☽</span>
      <span id="themeLabel">Dark</span>
    </button>
  </nav>

  <div class="auth-wrapper">
    <div class="auth-form-panel">
      <div class="auth-form-header">
        <div class="step-tag">Get started</div>
        <h2>Create your<br />account</h2>
        <p>Register to start managing your inventory.</p>
      </div>

      <?php if ($error): ?>
        <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <?php if ($success): ?>
        <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
      <?php endif; ?>

      <form action="register.php" method="post" autocomplete="off">
        <div class="form-group">
          <label for="full_name">Full name</label>
          <input type="text" id="full_name" name="full_name" placeholder="John Doe" autocomplete="name" value="<?= htmlspecialchars($_POST['full_name'] ?? '') ?>" />
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
          </div>

          <div class="form-group">
            <label for="phone_number">Phone number</label>
            <input type="tel" id="phone_number" name="phone_number" placeholder="+234 800 000 0000" autocomplete="tel" value="<?= htmlspecialchars($_POST['phone_number'] ?? '') ?>" />
          </div>
        </div>

        <div class="form-group">
          <label for="branch_id">Branch</label>
          <select id="branch_id" name="branch_id">
            <option value="" disabled <?= empty($_POST['branch_id']) ? 'selected' : '' ?>>Select your branch</option>
            <?php foreach ($branches as $branch): ?>
              <option value="<?= $branch['id'] ?>" <?= (isset($_POST['branch_id']) && $_POST['branch_id'] == $branch['id']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($branch['name']) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Min. 6 characters" autocomplete="new-password" />
          <div class="password-strength">
            <div class="password-strength-bar" id="strengthBar"></div>
          </div>
          <span class="form-hint"><a href="index.php" style="color: var(--accent); font-family: var(--font-mono); font-size: 0.68rem; letter-spacing: 0.1em; text-decoration: none;">Already have an account? Log in</a></span>
        </div>

        <button type="submit" class="btn btn-solid" style="width: 100%; justify-content: center; padding: 0.85rem; margin-bottom: 1.2rem; font-size: 0.72rem;">Create account</button>
      </form>
    </div>
  </div>

  <script>
    // Password strength indicator
    const passwordInput = document.getElementById('password');
    const strengthBar = document.getElementById('strengthBar');

    passwordInput.addEventListener('input', function () {
      const val = this.value;
      let strength = 0;

      if (val.length >= 6) strength++;
      if (val.length >= 10) strength++;
      if (/[A-Z]/.test(val)) strength++;
      if (/[0-9]/.test(val)) strength++;
      if (/[^A-Za-z0-9]/.test(val)) strength++;

      const percent = (strength / 5) * 100;
      const colors = ['#A84E28', '#D48806', '#D48806', '#5B6245', '#5B6245'];

      strengthBar.style.width = percent + '%';
      strengthBar.style.background = colors[strength - 1] || 'transparent';
    });
  </script>

  <script>
    (function() {
      const toggle = document.getElementById('themeToggle');
      const icon = document.getElementById('themeIcon');
      const label = document.getElementById('themeLabel');
      function updateUI(theme) {
        icon.textContent = theme === 'dark' ? '☀' : '☽';
        label.textContent = theme === 'dark' ? 'Light' : 'Dark';
      }
      updateUI(document.documentElement.getAttribute('data-theme') || 'light');
      toggle.addEventListener('click', function() {
        const current = document.documentElement.getAttribute('data-theme');
        const next = current === 'dark' ? 'light' : 'dark';
        if (next === 'light') {
          document.documentElement.removeAttribute('data-theme');
          localStorage.removeItem('sw-theme');
        } else {
          document.documentElement.setAttribute('data-theme', 'dark');
          localStorage.setItem('sw-theme', 'dark');
        }
        updateUI(next);
      });
    })();
  </script>

</body>
</html>
