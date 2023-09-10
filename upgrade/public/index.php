
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page1</title>
    <?php include('../templates/stylesheet.php') ?>
</head>

<body>
<?php include('../templates/nav.php') ?>
<div class="page-content">
    <section id="c1" class="frame">
        <h1>Index page</h1>
        This is the index page.
    </section>
    <section id="c2" class="frame">
        <h2>The current time</h2>
        In case you need to know the current time: <?php echo(time()) ?>
    </section>
    <section id="c3" class="frame">
        <img src="https://upgrade.sitediff-demo.ddev.site/fileadmin/monkey.png" alt="monkey" />
    </section>
</div>
</body>

</html>
