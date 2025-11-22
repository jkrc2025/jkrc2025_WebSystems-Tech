<?php
?>
<form method="POST" action="">
    <input type="text" name="age" placeholder="Enter age">
    <button type="submit">Search</button>
</form>
<hr>
<?php
$age = $_POST['age'] ?? '';
//$sql = "SELECT * FROM students WHERE age = $aeg"; // wrong variable name
$sql = "SELECT * FROM students WHERE age = $age"; 
/*pinalitan yung variable name para tugma dun sa POST
echo "SQL query would be: " . $sql; //para makita output pag nagtype ka kang age sa form tas sinubmit mawork na su SQL query*/
?>
