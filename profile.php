<?php
// Process form data
$contact = $_POST['contact'];
$password = $_POST['password'];
$age = $_POST['age'];
$location = $_POST['location'];
$gender = $_POST['gender'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];

// Database connection settings
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "apri-store";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (empty($password)) {
  $sql = "INSERT INTO users (contact) VALUES ('$contact')";
  if ($conn->query($sql) === TRUE) {
    header("Location: password.html?contact=$contact");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} elseif (empty($age)) {
  $stmt = $conn->prepare("UPDATE users SET password = ? WHERE contact = ?");
  $stmt->bind_param("ss", $password, $contact);
  if ($stmt->execute()) {
    header("Location: profile.html?contact=$contact");
    exit;
  } else {
    echo "Error: " . $stmt->error;
  }
} else {
  $stmt = $conn->prepare("UPDATE users SET age = ?, location = ?, gender = ?, fullname = ?, username = ? WHERE contact = ?");
  $stmt->bind_param("isssss", $age, $location, $gender, $fullname, $username, $contact);
  if ($stmt->execute()) {
    header("Location: home.php?username=$username");
    exit;
  } else {
    echo "Error: " . $stmt->error;
  }
}
$conn->close();
?>
