<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jahanje.css">
</head>
<body>
    <div class="mainDiv">
        <div class="menuDiv">
            <img src="slike/logo-Tara.png" id="logoID">
            <a href="index.php">Naslovna</a>
            <a href="tara.php">O Tari</a>
            <a href="rafting.php">Rafting</a>
            <a href="kampovi.php">Smještaj</a>
            
            <div class="dropdown">
                <a href="#aktivnosti" class="dropbtn">Aktivnosti</a>
                <div class="dropdown-content">
                    <a href="jahanje.php">Jahanje konja</a>
                    <a href="kanjoning.php">Kanjoning</a>
                    <a href="kvadovi.php">Vožnja kvadova</a>
                </div>
            </div>

            <a href="rezervacija.php">Rezervacije</a>
            <a href="#kontakt">Kontakt</a>
        </div>

        <div class="contentDiv">
            <div class="imgDiv">
                <img src="slike/jahanje2.jpg">
            </div>
            <div class="tekstDiv">
                <h1>Jahanje konja</h1>
                <p>
                    Ukoliko želite da doživite kanjon Tare iz jedne nove perspektive, onda je jahanje
                    konja na platou kanjona Tare prava stvar za vas. "Kanjon 987" se nalazi na samoj ivici
                    kanjona Tare, na 987 metara nadmorske visine. Netaknuta priroda, čist vazduh i pogled
                    na najdublji kanjon u Evropi nikoga neće ostaviti ravnodušnim. "Kanjon 987" posjeduje
                    dvadesetak konja arapske pasmine, porijeklom sa ergele Borike iz Rogatice. U zavisnosti
                    od vaše fizičke spreme kao i prethodnog iskustva na raspolaganju su vam kraće ture jahanja
                    u samom selu Velenići gdje se nalazi "Kanjon 987", ali i cjelodnevne ture jahanja obodom
                    kanjona rijeke Tare. Prilikom cjelodnevne ture obilazimo Konjsko polje, kao i mnoštvo vidikovaca
                    na vrhu samog kanjona Tare. Na jednom od njih pravimo pauzu za ručak, koji je spremljen od
                    domaćih proizvoda uzgajanih na samom platou kanjona. Svi preduslovi su tu za jednu nezaboravnu
                    avanturu, vaše je samo da ponesete dobro raspoloženje.
                </p>
            </div>

            <div class="infoDiv">
                <div class="trajanjeDiv">
                    <img src="slike/trajanje.webp" id="trajanje">
                    <div>
                        <h2 class="infoNaslov">Trajanje</h2>
                        <p class="infoOpis">3-4 sata</p>
                    </div>
                </div>
                <div class="periodDiv">
                    <img src="slike/period.png" id="period">
                    <div>
                        <h2 class="infoNaslov">Pogodan period</h2>
                        <p class="infoOpis">Maj-septembar</p>
                    </div>
                </div>
                <div class="dobDiv">
                    <img src="slike/grupa.png" id="dob">
                    <div>
                        <h2 class="infoNaslov">Starosna dob</h2>
                        <p class="infoOpis">Od 7 do 77 godina</p>
                    </div>
                </div>
                <div class="cijenaDiv">
                    <img src="slike/cijena.png" id="cijena">
                    <div>
                        <h2 class="infoNaslov">Cijena</h2>
                        <p class="infoOpis">Sat vremena: 10e <br> Cijeli dan: 50e</p>
                    </div>
                </div>
            </div>
            <button type="submit" id="btnRezervisi" onclick="window.location.href='rezervacija.php'">REZERVIŠI ODMAH</button>
            
        </div>

        <div class="bottomInfo" id="kontakt">
            <div class="kopirajt">
                <p id="kopirjt">Copyright © Rafting rijekom Tarom 2025. Sva prava zadržana.</p>
            </div>
            <div class="kontakt">
                <div class="emailPocetna">
                    <img src="slike/email.jpg" id="imgEmail">
                    <p>rafting-rijekom-tarom@gmail.com</p>
                </div>
                <div class="telefonPocetna">
                    <img src="slike/phone2.jpg" id="imgPhone">
                    <p>+387 66 111 222</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>