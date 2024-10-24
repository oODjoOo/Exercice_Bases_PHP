<?php
    require_once 'includes\header.php';


    include 'settings\settings.php';
    if ($debugMode) {
        echo "<p>Le mode debug est activé.</p>";
    }

    require_once 'includes\footer.php';
?>
