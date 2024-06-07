<?php
print_r($_GET['action']);

if ($_GET['action'] == 'index'){
    index();
}

if ($_GET['action'] == 'create'){
    create();
}

if ($_GET['action'] == 'store'){
    store();
}



function index()
{
    header('location:index.php');
}

function create()
{
    header('location:create.php');
}

function store()
{
    print_r($_POST);
}