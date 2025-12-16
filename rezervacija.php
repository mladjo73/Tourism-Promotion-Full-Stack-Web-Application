<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ajax'])) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $telefon = $_POST['telefon'];
    $kamp_id = $_POST['kamp'];
    $datum_dolaska = $_POST['datum-dolaska'];
    $datum_odlaska = $_POST['datum-odlaska'];
    $aktivnost = $_POST['dodatne-aktivnosti'];
    $broj_osoba = $_POST['broj-osoba'];

    $q1 = "SELECT kapacitet FROM kampovi WHERE id = $kamp_id";
    $res1 = mysqli_query($conn, $q1);
    $row1 = mysqli_fetch_assoc($res1);
    $kapacitet = $row1['kapacitet'];

    $q2 = "SELECT SUM(broj_osoba) AS ukupno 
           FROM rezervacije
           WHERE kamp_id = $kamp_id
           AND (datum_dolaska <= '$datum_odlaska' AND datum_odlaska >= '$datum_dolaska')";
    $res2 = mysqli_query($conn, $q2);
    $row2 = mysqli_fetch_assoc($res2);
    $ukupno = $row2['ukupno'] ?? 0;

    if (($ukupno + $broj_osoba) <= $kapacitet) {
        $insert = "INSERT INTO rezervacije 
            (ime, prezime, telefon, kamp_id, datum_dolaska, datum_odlaska, aktivnost, broj_osoba)
            VALUES 
            ('$ime','$prezime','$telefon','$kamp_id','$datum_dolaska','$datum_odlaska','$aktivnost','$broj_osoba')";
        if (mysqli_query($conn, $insert)) {
            echo json_encode(["status"=>"success","message"=>"✅ Uspješno ste napravili rezervaciju!"]);
        } else {
            echo json_encode(["status"=>"error","message"=>"❌ Greška prilikom čuvanja rezervacije."]);
        }
    } else {
        echo json_encode(["status"=>"error","message"=>"⚠️ Kamp je popunjen u traženom terminu."]);
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervacija</title>
    
    <link rel="stylesheet" href="rezervacije.css">
    
    
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

        <div class="background-container">
            <img src="slike/rezervacije-pozadina.png" alt="Pozadina Tara" class="pozadina-slike">

            
            <form class="rezervacija-forma" method="POST" action="">
                <div>
                    <label for="ime">Ime <span class="required">*</span></label>
                    <input type="text" id="ime" name="ime" required>
                </div>
                <div>
                    <label for="prezime">Prezime <span class="required">*</span></label>
                    <input type="text" id="prezime" name="prezime" required>
                </div>
                <div>
                    <label for="telefon">Telefon <span class="required">*</span></label>
                    <input type="tel" id="telefon" name="telefon" required>
                </div>

                <div>
                    <label for="kamp">Kamp <span class="required">*</span></label>
                    <select id="kamp" name="kamp" required>
                        <option value="">-- Odaberite kamp --</option>
                        <?php
                        $kampovi = mysqli_query($conn, "SELECT * FROM kampovi");
                        while ($row = mysqli_fetch_assoc($kampovi)) {
                            echo "<option value='".$row['id']."'>".$row['naziv']." </option>";
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <label for="datum-dolaska">Datum dolaska <span class="required">*</span></label>
                    <input type="date" id="datum-dolaska" name="datum-dolaska" required>
                </div>
                <div>
                    <label for="datum-odlaska">Datum odlaska <span class="required">*</span></label>
                    <input type="date" id="datum-odlaska" name="datum-odlaska" required>
                </div>

                <div>
                    <label for="dodatne-aktivnosti">Dodatne aktivnosti</label>
                    <select id="dodatne-aktivnosti" name="dodatne-aktivnosti">
                        <option value="">-- Odaberite aktivnost --</option>
                        <option value="jahanje">Jahanje konja</option>
                        <option value="kanjoning">Kanjoning</option>
                        <option value="kvad-1h">Vožnja kvada 1h</option>
                        <option value="kvad-cjelodnevna">Cjelodnevna Kvad avantura</option>
                    </select>
                </div>

                <div>
                    <label for="broj-osoba">Broj osoba <span class="required">*</span></label>
                    <input type="number" id="broj-osoba" name="broj-osoba" min="1" required>
                </div>

                <button type="submit">Pošalji rezervaciju</button>
            </form>
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

    <?php if (isset($_SESSION['poruka'])): ?>
        <div class="overlay-poruka">
            <div class="poruka-box <?php echo $_SESSION['poruka'][1]; ?>">
                <?php echo $_SESSION['poruka'][0]; ?>
            </div>
        </div>
        <?php unset($_SESSION['poruka']); ?>
    <?php endif; ?>

    <script src="rezervacija.js"></script>
    
</body>
</html>