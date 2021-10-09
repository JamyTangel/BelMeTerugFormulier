<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulier</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="banner">
            <img src="images/Let-op.svg" alt="letop" width="1500" height="40">
        </div>
        <div class="tekst">
            <h1>Eerlijk lenen tegen lage rente. Sinds 1983.</h1>

            "Leenattent zorgt voor een eerlijke, rechtvaardige en open benadering van haar klanten en is<br><br>
            gespecialiseerd in bemiddeling in consumptief krediet."
        </div>
        <div class="titel">
            Bel me terug
        </div>
        <div class="balk"></div>
        <div class="formulier">
            <form action="" method="POST">
                <input type="text" name="naam"
                placeholder="Uw naam*" />
                <input type="email" name="email"
                placeholder="Uw e-mail*" /><br><br>
                <input type="tel" name="telefoonnummer"
                placeholder="Uw telefoonnummer*" />
                <input type="text" name="geboortedatum"
                placeholder="Uw geboortedatum*" /><br><br>
                <input type="date" name="datum"
                placeholder="Kies een datum" />
                <input type="time" name="tijd"
                placeholder="Kies een tijd" /><br><br>
                <input type="submit" name="submit" value="Verstuur!" />
            </form>
        </div>
        <div class="footer">
            <div class="logo">
                <img src="images/logo_vertical.png" alt="logo" width="150" height="75">
            </div>
            <div class="bezoekadres">
                <h1>Bezoekadres:</h1><br>
                Leenattent<br>
                Waterringweg 107<br>
                2031 EG Haarlem
            </div>
            <div class="postadres">
                <h1>Postadres:</h1><br>
                Leenattent<br>
                Postbus 617<br>
                2003 RP Haarlem
            </div>
        </div>

        <?php

            $to = "jamy.tangel@gmail.com";
            $subject = "This is subject";


            if(isset($_POST['submit'])) {
                $naam = $_POST['naam'];
                $email = $_POST['email'];
                $telefoonnummer = $_POST['telefoonnummer'];
                $geboortedatum = $_POST['geboortedatum'];
                $datum = $_POST['datum'];
                $tijd = $_POST['tijd'];


                $message = <<<EOT
                    <h1>Beste $naam,</h1>
                    <p>Hierbij een bevestigingsmail voor een terugbelverzoek,<br>
                    telefoonnummer: $telefoonnummer<br>
                    datum: $datum<br>
                    tijd: $tijd</p>
                    <hr>
                    <p>Ik hoop u hiermee voldoende ge&iuml;nformeerd te hebben.</p>
EOT;

                    $header = "From:jamy.tangel@gmail.com \r\n";
                    $header .= "MIME-Version: 1.0\r\n";
                    $header .= "Content-type: text/html\r\n";

                    $retval = mail ($to,$subject,$message,$header);

            }

           
        ?>
</body>
</html>