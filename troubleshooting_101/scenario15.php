<?php
$conn = mysqli_connect("localhost","root","","class_db"); //kailangan para sa db connection

// $page = $_GET['page'];

$page = isset($_GET['page']) ? intval($_GET['page']) : 0;
if($page < 0) $page = 0; 

$limit = 5;
$offset = $page * $limit;

$sql = "SELECT * FROM students LIMIT $offset, $limit";
$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['first_name'] . " " . $row['last_name'] . "<br>";
    }
} else {
    echo "No students found.";
}

/*direkta ginamit ung GET sa SQL kaya possible pag nag input ang user ki sobrang laki na page, eh mag crash ang db
kaya naggamit na intval($_GET['page']) para siguraduhin na number sna
idefault sa 0 tas ilimit negative num sa 0*/
?>