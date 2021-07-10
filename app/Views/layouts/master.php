<html>
    <head>
        <title>Site Title</title>
    </head>
    <body>
        <?= $this->include('partials/header'); ?>
        <?= $this->renderSection("body-contents"); ?>
        <?= $this->include('partials/footer'); ?>
    </body>
</html>