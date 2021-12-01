<?php
    require_once './view/view.php';

    
    require_once './model/room.model.php';
    require_once './model/connectDB.php';
    $conn = connectDB();
    
    
    $img_paths = getRoomTypeImages($conn);
    
    $view = new View();
    $view->assign('title', 'Home | Hillside Hotel');
    $view->assign('room_img_src', array_slice($img_paths, 0, 3));
    
    $view->render('./view/home.tpl.php');
?>