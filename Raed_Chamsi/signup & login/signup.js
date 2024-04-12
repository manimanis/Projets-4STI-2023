function validate() {
    var signup = document.getElementById("signupForm");
    var np = document.getElementById("username").value;
    var Age = document.getElementById("age").value;
    var email = document.getElementById("email").value;
    var emailcheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var pass = document.getElementById("password").value;
    if (username === "" || Age === "" || email === "" || password === "") {
        alert("Please fill in all fields.");
    } else if (username.length >= "A" || username.length <= "Z" || username == "16") {
        console.log("Valid username length")
    }
    else if (Age >= 18) {
        console.log("Valid Age")
    } else if (!emailcheck.test(email)) {
        console.log("Invalid email format. Please enter a valid email address.")
    } else if (password.length < 8) {
        console.log("invalide password")
    }
    else {
        signup.addEventListener("submit");
        alert("Login successful!");
    }
};
