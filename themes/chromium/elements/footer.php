<?php defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\View\View;
?>

    </div>
    <?php View::element('footer_required'); ?>

    <script>
        const topNav = document.getElementById("headerNav")
        const scrolling = function() {
            const y = window.scrollY
            if (y >= 500) {
                topNav.className = 'show'
            } else {
                topNav.className = 'hide'
            }
        }
        window.addEventListener("scroll", scrolling);
    </script>
</body>
</html>
