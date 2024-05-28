<?php
$conn = mysqli_connect('localhost', 'root', '', 'joinDB');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 및 회원가입</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button id="login">로그인</button>
    <button id="join">회원가입</button>

    <div class="login" id="loginModal">

    </div>
    <div class="join" id="joinModal">

    </div>
    <script src="index.js"></script>
</body>
</html>