<?php
    require 'base.php';
    if ($_POST['enabled'] == 'enabled') {
        $enabled = True;
    } else {
        $enabled = False;
    }
    $_DB->where('id', $_POST['vehicle_id'])->update('vehicles', ['enabled' => $enabled]);
?>