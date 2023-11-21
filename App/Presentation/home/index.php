<h1><?= $title ?></h1>
<hr/>
<div class="grid-2-1">
    <div>
        <img src="Public/img/m2.png" alt="Methode 2" title="Methode 2">
    </div>
    <div>
        <h3>Methode 2</h3>
        <p>
            Deze methode gaat de template van een pagina telkens opnieuw herbruiken voor elke pagina. De volgende
            onderdelen worden vanuit externe bestanden aangetrokken.
        </p>
        <ol>
            <li>Head</li>
            <li>Menu</li>
            <li><strong>Content</strong></li>
            <li>Footer</li>
        </ol>
        <p>
            Het grote verschil is dat hier de content die getoond gaat worden dynamisch is en zal afhangen van de link
            naar het externe bestand dat de controller aangeeft.
        </p>
    </div>
</div>
<div class="grid-1-3">
    <div>
        <h3>Controller</h3>
        <div class="source">
            <?php show_source("homeController.php") ?>
        </div>
        <h3>View template</h3>
        <div class="source">
            <?php show_source("App/presentation/template.php") ?>
        </div>
    </div>
    <div>
        <h3>View content</h3>
        <div class="source">
            <?php show_source("App/presentation/home/index.php") ?>
        </div>
    </div>
</div>
