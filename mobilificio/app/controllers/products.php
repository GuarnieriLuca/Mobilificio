<?php
session_start();
require '../app/models/products.php';

function controller_products_all()
{
    global $data;
    $data['rows'] = model_products_all();
    view_render_html();
}
