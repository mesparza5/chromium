<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="cms-page">
    <main>
        <?php
        $a = new Area('Main');
        $a->enableGridContainer();
        $a->display($c);
        ?>
    </main>
</div>

<?php $this->inc('elements/footer.php'); ?>