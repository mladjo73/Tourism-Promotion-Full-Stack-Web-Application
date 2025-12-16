<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="kanjoning.css">
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
                <img src="slike/kanjoning.webp">
            </div>
            <div class="tekstDiv">
                <h1>Kanjoning</h1>
                <p>
                   Kanjoning rijekom Hrčavkom u Nacionalnom parku Sutjeska pruža jedinstvenu 
                   priliku za avanturiste da istraže netaknutu prirodu i dožive uzbuđenje 
                   spuštanja kroz kristalno čiste vodene tokove, skakanje sa stijena i prolazak 
                   kroz uske kanjone. Sa spektakularnim pejzažima i izazovima na svakom koraku, 
                   ova tura je savršena za one koji žele da iskuse prirodu iz drugačije perspektive.
                   S druge strane, kanjon Nevidio u Crnoj Gori je prava adrenalinska atrakcija, 
                   poznata po svojim dubokim usjecima, brzim rijekama i impresivnim slapovima. 
                   Ovaj kanjon nudi izazove za iskusne kanjoniste, a svaki korak kroz Nevidio donosi 
                   nezaboravne doživljaje i prelepe prizore netaknute divljine.
                   Oba kanjoninga pružaju priliku za aktivan odmor, povezivanje sa prirodom i 
                   stvaranje avanturističkih uspomena koje će dugo ostati urezane u sećanje.
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
                        <p class="infoOpis">60e</p>
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