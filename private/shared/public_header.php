<!DOCTYPE html>
<html lang="en">
<head>
    <title>Globe Bank <?php if (isset($page_title)) { echo '- ' . h($page_title); } ?>
        <?php if (isset($preview) && $preview) { echo ' [PREVIEW]'; } ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="all" href="<?= url_for('/stylesheets/public.css'); ?>" />

</head>
<body>
    <header>
        <h1>
            <a href="<?= url_for('/index.php'); ?>">
                <img src="<?= url_for('/images/gbi_logo.png'); ?>" width="298" height="71" alt="" />
            </a>
        </h1>
    </header>