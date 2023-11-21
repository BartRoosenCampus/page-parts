<!DOCTYPE html>
<html lang="en">
<?php require_once "App/Presentation/components/head.php" ?>
<body>
<?php require_once "App/Presentation/components/menu.php"; ?>
<div class="content">
    <h1><?= $title ?></h1>
    <hr/>
    <div class="grid-2-1">
        <div>
            <img src="Public/img/m1.png" alt="Methode 1" title="Methode 1">
        </div>
        <div>
            <h3>Methode 1</h3>
            <p>Bij deze methode is de view een volledige pagina.</p>
            <p>Externe onderdelen die worden aangetrokken zijn:</p>
            <ol>
                <li>de head</li>
                <li>het menu</li>
                <li>de footer</li>
            </ol>
            <p>
                Bij deze methode wordt voor elke pagina een kopie van een template gemaakt, het template wordt m.a.w.
                niet herbruikt.
            </p>
        </div>
    </div>
    <div class="grid-1-3">
        <div>
            <h3>Controller</h3>
            <div class="source">
                <?php show_source("aboutController.php"); ?>
            </div>
        </div>
        <div>
            <h3>View</h3>
            <div class="source">
                <?php show_source("App/Presentation/about/index.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php require_once "App/Presentation/components/footer.html"; ?>
</body>
</html>