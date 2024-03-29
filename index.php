<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IcedT - Home</title>
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="icon" href="/img/logo/t-blue.png">

    <script src="/js/nav.js" defer></script>

</head>


<body>


    <!-- START OF CONTENT -->


    <div class="banner">


        <!-- Burge Menu for Navbar -->
        <button class="mobile-nav-toggle"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="4" y1="6" x2="20" y2="6"></line>
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <line x1="4" y1="18" x2="20" y2="18"></line>
        </svg></button>
        
        <!-- Navbar -->
        <nav>
            <a href="/index.html"><img class="logo" src="/img/logo/Lower-Blue.png" alt="IcedT Logo"></a> 

            <ul data-visible="false" class="primary-navbar">
                <li><a class="current" href="https://www.icedt.de">// Home <sup>01</sup></a></li>
                <li><a href="/counter.html">// Counter <sup>02</sup></a></li>
                <li><a href="/changes.html">// Changes <sup>03</sup></a></li>
                <li><a href="/contact.html">// Kontakt <sup>04</sup></a></li>
            </ul>
        </nav>



        <div class="container">
            <h1>Wilkommen bei <span class="logo">IcedT</span></h1>
            
            <div class="buttons">
                <form action="/counter.html"><button class="headerbutton">Counter</button></form>
                <form action="/changes.html"><button class="headerbutton">Changes</button></form>
            </div>

        </div>

    </div>


    <div class="box-container">

        <div class="box">
            <h3>Work in progress</h3>
            <p>Danke, dass du vorbei schaust! Wie du siehst ist die Website noch im Aufbau - 
                Es können also noch Fehler auftreten. Falls dir einer auffallen sollte, 
                melde mir diesen gerne über das <a href="/contact.html">Kontaktformular</a>.
                Stück für Stück wird IcedT.de von mir erweitert und mit neu erlenten Skills angepasst.</p>
            <div class="h-line"></div>
        </div>

        <div class="box">
            <h3>About me</h3>
            <p>Ich bin Joey und ich lerne aktuell Programmieren - besonders Web-Development<br>
            Meine neu erlernten Skills teste ich direkt an dieser Website 
            und die aktuellen Änderungen werden in Zukunft auf einer eigenen Seite hinterlegt.</p>
            <div class="h-line"></div>
        </div>

        <div class="box">
            <h3>Feedback</h3>
            <p>Ich bin für jeden Tipp und jegliches Feedback dankbar - 
                Geh einfach zu <a href="/contact.html">KONTAKT</a> und füll das Kontaktformular aus.
            Ich versuche auf jedes Feedback innerhalb ein bis zwei Tagen zu antworten und ggf. auch umzusetzen.</p>
            <div class="h-line"></div>
        </div>

    </div>

    <!-- Info Cards -->

    <div class="info-cards-container flex-col flex-center">
        <div class="info-cards">
            <article class="grid-col-span-2">
                <div class="head">
                    <img class="card-badge" src="/img/assets/HTML5_badge.png" alt="HTML5 Badge">
                    <div class="heading">
                        <h2>HTML</h2>
                        <p>Hypertext Markup Language</p>
                    </div>
                </div>
                <div class="body">
                    <p>HTML ist eine Markup Language auf welcher Internetseiten basieren. 
                        Sie wird zur Auszeichnung von Objekten, als auch zur Strukturierung einer Website genutzt. 
                        HTML bildet das grundlegende Skelett jeder Website - Sie beschreibt alle Objekte welche auf der Webseite zu sehen sind mit sogenannten Tags. 
                        Zum Beispiel würde eine Überschrift folgendermaßen deklariert werden:<br>
                        <span style="color: #4EB5FF;">&lt;h1&gt;</span>Überschrift<span style="color: #4EB5FF;">&lt;/h1&gt;</span></p>
                </div>
            </article>
    
            <article>
                <div class="head">
                    <img class="card-badge" src="/img/assets/CSS3_logo.svg.png" alt="HTML5 Badge">
                    <div class="heading">
                        <h2>CSS</h2>
                        <p>Cascading Style Sheets</p>
                    </div>
                </div>
                <div class="body">
                    <p>CSS ist eine Formatierungssprache für u.a. HTML - Sie macht aus dem eintönigen HTML Skelett, eine ansehnliche Website.
                        Zunächst werden alle in HTML deklarierten Objekte in Standart-Stil untereinander angeordnet...
                        Verlinkt man nun ein Stylesheet (eine CSS-Datei) und legt in diesem einige Eigenschaften für gewisse Objekte fest - 
                        wie z.B. Höhe/Breite, Farbe, Display-Art und vieles mehr - wird aus dem eintönigen HTML Skelett, 
                        eine nach eigenen wünschen strukturierte und gestaltete Website.
                </div>
            </article>
    
            <article>
                <div class="head">
                    <img class="card-badge" src="/img/assets/JavaScript-logo.png" alt="HTML5 Badge">
                    <div class="heading">
                        <h2>JS</h2>
                        <p>JavaScript</p>
                    </div>
                </div>
                <div class="body">
                    <p>Wie es der Name schon sagt ist JavaScript (JS) eine Script-Sprache. 
                        Sie ermöglicht die funktionalität der Website zu erweitern, 
                        indem auf der Client-Seite kleine oder auch umfangreichere Programme (Scripts) ausgeführt werden.
                        Den Counter der auf dieser Website zu finden ist, wird über genau so ein Script berechnet 
                        und sekündlich aktualisiert.<br>
                        Doch das wohl bekannteste Beispiel in der heutigen Zeit ist das Cookie-Pop-Up, 
                        was auf jeder Seite zu beginne auftaucht.</p>
                </div>
            </article>
    
            <article class="grid-col-span-2">
                <div class="head">
                    <img class="card-badge" src="/img/assets/PHP-logo.png" alt="PHP Logo">
                    <div class="heading">
                        <h2>PHP</h2>
                        <p>Hypertext Preprocessor</p>
                    </div>
                </div>
                <div class="body">
                    <p>Im gegensatz zu JavaScript stellt PHP nicht die Client-Side, sondern die Server-Side dar.<br>
                        PHP ist eine Scriptsprache zur programmierung dynamischer Websiten. 
                        Sie ist Server-Side und somit vom Client (Website-Besucher) nicht einsehbar. 
                        Mit PHP können z.B. Verbindungen zu Datenbanken hergestellt und Daten abgefragt oder eingetragen werden. 
                        Ein anderes Beispiel auf dieser Website ist das Kontakt-Formular:<br>
                        Dort werden, über PHP, die eingetragenen Daten aufgefangen und anschließen formatiert an ein bestimmtes Mailfach gesendet.
                        Sofern erfolgreich, wird anschließend die Seite umstrukturiert und der Eingang der Nachricht für den Client bestätigt.
                        Probier es gerne mal aus ;) <a href="/contact.html">KONTAKT</a></p>
                </div>
            </article>
        </div>
    </div>


<!-- Footer -->

    <div class="footer">
        <p>Copyright &copy 2023 Joey Michalik. Alle Rechte vorbehalten.</p>
    </div>

</body>
</html>