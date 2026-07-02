<?php
session_start();
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header("Location: app.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log in — StockWarden</title>
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
        <div class="step-tag">Welcome back</div>
        <h2>Log in to<br />StockWarden</h2>
        <p>Enter your credentials to access your inventory.</p>
      </div>

      <form action="#" method="post">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" />
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="********" autocomplete="current-password" />
          <span class="form-hint"><a href="#" style="color: var(--accent); font-family: var(--font-mono); font-size: 0.68rem; letter-spacing: 0.1em; text-decoration: none;">Forgot password?</a> <span style="color: var(--text-secondary); font-size: 0.68rem;">|</span> <a href="register.php" style="color: var(--accent); font-family: var(--font-mono); font-size: 0.68rem; letter-spacing: 0.1em; text-decoration: none;">Register</a></span>
        </div>

        <div class="checkbox-row">
          <input type="checkbox" id="remember" name="remember" />
          <label for="remember">Keep me logged in for 30 days</label>
        </div>
          <a href="app.php" class="btn btn-solid" style="width: 100%; justify-content: center; padding: 0.85rem; margin-bottom: 1.2rem;">Log in</a>
      </form>
    </div>

  </div>

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
