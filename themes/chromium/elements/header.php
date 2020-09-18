<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\View\View;
?>
<!DOCTYPE html>
<html lang="<?= Localization::activeLanguage() ?>">

<head>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- C5 Wrapper Class -->
    <div class="<?php  echo $c->getPageWrapperClass()?>">