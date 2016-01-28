<?php
include_once 'projects.php';
?>
<div id="pageMenuFake"></div>
<div id="pageMenu">
    <div id="menu">
        <ul id="menuUl">
            <li id="li_showcase" class="menuLi"><a href="index.php">Projecten</a>
                <ul class="showcaseMenuUl">
                    <?php
                    for($i = 0; $i < count($projectsArray); $i++){
                        echo '<li class="showcaseMenuLi"><a href="' . prlink($projectsArray[$i]['name']) . '">' . $projectsArray[$i]['name'] . '</a></li>';
                    }
                    ?>
                </ul>
            </li>
            <li class="menuLi"><a href="vakken.php">Vakken</a></li>
            <li class="menuLi"><a href="over.php">Over</a></li>
            <li class="menuLi"><a href="gasten.php">Gastenboek</a></li>
            <!-- Geen login menu item, want daar heb ik niks aan -->
        </ul>
    </div>
</div>