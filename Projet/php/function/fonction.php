<!-- PAS TOUCHER -->

<?php

function is_page($page_name)
{
    $url = $_SERVER['SCRIPT_NAME'];
    //Check for current page equal to $page_name
    return basename($url) == $page_name;
}
