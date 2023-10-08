
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pop-up Login</title>
  <style>
    /* Styles for the pop-up container */
    .popup-container {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      align-items: center;
      justify-content: center;
      z-index: 1000;
    }

    /* Styles for the login form */
    .login-form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    /* Style for close button */
    .close-button {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <!-- Button to open the login pop-up -->
  <button onclick="openLogin()">Login</button>

  <!-- The pop-up container -->
  <div id="loginPopup" class="popup-container">
    <div class="login-form">
      <span class="close-button" onclick="closeLogin()">&times;</span>
      <h2>Login</h2>
      <form method="post" action="login_process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
      </form>
    </div>
  </div>

  <script>
    // JavaScript functions to show and hide the pop-up
    function openLogin() {
      document.getElementById('loginPopup').style.display = 'block';
    }

    function closeLogin() {
      document.getElementById('loginPopup').style.display = 'none';
    }
  </script>
</body>
</html>
