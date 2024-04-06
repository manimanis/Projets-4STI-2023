function calctot() {
    const unit= parseFloat(document.getElementById('prun').value) ;
    const duree=parseFloat(document.getElementById('duree').value);
    const qte=Number(document.getElementById('qte').value);
    const msg=document.getElementById('prtot');
    const s=unit*duree*qte;
    msg.value=String(s);
}
function verif() {
    const np=document.getElementById("np").value;
    const g1=document.getElementById("g1").checked;
    const g2=document.getElementById("g2").checked;
    const dob=document.getElementById("dob").value;
    const tel=document.getElementById("tel").value;
    const dt=new Date();
    const date=new Date(dob);
    if (np.indexOf(" ")==-1 || np.length>64) {
        return false;
    }
    if (g1==false && g2==false) {
        return false;
    }
    if (tel[0]!="2" && tel[0]!="5" && tel[0]!="9") {
        return false;
    }
    if (dt-date<0) {
        return false;
    }
    return true
}
function verif2() {
    const lib=document.getElementById("lib").value;
    const nb=Number(document.getElementById("nbr").value);
    const prix=Number(document.getElementById("prix").value);
    if (lib.length>32) {
        return false;
    }
    if (nb<0 || prix<0.1) {
        return false;
    }
    return true;
}