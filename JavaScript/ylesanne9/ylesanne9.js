function myName() {
    alert("Marko Vassiljev");
}
const myNameNoolefunktsioon = () => {
    alert("Marko Vassiljev");
};


function monthsEst() {
    const months = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
    const dayOfTheMonth = document.getElementById("dayOfTheMonth").value;
    const [day, month, year] = dayOfTheMonth.split(".");
    const monthIndex = parseInt(month, 10) - 1;
    document.getElementById("monthResult").innerText = `${day}. ${months[monthIndex]} ${year}`;
}

function totalAndAverage() {
    const arvud = document.getElementById("numbrid").value.split(",").map(Number);
    const kogusumma = arvud.reduce((summa, arv) => summa + arv, 0);
    const keskmine = kogusumma / arvud.length;
    document.getElementById("summaKeskmineTulemus").innerText = `Summa: ${kogusumma}, Keskmine: ${keskmine}`;
}

const secretMessage = () => {
    const message = document.getElementById("message").value;
    const secret = message.replace(/[aeiouõäöüAEIOUÕÄÖÜ]/g, "*");
    document.getElementById("secretMessageResult").innerText = secret;
};

const findUnique = () => {
    const names = document.getElementById("names").value.split(",");
    const unique = names.filter((name, index) => names.indexOf(name) === index);
    document.getElementById("uniqueNamesResult").innerText = unique.join(", ");
};