<?php
include_once('core/core.php');

if(isset($_GET['id'])){
    if(User::where('active_code','=',$_GET['id'])->count() >0){
        $user = User::where('active_code','=',$_GET['id'])->first();
        $user->active = 1;
        $user->save();
        echo '<script>alert("Your account is activated")</script>';
        $_SESSION['email'] = $$user->email;
        $_SESSION['id_user'] = $user->id;
        $_SESSION['lastname'] = $user->lastname;
        header('location: index-member.php');
        echo '<script>window.location.href = "index-member.php";</script>';
        die();

    }
}

?>