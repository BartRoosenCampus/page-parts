<h1><?= $title ?></h1>
<hr/>
<div class="grid-1-3">
    <div>
        <h3>Controller</h3>
        <div class="source">
            <?php show_source("componentsController.php") ?>
        </div>
        <h3>Template</h3>
        <div class="source">
            <?php show_source("App/Presentation/template.php") ?>
        </div>
    </div>
    <div>
        <h3>Components</h3>
        <h6>Head</h6>
        <div class="source">
            <?php show_source("App/presentation/components/head.php") ?>
        </div>
        <h6>Footer</h6>
        <div class="source">
            <?php show_source("App/presentation/components/footer.html") ?>
        </div>
        <h6>Menu</h6>
        <div class="source">
            <?php show_source("App/presentation/components/menu.php") ?>
        </div>
    </div>
</div>
