<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Login</title>
  <style>
    body {
      height: 100vh;
      background-color: #ffd1dc; /* O el color pastel que prefieras */
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .card {
      border-radius: 25px;
      position: relative;
      top: 60px;
      width: 90%;
      max-width: 400px;
    }
    .logo {
      position: absolute;
      top: 160px;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
</head>
<body>
  <!-- Reemplazar "logo_de_noemoreno" con tu logo -->
  <div class="logo mx-auto text-center">
    <img src="../assets/img/logo.png" alt="logo" width="100">
  </div>
  <div class="card shadow p-3 mb-5 bg-body rounded">
    <div class="card-body">
      <form method="POST" action="login.php">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
      <div class="text-center mt-3">
        <a href="reset_password.php">Forgot password?</a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>