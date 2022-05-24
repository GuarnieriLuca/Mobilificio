<?php
require '../app/models/home.php';
function controller_home_index()
{
    view_render_html();
}

function controller_home_about()
{
    view_render_html();
}

function controller_home_login()
{
    view_render_html();
}

function controller_home_loginact()
{
    global $data;
    $data['cliente'] = model_get_user($data['username']); 
    view_render_html();
}

?>