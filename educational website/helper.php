<?php
require 'session.php';
function redirect($url)
{
    header("Location: $url");
    die;
}
