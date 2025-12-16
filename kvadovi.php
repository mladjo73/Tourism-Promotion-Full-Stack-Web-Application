<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="kvadovi.css">
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
                <img src="slike/kvadovi.jpg">
            </div>
            <div class="tekstDiv">
                <h1>Vožnja kvadova</h1>
                <p>
                   Vožnja kvadovima nudi uzbudljive mogućnosti za sve ljubitelje avanture i prirode. 
                   Možete iznajmiti kvad na jedan čas i uživati u vožnji kroz predivni kanjon Tare, gde ćete 
                   doživeti spektakularne prizore i adrenalinsku vožnju. Za one željne duže avanture, tu je 
                   cjelodnevna vožnja kvadovima na vrhu kanjona Tare, koja pruža još više uzbuđenja i 
                   impresivnih pejzaža. Takođe, postoji i opcija vožnje kvadova u Nacionalnom parku Sutjeska, 
                   gde ćete imati priliku da istražite netaknutu prirodu i uživate u jedinstvenom doživljaju 
                   vožnje kroz šumske i planinske predjele. Ove ture su prilagođene i za početnike 
                   i za iskusne vozače, sa profesionalnim vodičima koji će se pobrinuti za 
                   sigurnost i kvalitetno iskustvo. Tokom vožnje, imaćete priliku da zastanete na 
                   posebnim vidikovcima i napravite nezaboravne fotografije. Kvadovi su idealni za 
                   druženje i stvaranje uspomena sa prijateljima ili porodicom, a svaki trenutak 
                   proveden u prirodi biće prava osvežavajuća avantura. Bez obzira na to da li 
                   želite kratku vožnju ili cjelodnevni izlet, vožnja kvadovima pruža savršenu 
                   kombinaciju adrenalina, lepote i opuštanja.
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
                        <p class="infoOpis">Od 16 do 77 godina</p>
                    </div>
                </div>
                <div class="cijenaDiv">
                    <img src="slike/cijena.png" id="cijena">
                    <div>
                        <h2 class="infoNaslov">Cijena</h2>
                        <p class="infoOpis">Jedan sat: 50e<br>Cijeli dan: 100e</p>
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