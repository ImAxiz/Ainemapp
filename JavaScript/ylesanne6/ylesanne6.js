// Kirjuta switch-case programm, mis kontrollib, kas sisestatud number on positiivne, negatiivne või null. Programm peaks väljastama vastava teate vastavalt sisestatud numbri väärtusele.
// Sinu ülesanne on luua JavaScripti switch-case programm, mis aitab kontrollida restorani laudade broneeringuid. Programm peaks vastavalt broneeringu arvule määrama laua suuruse.
// Kirjuta programm, mis saab sisendina broneeringu arvu ja väljastab vastavalt järgmiseid teateid:
// Kui broneeringu arv on 1 või 2, väljasta teade: “Valige laud kahele inimesele.”
// Kui broneeringu arv on 3 või 4, väljasta teade: “Valige laud neljale inimesele.”
// Kui broneeringu arv on 5 või 6, väljasta teade: “Valige laud kuuele inimesele.”
// Kui broneeringu arv on rohkem kui 6, väljasta teade: “Valige suur laud.”

function polarity() {
    const input = prompt("Sisesta arv");
    const number = parseFloat(input);
    if (isNaN(number)) {
        alert(`Sisestatud väärtus (${input}) ei ole number`)
    }
    switch (true) {
        case (number < 0): {
            alert(`${number} on negatiivne`);
            break;
        }
        default:{
            alert(`${number} on positiivne`);
            break;
        }
    }
}

function broneering() {
    const input = prompt("Sisetage broneeringu arv");
    const arv = parseInt(input);
    if (isNaN(arv)) {
        alert(`Sisestatatud väärtus (${input}) ei ole sobilik arv`)
    }
    switch (number) {
        case 1:
            alert(`Valige laud kahele inimesele`)
            break;
        case 2:
            alert(`Valige laud kahele inimesele`)
            break;
        case 3:
            alert(`Valige laud neljale inimesele`)
            break;
        case 4:
            alert(`Valige laud neljale inimesele`)
            break;
        case 5:
            alert(`Valige laud kuuele inimesele`)
            break;
        case 6:
            alert(`Valige laud kuuele inimesele`)
            break;
        case 7:
            alert(`Valige suur laud`)
    }
}