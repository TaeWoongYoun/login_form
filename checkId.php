<?php $conn = mysqli_connect('localhost', 'root', '', 'joinDB');?>
<?php
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$userid = mysqli_real_escape_string($conn, $_GET['userid']);
$sql = "SELECT id FROM infor WHERE id='$userid'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $data = mysqli_fetch_array($result);
    echo isset($data['id']) ? "X" : "O";
} else {
    echo "Query error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
