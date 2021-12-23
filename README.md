# Een template maken en gebruiken

```
Hoe kan je verschillende delen (parts) van een web-pagina 
onderverdelen over verschillende files zonder het overzicht 
te verliezen?
```

## Template
Maak een template, deze bepaald de structuur van de pagina.
Deze template gaat de verschillende delen ophalen (include). 
Alle omvattende tags bevinden zich in de template voor het 
behoud van het overzicht.
```
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php'; ?>
</head>
<body>
<div class="container">
    <div class="menu">
        <?php require_once 'menu.php'; ?>
    </div>
    <div class="content">
        <?php require_once $content; ?>
    </div>
</div>
<div class="footer">
    <?php require_once 'footer.html'; ?>
</div>
</body>
</html>
```
## Page-parts
In de page-parts files staat de inhoud van wat je normaal binnen 
de omvattende tags zou schrijven.

Hieronder enkele voorbeelden van page-parts:
### Head
```
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Pagina opsplitsen</title>
<link rel="stylesheet" href="css/main.css"/>
```
### Menu
```
<ul>
    <li><a href="controller.php">controller 1</a></li>
    <li><a href="controller2.php">controller 2</a></li>
    <li><a href="#">Menu item 4</a></li>
    <li><a href="#">Menu item 5</a></li>
</ul>
```
### Footer
```
&copy; VDAB footer
```
### Content
De content is het 'variabele' deel van de pagina. De inhoud 
ervan wordt door de controller bepaald. Het is dus belangrijk 
om in de controller aan te geven welke page-part geïmporteerd 
moet worden. (zie controllers)
## Controller
De controller gaat bepalen welke pagina getoond wordt. Omdat we 
hier met een template werken gaat dit altijd de template file zijn. 
Voor het variabele gedeelte (content) gaan we de naam van deze 
file als variabele in de controller declareren.

`<?php require_once $content; ?>`
Deze lijn in de template bepaald welke content getoond wordt.
```
<?php
// controller.php
declare(strict_types=1);

// controles of de pagina getoond mag/kan worden
if (1 === 1) {
    // meegeven in een variabele welke content file getoond moet worden
    $content = 'content.php';
    include 'Presentation/template.php';
}
```
## Voordeel
Het grootste voordeel van deze manier van werken is de
onderhoudbaarheid. Wanneer bijvoorbeeld een aanpassing aan de head van de
pagina dient te gebeuren moet slechts 1 file worden aangepast.
Hetzelfde voor elk ander deel van de pagina.

Je collega developer gaat heel snel zijn weg kunnen vinden en aanpassingen 
op de juiste plaats kunnen doen.