<?php
    require_once "core/settings.php";
    require_once 'C:\xampp\htdocs\app\libs\ti.php';
    require_once './controllers/ViewsController.php';
    
    $vc = new ViewsController();
    require_once $vc->getView();
?>