function init(){
    const container=document.getElementById("user_cont")
    const user=document.getElementById("username")
    if (user.value!="null"){
        const elem=document.createElement("img")
        elem.setAttribute("src","users")
        container.removeChild(user)
        container.appendChild()
    }
}
function verifemail(email){
    if (email.indexOf("@") == -1 || email.lastIndexOf(".") == -1){
        alert("Email incorrect");
        return false
    }
    let ch1=email.subString(0,email.indexOf("@"))
    let ch2=email.subString(email.indexOf("@",1),email.lastIndexOf("."))
    let ch3=email.subString(email.lastIndexOf(".")+1)
    if ((ch1.length<2)||(ch2.length<2)|| (ch3.length!=2 || ch3.length!=3)||(!alphanum(ch1))||!alphanum(ch2)){
        alert("Email incorrect");
        return false
    }
    return true
}
function confirm(){
    const username=document.getElementById("username").value
    const email=document.getElementById("email").value
    const password=document.getElementById("password").value
    const confirm_password=document.getElementById("confirm_password").value
    if (username==""){
        alert("Insert Username")
        return false
    }
    if (email==""){
        alert("Insert E-mail")
        return false
    }
    if (password==""){
        alert("Insert Password")
        return false
    }
    if (password.length<5){
        alert("Password's lenght should be at least 8")
        return false
    }
    if (verifemail(email)==false){
        alert("Invalid E-mail")
        return false
    }
    if (password!=confirm_password){
        alert("Password and Confirmed Password doesn't match")
        return false
    }
    return true
    
}
function login(){
    const username=document.getElementById("username").value
    const password=document.getElementById("password").value
    if (username==""){
        alert("Insert Username")
        return false
    }
    if (password.length<5){
        alert("Password's lenght should be at least 8")
        return false
    }
    return true
}