function validate() {
    var login = document.getElementById("loginForm");
    var np = document.getElementById("username").value;
    var pass = document.getElementById("password").value;
    if (username == "" && password == "") {
        alert("Invalid username or password");
    } else {
        login.addEventListener("submit");
        alert("Login successful!");
    }
};