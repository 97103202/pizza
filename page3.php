<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <link rel="stylesheet" href="pizza.css?v=002">
</head>

<body>
    <!-- begin formulier$datum = new dateTime("now");
    echo $datum->format('Y-m-D H:i:s');
-->
    <form id="form" method="post" action="">
        <div id="pic3">
            <h1 id="title3">Pizza</h1>
            <div id="choices">
                <div>
                    <h1 class="order-name">Pizza Margherita</h1>

                    <input id="number" type="number" name="PizzaMargherita" value="0" />
                    <br>
                    <br>
                    <br>
                </div>
                <div>
                    <h1 class="order-name">Pizza Funghi</h1>

                    <input id="number" type="number" name="PizzaFunghi" value="0" />
                    <br>
                    <br>
                    <br>
                </div>

                <div>
                    <h1 class="order-name">Pizza Marina</h1>

                    <input id="number" type="number" name="PizzaMarina" value="0" />
                    <br>
                    <br>
                    <br>

                </div>

                <div>
                    <h1 class="order-name">Pizza Hawai</h1>

                    <input id="number" type="number" name="PizzaHawai" value="0" />


                    <br>
                    <br>
                    <br>

                </div>

                <div>
                    <h1 class="order-name">Pizza Quatro Formaggi</h1>

                    <input id="number" type="number" name="PizzaQuatroFormaggi" value="0" />
                    <br>
                    <br>
                    <br>
                </div>


            </div>


        </div>
        <div id="pic4">
            <div class="form">
                Naam:<br> <input class="input" type="text" name="naam" placeholder="Uw naam" required /><br><br>
                adres:<br> <input class="input" type="text" name="adres" placeholder="Uw adres" required /><br><br>
                postcode:<br> <input class="input" type="text" name="postcode" placeholder="Uw postcode" required /><br><br>
                plaats: <br><input class="input" type="text" name="plaats" placeholder="Uw plaats" required /><br><br>
                besteldatum:<br> <input class="input" type="date" name="besteldatum" min="<?= date('Y-m-d'); ?>" /><br>
                <br>bezorgen of afhalen:
                <select class="input" name="bezorgen">
                    <option value="bezorgen">bezorgen</option>
                    <option value="afhalen">afhalen</option>
                </select>
                <br>
                <br>
                <input class="gegevens" type="submit" name="submit" value="gegevens versturen" /><br> <br>
                <div>
                </div>

                <?php

                $day = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");



                if (isset($_POST["submit"])) {
                    $pizzamargherita = $_POST['PizzaMargherita'];
                    $pizzafunghi = $_POST['PizzaFunghi'];
                    $pizzamarina = $_POST['PizzaMarina'];
                    $pizzahawai = $_POST['PizzaHawai'];
                    $pizzaquattroformaggi = $_POST['PizzaQuatroFormaggi'];
                    $naam = $_POST['naam'];
                    $adres = $_POST['adres'];
                    $postcode = $_POST['postcode'];
                    $plaats = $_POST['plaats'];
                    $besteldatum = $_POST['besteldatum'];
                    $margheritaprijs = 12.50;
                    $funghiprijs = 12.50;
                    $marinaprijs = 13.95;
                    $hawaiprijs = 11.50;
                    $quattroformaggiprijs = 14.50;

                    $totaalbedrag = 0;
                    $bezorgkosten = 0;
                    $bezorgkeuze = $_POST['bezorgen'];
                    if ($bezorgkeuze == "bezorgen") {
                        $bezorgkosten = 5;
                    }

                    $datum = new dateTime("now");

                    if ($datum->format("D") == "Mon") {
                        $margheritaprijs = 7.5;
                        $funghiprijs = 7.5;
                        $marinaprijs = 7.5;
                        $hawaiprijs = 7.5;
                        $quattroformaggiprijs = 7.5;
                    }

                    $totaalbedrag += $pizzahawai * $hawaiprijs;
                    $totaalbedrag += $pizzamargherita *  $margheritaprijs;
                    $totaalbedrag += $pizzafunghi * $funghiprijs;
                    $totaalbedrag += $pizzamarina * $marinaprijs;
                    $totaalbedrag += $pizzaquattroformaggi * $funghiprijs;

                    if ($bezorgkosten > 0) {
                        echo " $5 Bezorgkosten";
                        echo "<br>";
                        $totaalbedrag += $bezorgkosten;
                    }

                    if ($datum->format("D") == "Thu" && $totaalbedrag > 20) {
                        $kortingbedrag = $totaalbedrag * 0.15;
                        echo "<br> korting op vrijdag $$kortingbedrag";
                        echo "<br>";
                        $totaalbedrag = $totaalbedrag - $kortingbedrag;
                    }
                    echo "totaal: $ $totaalbedrag";
                }

                ?>
            </div>
        </div>


    </form>
</body>

</html>