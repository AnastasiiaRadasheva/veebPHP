let raamat = {
    pealkiri: "Tarkuse tee",
    autor: "Jaan Tamm",
    aasta: 2020,

    kuvaKirjeldus() {
        let output1 = document.getElementById('output1');
        let msg = this.pealkiri + " — " + this.autor + ", " + this.aasta;
        output1.innerHTML = 'Meetod, mis kuvab raamatu kirjelduse. ' + msg + '<br>';
        console.log(msg);
    },

    muudaAasta(uusAasta) {
        this.aasta = uusAasta;
        let msg = 'Raamatu "' + this.pealkiri + '" uus aasta: ' + this.aasta;
        document.getElementById('output1').innerHTML += 'Meetod, mis muudab väljaandmise aastat ja prindi tulemused konsooli: ' + msg + '<br>';
        console.log(msg);
    }
};


let raamatukogu = {
    raamatud: [
        { pealkiri: "Tarkuse tee", autor: "Jaan Tamm", aasta: 2020 },
        { pealkiri: "Mõtete jõud", autor: "Kati Kask", aasta: 2015 },
        { pealkiri: "Elu täis", autor: "Mati Maasikas", aasta: 1999 }
    ],

    kuvaRaamatud() {
        let output = "";
        this.raamatud.forEach(r => {
            output += r.pealkiri + " — " + r.autor + ", " + r.aasta + "<br>";
            console.log(r.pealkiri + " — " + r.autor + ", " + r.aasta);
        });
        document.getElementById('output').innerHTML = output;
    },

    kuvaKoguarv() {
        let kogu = "Raamatukogus on " + this.raamatud.length + " raamatut";
        document.getElementById('output').innerHTML += '<br>' + 'Koguarv :' +  kogu + '<br>';
        console.log(kogu);
    },

    lisaRaamat(pealkiri, autor, aasta) {
        this.raamatud.push({ pealkiri, autor, aasta });
        console.log("Lisati raamat: ${pealkiri} — ${autor}, ${aasta}");


        this.kuvaRaamatud();
        this.kuvaKoguarv();
    },

    raamatudParast2000() {
        let paras = this.raamatud.filter(r => r.aasta > 2000).length;
        let prst = "Pärast 2000. aastat: " + paras + " raamatut";
        document.getElementById('output').innerHTML += prst + '<br>';
        console.log(prst);
    },

    otsiRaamatPealkirjaJargi(pealkiri) {
        let leid = this.raamatud.filter(r => r.pealkiri == pealkiri); // Otsib täpselt vastava pealkirja järgi
        let msg = "Leitud raamatud pealkirjaga '" + pealkiri + "': " + leid.length + " raamatut";
        console.log(msg);
        document.getElementById('output').innerHTML +='<br>'+ msg + '<br>';
    }

};

raamat.kuvaKirjeldus();
raamat.muudaAasta(2023);



raamatukogu.kuvaRaamatud();
raamatukogu.kuvaKoguarv();
raamatukogu.lisaRaamat("Uus raamat", "Marek Metsa", 2022);
raamatukogu.raamatudParast2000();
//minu meetod
raamatukogu.otsiRaamatPealkirjaJargi("Elu täis");
