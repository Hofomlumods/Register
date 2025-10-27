
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Html Editor</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }
    .container {
      max-width: 400px;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .logo img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
    }
    .form {
      margin-bottom: 20px;
    }
    input[type="text"] {
      width: 100%;
      height: 40px;
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button[type="submit"] {
      width: 100%;
      height: 40px;
      background-color: #2ecc71;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button[type="submit"]:hover {
      background-color: #29b866;
    }
    .terms {
      font-size: 14px;
      color: #666;
    }
    .terms a {
      text-decoration: none;
      color: #3498db;
    }
    .help {
      font-size: 14px;
      color: #666;
      margin-top: 20px;
    }
    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="icon.jpg" alt="Apri store icon">
    </div>
    <h1 style="text-align: center;">Welcome to Apri store</h1>
    <p style="text-align: center;">Type your e-mail or phone number to log in or create an account.</p>
    <div class="form">
      <form id="myForm" action="profile.php" method="post">
  <input type="text" id="contact" name="contact" placeholder="Email or Phone Number">
  <span id="error" class="error"></span>
  <button type="submit" onclick="return validateForm()">Continue</button>
</form>
      
    </div>
    <p class="terms">By continuing you agree to our <a href="terms of service.html">terms of service</a></p>
    <p>Already have an account? For further support, you may visit the <a href="contactus.html">Help Center</a> or <a href="contactus.html">contact</a> our customer service team.</p>
  </div>
  <script>
    function validateForm() {
      var contact = document.getElementById("contact").value;
      var error = document.getElementById("error");
      var emailRegex = /^[a-zA-Z0-9._%+-]+@+[a-zA-Z0-9.-]+\.com$/;
      var phoneRegex = /^(234|0)?[0-9]{10}$/; // for 11 or 13 digits
      if (contact == "") {
        error.innerHTML = "Please enter either email or phone number.";
        return false;
      } else if (emailRegex.test(contact)) {
        return true;
      } else if (phoneRegex.test(contact)) {
        return true;
      } else {
        error.innerHTML = "Please enter a valid email or phone number.";
        return false;
      }
    }
  </script>
</body>
</html>
