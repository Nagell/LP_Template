<!DOCTYPE html>

<html>

<head>
    <?php /* echo HEADER_CONTENT($SYSTEM_PROPERTIES,$PROPERTIES,$XML_DATA); */ ?>
    <!-- Forbid scaling for mobile devices -->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="mwdkbody">
    <!-- Cancel Button. Please provide a reference to a page for the cancel process -->
    <div class="cancelWrapper">


        <a href="#">
            <div class="cancelButton">
                <span>X</span>
            </div>
        </a>
    </div>

    <!-- Product infos -->
    <div class="container">
        <div class="mainWrapper">
            <div class="header">
                <div class="topInfo">
                    <h2 class="mwdkh2 prodName">"Product"</h2>
                </div>

                <!-- When showing the template in a landscape view, text will float around this picture -->
                <div class="productPic">
                    <!-- <img src="img/main.jpg" alt="Produktbild" /> -->
                </div>
                <div class="clear"></div>
            </div>

            <div class="main">

                <div class="columns big-top-margin">

                    <div class="column is-6 no-bottom-padding"></div>

                    <div class="column is-5 sides-padding">
                        <div class="notification main-notification">

                            <div class="content">

                                <!-- Supplier infos -->
                                <div class="dabContainer">
                                    <p class="dabName">"Firma - Name" GmbH </p>
                                    <p class="dabProdName">"Product"</p>
                                </div>

                                <div class="details">
                                    <div class="description">
                                        "Product" - &uuml;ber 100 Games, Apps, Videos ...
                                    </div>
                                </div>
                            </div>

                            <br style="clear: both;">

                            <!-- error output -->
                            <div id="errorcontainer">
                            </div>

                            <div class="legal">
                                <!-- Please change action and method according to your environment -->
                                <form action="" method="POST">
                                    <div class="msisdnInput">
                                        <label for="msisdnInput">Bitte TAN eingeben:</label>
                                        <input type="text" class="mwdkInput input" id="msisdnInput" placeholder="TAN" />
                                    </div>

                                    <div class="aboContainer ">
                                        Abgerechnet wird &uuml;ber Ihre an den Anbieter &uuml;bermittelte Handynummer.
                                        Preis f&uuml;r das Abo: X,XX Euro pro 7 Tage. Das Mobidoo Abo ist jederzeit
                                        &uuml;ber den Kundenservice 0800 1234 567 (kostenlos) k&uuml;ndbar.
                                    </div>

                                    <div class="aboContainer notRendered">
                                        Abgerechnet wird über Ihre an den Anbieter &uuml;bermittelte Handynummer. Preis
                                        f&uuml;r das Produkt: X,XX Euro.
                                    </div>

                                    <div class="buyButton">
                                        <div class="formContainer">
                                            <div class="btnContainer">
                                                <div>
                                                    <button type="submit" class="button smaller-text" id="kaufenBtn">
                                                        <span>Zahlungspflichtig bestellen</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="btnContainer">
                                                <div>
                                                    <button class="button  notRendered" id="backButton">
                                                        <span>Zur&uuml;ck</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php /* echo GET_WIFI_FORM_CONTENT($PROPERTIES,$SYSTEM_PROPERTIES,$USEROBJECT,$XML_DATA); */ ?>
                                </form>
                            </div>

                            <br style="clear: both;" />

                            <!-- footer menu -->
                            <div class="footerLinks">
                                <div class="pink">
                                    <a href="#">Hilfe</a>
                                </div>
                                <div class="pink">
                                    <a href="#">Widerruf</a>
                                </div>
                                <div class="pink">
                                    <a href="#">Impressum</a>
                                </div>
                                <div class="pink ">
                                    <a href="#">K&uuml;ndigung</a>
                                </div>
                                <div class="pink">
                                    <a href="#">AGB</a>
                                </div>
                                <div class="pink">
                                    <a href="#">Datenschutz</a>
                                </div>
                            </div>

                            <!-- logos -->

                            <!-- <div class="logoZEPH">

                            </div>  -->
                            <div class="logos logos-white">
                                <div class="columns">
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/Zahl_einfach_Logo_w.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_telekom_w.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_vodafone_w.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_o2_w.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_mobilcom_w.png" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="logos logos-black">
                                <div class="columns">
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/Zahl_einfach_Logo_b.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_telekom_b.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_vodafone_b.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_o2_b.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_mobilcom_b.png" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="logos logos-color">
                                <div class="columns">
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/Zahl_einfach_Logo.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_telekom.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_vodafone.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_o2.png" />
                                        </span>
                                    </div>
                                    <div class="column">
                                        <span class="align-vertical">
                                            <img src="img/logos/logo_mobilcom.png" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-1"></div>

                </div>
            </div>
            <!-- Start Affiliate and Web-Analytics -->

            <!-- End Affiliate and Web-Analytics -->
        </div>
    </div>

</body>

</html>