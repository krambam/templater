<?php
require_once __DIR__ . '/view-helpers.php';
require_once(VIEWSCRIPTS . '/global.php');

// router
if (!getRequest()) {
    foreach (scandir(TEMPLATES) as $view) {
        if (substr($view, 0, 1) !== '.') {
            $view = str_replace('.php', '', $view);
            echo '<a href="?view=' . $view . '">' . $view . '</a><br>';
        }
    }
} else {
    if(file_exists(VIEWSCRIPTS . '/' . getRequest() . '.php')){
        include(VIEWSCRIPTS . '/' . getRequest() . '.php');
    }
    ob_start();
    include(TEMPLATES . '/' . getRequest() . '.php');
    $layoutContent = ob_get_clean();
    include(ROOT . '/views/layouts/standard.php');
}

function getRequest()
{
    if (isset($_GET['view'])) {
        return $_GET['view'];
    }
    return null;
}