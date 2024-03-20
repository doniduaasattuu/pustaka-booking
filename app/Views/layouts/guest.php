<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Code Igniter' ?></title>
</head>

<body>
    <div class="container d-flex vh-100">
        <div class="align-items-center py-4 m-auto justify-content-center" style="width: 350px; min-width: 300px">
            <main>
                'Hello world'
                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>
</body>

</html>