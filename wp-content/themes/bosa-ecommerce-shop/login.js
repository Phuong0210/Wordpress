let loginAPI = 'https://62904135665ea71fe12f6eef.mockapi.io/login';


function start() {
    getLogin(handleLogin);
}
start()
function getLogin(callback) {
    fetch(loginAPI)
        .then(function (response) {
            return response.json();
        })
        .then(callback)
}

function handleLogin(data) {
    var loginBtn = document.querySelector('#login');
    loginBtn.onclick = function () {
        var email = document.querySelector('input[name="email"]').value;
        var password = document.querySelector('input[name="password"]').value;
        data.forEach(data => {
            if (data.email == email && data.password == password) {
                alert("thanh cong");
                // window.location.href = "./"
                document.querySelector('input[name="email"]').value = ' ';
                document.querySelector('input[name="password"]').value = ' ';
            }
        });
    }
}