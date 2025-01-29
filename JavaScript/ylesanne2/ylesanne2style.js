// Marko Vassiljev
// Ülesanne 2
// 15.10.2024

let tunnid = 3;
let minutid = 45;
let sekundid = 59;

let aeg = tunnid + ":" + minutid + ":" + sekundid + "PM";

console.log(aeg);


let tsitaat = `"Mis toimps rott" - Keegi tark mai tea`;
console.log(tsitaat);


let EesNimi = "Marko";
let PerekonnaNimi = "Vassiljev";
let initials = `${EesNimi[0]}.${PerekonnaNimi[0]}.`;

let lause = `${EesNimi} ${PerekonnaNimi} nimetähed on ${initials}`;
console.log(lause); 


let epost ="karrolk@netlog.com";
console.log(epost.replaceAll("karrolk@netlog.com", "karrolk@gmail.com"));


let andmerida = "1,Marshal,Martinovic,mmartinovic0@dedecms.com,Male,40.19.226.175"
console.log(andmerida.substring(21, 33));
console.log(andmerida.substring(51));