function calctot() {
    const unit= parseFloat(document.getElementById('prun').value) ;
    const duree=parseFloat(document.getElementById('duree').value);
    const qte=Number(document.getElementById('qte').value);
    const msg=document.getElementById('prtot');
    const s=unit*duree*qte;
    msg.value=String(s);
}
