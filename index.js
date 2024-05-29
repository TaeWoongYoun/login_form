let joinOpen = document.getElementById('join')
let loginOpen = document.getElementById('login')
let joinModal = document.getElementById('joinModal')
let loginModal = document.getElementById('loginModal')

joinOpen.addEventListener('click', function(){
    joinModal.style.display = 'block';
})

loginOpen.addEventListener('click', function(){
    loginModal.style.display = 'block';
})

const sendit= () => {
    const userid = document.getElementById('join-id');
    const name = document.getElementById('name');
    const userpw = document.getElementById('join-pw');
    const userpw_ch = document.getElementById('join-pw-check');
    const pass = document.getElementById('pass');

    if(userid.value == ''){
        alert('아이디를 입력해주세요.');
        userid.focus();
        return false;
    }

    if(userid.value.length < 4 || userid.value.length > 12){
        alert('아이디를 4자 이상 12자 이하로 입력해주세요');
        userid.focus();
        return false;
    }

    if(name.value == ''){
        alert('이름을 입력해주세요.');
        name.focus();
        return false;
    }

    if(name.value == ''){
        alert('이름을 입력해주세요.');
        name.focus();
        return false;
    }

    if(name.value < 2){
        alert('이름을 2자 이상 입력해주세요.');
        name.focus();
        return false;
    }

    if(userpw.value == ''){
        alert('비밀번호를 입력해주세요.');
        userpw.focus();
        return false;
    }

    if(userpw_ch.value == ''){
        alert('비밀번호를 확인해주세요.');
        userpw_ch.focus();
        return false;
    }

    if(userpw.value.length < 4 || userpw.value.length > 20){
        alert('비밀번호를 8자 이상 20자 이하로 입력해주세요.');
        userpw.focus();
        return false;
    }

    if (pass.value == 0){
        alert('아이디 중복 확인 바람.');
        return false;
    }

    if(userpw.value != userpw_ch.value){
        alert('비밀번호가 다릅니다. 다시 입력해주세요.');
        userpw.focus();
        return false; 
    }


}

const checkID = () => {
    const userid = document.getElementById('join-id');
    const result = document.getElementById('result');

    if (userid.value == '') {
        alert('아이디를 입력해주세요.');
        userid.focus();
        return false;
    }

    if (userid.value.length < 4 || userid.value.length > 12) {
        alert('아이디를 4자 이상 12자 이하로 입력해주세요');
        userid.focus();
        return false;
    }

    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = () => {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let txt = xhr.responseText.trim();
                if (txt == "O") {
                    result.style.display = "block";
                    result.style.color = "green";
                    result.innerHTML = "사용할 수 있는 아이디입니다.";
                    document.getElementById('pass').value = 1;
                } else {
                    result.style.display = "block";
                    result.style.color = "red";
                    result.innerHTML = "중복된 아이디입니다.";
                    userid.focus();
                    userid.addEventListener('keydown', function() {
                        result.style.display = 'none';
                    });
                }
            }
        }
    };

    xhr.open("GET", "checkId.php?userid=" + encodeURIComponent(userid.value), true);
    xhr.send();
};