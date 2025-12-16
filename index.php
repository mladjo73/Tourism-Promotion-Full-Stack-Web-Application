<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
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

        <div class="imgDiv">
            <img src="slike/Tara4.png" alt="Rijeka Tara" id="background-Tara">
            <p class="overlayText1">
                DOBRO DOŠLI NA RIJEKU TARU
            </p>
        </div>

        <div class="pocetnaTara">
            <label id="naslovTara">O Tari</label><br>
            <p id="aboutTara">
                Rijeka Tara je rijeka koja teče kroz Crnu Goru i Bosnu i Hercegovinu, 
                a poznata je po svom dubokom kanjonu koji je najdublji u Evropi. Nastaje spajanjem 
                rijeka Opasanice i Veruše ispod planine Komovi. Posljednjih 40 km toka 
                rijeke Tare nalazi se u Bosni i Hercegovini, a na nekim mjestima 
                čini granicu između dvije države.  U mjestu Šćepan Polje, 
                Tara se spaja s rijekom Pivom i zajedno čine rijeku Drinu. 
            </p>
            <button type="submit" class="btnVise" onclick="window.location.href='tara.php'">Više</button>
        </div>
        <hr>

        <div class="rafting">
            <label id="pocetnaRafting">Rafting</label>
            <div class="raftingContent">
                <img src="slike/raftingTara.jpg" alt="Rafting Tara" id="camacTara">

                 <p id="raftingOpis">
                    Rafting spada u grupu ekstremnih sportova i kao takav nudi jedno nezaboravno iskustvo.
                    U zadnje vrijeme postaje sve popularniji vid aktivnog odmora među turistima.
                    Ukoliko želite da doživite jedno skroz novo iskustvo, puno adrenalina i vrhunske zabave,
                    rafting na rijeci Tari je pravi izbor za vas. Čist vazduh, čista voda i netaknuta priroda probudiće
                    sva vaša čula i učiniće da zaboravite na svakodnevne probleme.<br>

                    <button type="submit" class="btnVise" onclick="window.location.href='rafting.php'">Više</button>
                </p>
            </div>
        </div>
        <hr>

        <div class="pocetnaSmjestaj">
            <label id="raftingKampovi">Smještaj - rafting kampovi</label>
            <img src="slike/bastasi_Tara.jpg" alt="Bastasi" id="imgSmjestaj">
            <p id="smjestaj">
                Usluge smještaja i organizovanja raftinga se uglavnom vrše u rafting kampovima.
                Postoji veliki broj rafting kamova koji pružaju ove usluge, a najviše njih se nalazi u 
                mjestu Bastasi.
            </p>
            <button type="submit" class="btnVise" onclick="window.location.href='kampovi.php'">Više</button>
        </div>
        <hr>

        <div class="pocetnaAktivnosti">
            <label id="aktivnosti">Ostale aktivnosti</label>
            <div class="contentAktivnosti">
                <div class="jahanje">
                    <img src="slike/jahanje.jpeg" alt="Jahanje konja" id="imgJahanje" class="imgAktivnosti">
                    <label class="lblAktivnosti">Jahanje konja</label>
                    <p>Jedinstveno iskustvo jahanja konja na vrhu kanjona Tare</p>
                    <button type="submit" class="btnPrikazi" onclick="window.location.href='jahanje.php'">Prikaži još</button>
                </div>
                <div class="kanjoning">
                    <img src="slike/kanjoning.webp" alt="Kanjoning" id="imgKanjoning" class="imgAktivnosti">
                    <label class="lblAktivnosti">Kanjoning</label>
                    <p>Zavirite u čarobni kanjon rijeke Hrčavke koji nikoga ne ostavlja ravnodušnim</p>
                    <button type="submit" class="btnPrikazi" onclick="window.location.href='kanjoning.php'">Prikaži još</button>
                </div>
                <div class="kvadovi">
                    <img src="slike/kvadovi.jpg" alt="Kvadovi" id="imgKvadovi" class="imgAktivnosti">
                    <label class="lblAktivnosti">Vožnja kvadova</label>
                    <p>Vožnja kvadova kroz kanjon Tare ili korz Nacionalni park Sutjeska</p>
                    <button type="submit" class="btnPrikazi" onclick="window.location.href='kvadovi.php'">Prikaži još</button>
                </div>
            </div>
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