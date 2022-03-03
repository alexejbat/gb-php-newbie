<?php
$about = renderTemplate('templates/about', 88002000600);
$menu = renderTemplate('templates/menu');

echo renderTemplate('templates/layout', $about, $menu);

function renderTemplate($page, $content = '', $menu = '')
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}


