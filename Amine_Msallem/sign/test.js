function verif(){
    let name = document.getElementById("fn").value;
    let classe = document.getElementById("classe");
    let id = document.getElementById("id").value;
    let email = document.getElementById("mail").value;
    let tel = document.getElementById("tel").value;
    let pas = document.getElementById("pas").value;
    let pas1 = document.getElementById("pas1").value;
    
    if(!alphabetique(name)|| (name.length>30) || (name.length<3)){
        alert("Name laZem ykoun alphabetique w bin 3 w 30 !!!");
        return false;
    }
    if (id.length!=8 || !not_n(id)){
        alert("lazem id s7i777 !!!!!");
        return false;
    }
    if(classe.value==0 || classe.value==""){
        alert("chnoi section mta3ek");
        return false;
    }
    if(!verif_mail(email)){
        alert("hadha email 8alet!!!!!");
        return false;
    }
    
    if (tel.length!=8 || !not_n(tel)){
        alert("lazem nomroooook !!!!!");
        return false;
    }
    if ((pas !== pas1) || pas==""){
        alert("fama mochkla fil password !!!!!");
        return false;
    }
    return true;
}
function alphabetique(ch){
    for(let i=0 ; i<ch.length ; i++){
        let valide = (ch[i]>="A" || ch[i]<="Z") ||  (ch[i]>="a" || ch[i]<="z");
        if (!valide){
            return false;
        }return true;
    }
}


function verif_mail(ch) {
    let a = ch.indexOf("@");
    let p = ch.lastIndexOf(".");
    if (a == -1 || p == -1 || p < a) {
        return false;
    }
    let d = ch.substring(a + 1, p);
    let t = ch.substring(p + 1); 
    if (d !== "gmail" || t !== "com") {
        return false;
    }

    return true;
}
function not_n(ch){
    for(let i=0 ; i<ch.length ; i++){
        let valide = (ch[i]>="0" || ch[i]<="9");
        if (!valide){
            return false;
        }return true;
    }
}


function verif1(){
    let mail = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    
    if(mail==""){
        alert("Erreur");
        return false;
    }

    if ((pass == "")){
        alert("Erreur");
        return false;
    }
    return true;
}