<?php $conn = mysqli_connect('localhost', 'root', '', 'joinDB');?>

<?php
    // POST 요청으로 전달된 데이터를 받아옵니다.
    $userid = mysqli_real_escape_string($conn, $_POST['join-id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $userpw = mysqli_real_escape_string($conn, $_POST['join-pw']);

    // 올바른 SQL INSERT 구문을 작성합니다.
    $sql = "INSERT INTO infor (id, name, password) VALUES ('$userid', '$name', '$userpw')";
    mysqli_query($conn, $sql);


    echo "<script>
            alert('회원가입 완료')
            location.href='index.php?id=$name'
        </script>"
?>
