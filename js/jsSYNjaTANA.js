/*const now = new Date();
const paev = now.getTime();
const kuu = now.getMonth();
const aasta = now.getFullYear();
const np = now.getMonth();

const tunnid = now.getHours();
const minutid = now.getMinutes();

const kp = now.toLocaleDateString();
const kellaaeg = now.toLocaleTimeString();
const kp_kell = now.toLocaleString();


const before = new Date(2025,5,26);

const ms = now.getTime() - before.getTime();
const paevas = ms / (1000 * 60 * 60 * 24);


console.log("Täna on " + paev + ". päev");
console.log("Kuu number " + kuu + ".");
console.log("Asta on " + aasta + ".");
console.log("Täna on " + np + ".");
console.log("Kell on " + tunnid + ":" + minutid);
console.log(kp);
console.log(kellaaeg);
console.log(kp_kell);
console.log("Ajavahemik päevades: " + paevas);
*/

function tana() {
    let now = new Date();

    let kuupaev = now.toLocaleDateString();
    let kellaaeg = now.toLocaleTimeString();
    let koos = now.toLocaleString();

    let tulemus = document.getElementById("tulemus");

    tulemus.innerHTML = "<b>kuupäev:</b> " + kuupaev + "<br>" +
        "<b>kellaaeg:</b> " + kellaaeg + "<br>" +
        "<b>Kuupäev ja kellaaeg:</b> " + koos;

    console.log("Kuupäev: " + kuupaev);
    console.log("Kellaaeg: " + kellaaeg);
    console.log("Kuupäev ja kellaaeg: " + koos);
}

function synnipaev() {
    let tulemus = document.getElementById("tulemus");
    let now = new Date();

    let synna = new Date(2008,1,13);

    let vahe = synna - now.getTime();
    let paevad = (vahe / (1000 * 60 * 60 * 24));

    tulemus.innerText = "Sünnipäevani on jäänud " + paevad + " päeva.";
    console.log("Sünnipäevani on jäänud: " + paevad + " päeva");
}