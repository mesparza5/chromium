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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $view->getThemePath()?>/css/home.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
</head>

<body>
    <!-- C5 Wrapper Class -->
    <div class="<?php  echo $c->getPageWrapperClass()?>">

    <div id="headerNav">
        <div class="container header">
            <div class="logo">
                <img src="<?= $view->getThemePath() ?>/images/logo.svg" alt="logo"/>
            </div>
            <div class="contact">
                <p>
                    Mike Esparza / (310)612-8398 / 
                    <a href="mailto:mikeesparza5@gmail.com">mikeesparza5@gmail.com</a>
                </p>
            </div>
        </div>
    </div>