function verif() {
    let sc_ctr1 = parseFloat(document.getElementById("sc_ctr1").value);
    let sc_s = parseFloat(document.getElementById("sc_s").value);
    let inf_ctr1 = parseFloat(document.getElementById("inf_ctr1").value);
    let inf_s = parseFloat(document.getElementById("inf_s").value);
    let math_ctr1 = parseFloat(document.getElementById("math_ctr1").value);
    let math_s = parseFloat(document.getElementById("math_s").value);
    let phy_ctr1 = parseFloat(document.getElementById("phy_ctr1").value);
    let phy_ctr2 = parseFloat(document.getElementById("phy_ctr2").value);
    let phy_s = parseFloat(document.getElementById("phy_s").value);
    let arb_s = parseFloat(document.getElementById("arb_s").value);
    let fr_ctr1 = parseFloat(document.getElementById("fr_ctr1").value);
    let fr_ctr2 = parseFloat(document.getElementById("fr_ctr2").value);
    let fr_s = parseFloat(document.getElementById("fr_s").value);
    let an_ctr1 = parseFloat(document.getElementById("an_ctr1").value);
    let an_ctr2 = parseFloat(document.getElementById("an_ctr2").value);
    let an_s = parseFloat(document.getElementById("an_s").value);
    let phi_ora = parseFloat(document.getElementById("phi_ora").value);
    let phi_ctr1 = parseFloat(document.getElementById("phi_ctr1").value);
    let phi_s = parseFloat(document.getElementById("phi_s").value);
    let op_ctr1 = parseFloat(document.getElementById("op_ctr1").value);
    let op_s = parseFloat(document.getElementById("op_s").value);
    let s_ctr1 = parseFloat(document.getElementById("s_ctr1").value);
    let s_s = parseFloat(document.getElementById("s_s").value);

    if (!valide_Number(sc_ctr1) || !valide_Number(sc_s) ||
        !valide_Number(inf_ctr1) || !valide_Number(inf_s) ||
        !valide_Number(math_ctr1) || !valide_Number(math_s) ||
        !valide_Number(phy_ctr1) || !valide_Number(phy_ctr2) || !valide_Number(phy_s) ||
        !valide_Number(arb_s) ||
        !valide_Number(fr_ctr1) || !valide_Number(fr_ctr2) || !valide_Number(fr_s) ||
        !valide_Number(an_ctr1) || !valide_Number(an_ctr2) || !valide_Number(an_s) ||
        !valide_Number(phi_ora) || !valide_Number(phi_ctr1) || !valide_Number(phi_s) ||
        !valide_Number(op_ctr1) || !valide_Number(op_s) ||
        !valide_Number(s_ctr1) || !valide_Number(s_s)) {
        alert("Lazem number between 0 and 20 !!!");
        return false;
    }

    let sc = (sc_ctr1+(sc_s*2))/3;
    let info = (inf_ctr1+ (inf_s*2))/3;
    let math = (math_ctr1 + (math_s * 2)) / 3;
    let phy = (phy_ctr1 + phy_ctr2 + (phy_s * 2)) / 4;
    let fr = (fr_ctr1 + fr_ctr2 + (fr_s * 2)) / 4;
    let ang = (an_ctr1 + an_ctr2 + (an_s * 2)) / 4;
    let phi = (phi_ora + phi_ctr1 + (phi_s * 2)) / 4;
    let option = (op_ctr1 + (op_s * 2)) / 2;
    let sport = (s_ctr1 + s_s ) / 2;
    let totale = (sc+ info + (math * 4) + (phy * 4) + fr + ang + phi + option + sport) / 15;

    document.getElementById("moy").innerText = "Total: " + totale.toFixed(2);
    return true; 
}

function valide_Number(n) {
    return !isNaN(n) && n >= 0 && n <= 20;
}

function not_n(ch) {
    for (let i = 0; i < ch.length; i++) {
        let valide = (ch[i] >= "0" && ch[i] <= "9");
        if (!valide) {
            return false;
        }
    }
    return true;
}
