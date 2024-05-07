function carschanged(){
    const carVersions = {
        toyota: ["Corolla", "Camry", "RAV4"],
        volkswagen: ["Golf", "Passat", "Tiguan"],
        peugeot: ["208", "3008", "5008"],
        renault: ["Clio", "Captur", "Megane"],
        ford: ["Fiesta", "Focus", "Escape"],
        nissan: ["Micra", "Qashqai", "X-Trail"],
        hyundai: ["i20", "Tucson", "Santa Fe"],
        kia: ["Rio", "Sportage", "Sorento"],
        bmw: ["3 Series", "5 Series", "X3"],
        mercedesbenz: ["A-Class", "C-Class", "GLC"],
        dacia: ["Sandero", "Duster", "Logan"]
    };

    const cars = document.getElementById("cars").value;
    const version = document.getElementById("versions");
    
    version.innerHTML = "";

    const selectedCarVersions = carVersions[cars];

    for(let i = 0; i < selectedCarVersions.length; i++){
        const opt = new Option();
        opt.value = selectedCarVersions[i];
        opt.text = selectedCarVersions[i];
        version.options.add(opt);
    }
}
