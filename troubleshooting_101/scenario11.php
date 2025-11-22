<!-- Fixed form & PHP -->
<form method="GET" action="scenario11.php">
  <input type="email" name="email" placeholder="Enter email">
  <button type="submit">Submit</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","class_db");

// $email = $_POST['email'];

$email = $_GET['email'] ?? '';

if($email) {
    echo "Email: $email";
} else {
    echo "No email submitted yet.";
}

/*dapat palagi tugma ang form method at PHP superglobal, kaya since GET yung form method dapat $_GET su gagamiton
tas nag eerror sa browser kaya nilagyan q ng '??' para may fallback if wala pang input, para maiwasan su undefined index warning.
*/
?>
