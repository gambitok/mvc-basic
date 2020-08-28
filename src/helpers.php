<?php

function view($view = null, $data = [])
{
    $form = "";
    $form_htm = BASEPATH."resources/views/$view.htm";
    if (file_exists("$form_htm")) $form = file_get_contents($form_htm);
    foreach ($data as $key => $value)
    {
        $form = str_replace("{$key}", $value, $form);
    }
//    $content = "";
//    $content_htm = BASEPATH."resources/views/layouts/app.htm";
//    if (file_exists("$content_htm")) $content = file_get_contents($content_htm);
//    $content = str_replace("{form}", $form, $content);
    return $form;
}