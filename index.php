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
        <h1>로그인</h1>
        <p><input type="text" name="login-id" id="login-id" placeholder="id"></p>
        <p><input type="password" name="login-pw" id="login-pw" placeholder="password"></p>
    </div>
    <div class="join" id="joinModal">
        <h1>회원가입</h1>
        <form action="join.php" method="post" onsubmit="return sendit()  ">
            <p>
                <input type="text" name="join-id" id="join-id" placeholder="ID" onchange="document.getElementById('pass').value = 0">
                <input type="button" id="idBtn" value="중복 확인" onclick="checkID()">
            </p>
            <p id="result" style="display: none;">&nbsp;</p>
            <p><input type="text" name="name" id="name" placeholder="Name(한글)"></p>
            <p><input type="password" name="join-pw" id="join-pw" placeholder="Password"></p>
            <p><input type="password" name="join-pw-check" id="join-pw-check" placeholder="Password Check"></p>
            <input type="hidden" name="pass" id="pass" value="0">
            <p>
                <input type="submit" value="회원가입">
                <input type="reset" value="취소">
            </p>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>