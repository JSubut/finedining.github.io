<ul>
    <?php
        global $navItems;
        foreach ($navItems as $item) {
            echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
        }
    ?>
</ul>
