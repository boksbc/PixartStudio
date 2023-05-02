<?php /** @var $this \Pixel\core\Http\View */ ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type">
    <meta name="description" content="Erleben Sie kreative Digital-Lösungen | <?= $_ENV['APP_NAME'] ?>">
    <meta name="theme-color" content="#191b25"/>
    <meta property="og:site_name" content="<?= $_ENV['APP_NAME'] ?>">
    <meta property="og:title" content="<?= $this->title . " | " . $_ENV['APP_NAME'] ?>">
    <meta property="og:url" content="<?= $this->request->fullUri() ?>">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/x-icon" href="/images/site/favicon.ico">
    <link rel="shortcut icon" href="/images/site/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/images/site/favicon.png"/>
    <link rel='canonical' href="<?= $this->request->fullUri() ?>"/>
    <link rel="stylesheet" href="/assets/css/dist/output.css">
    <link rel="stylesheet" href="/assets/lib/message/message.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MHW62KWF4F"></script>
    <script src="/assets/js/lib/jquery.min.js"></script>
    <title><?= $this->title . " | " . $_ENV['APP_NAME'] ?></title>
</head>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'G-MHW62KWF4F', {anonymize_ip: true});
</script>
<?php
if (!isset($_COOKIE['PaS-cookie-consent']) || $_COOKIE['PaS-cookie-consent'] !== "accepted") {
    include "../src/Views/components/cookie-banner.html";
} ?>
<body class="bg-[#191b25] min-w-[330px]">