<!DOCTYPE html>
<html lang="en">
<?php require_once "App/Presentation/components/head.php"; ?>
<body>
<?php require_once "App/Presentation/components/menu.php"; ?>
<div class="content">
    <h1><?= $title ?></h1>
    <hr/>
    <img src="Public/img/m1.png" alt="Methode 1" title="Methode 1">
    <div class="grid-1-3">
        <div>
            <h3>Controller</h3>
            <div class="source">
                <?php show_source("contactController.php"); ?>
            </div>
        </div>
        <div>
            <h3>View</h3>
            <div class="source">
                <?php show_source("App/Presentation/contact/index.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php require_once "App/Presentation/components/footer.html"; ?>
</body>
</html>