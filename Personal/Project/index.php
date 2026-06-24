<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log in — StockWarden</title>
  <link rel="stylesheet" href="/css/style.css" />
</head>
<body>

  <!-- Nav -->
  <nav class="nav">
    <div class="nav-brand">
      <span class="brand-name">StockWarden</span>
      <span class="brand-tag">Inventory System</span>
    </div>
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
          <input type="password" id="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" autocomplete="current-password" />
          <span class="form-hint"><a href="#" style="color: var(--accent); font-family: var(--font-mono); font-size: 0.68rem; letter-spacing: 0.1em; text-decoration: none;">Forgot password?</a></span>
        </div>

        <div class="checkbox-row">
          <input type="checkbox" id="remember" name="remember" />
          <label for="remember">Keep me logged in for 30 days</label>
        </div>
        <a href="./app.php">
          <button type="submit" class="btn btn-solid" style="width: 100%; justify-content: center; padding: 0.85rem; margin-bottom: 1.2rem;">Log in</button>
        </a>
      </form>
    </div>

  </div>

</body>
</html>
