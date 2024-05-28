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