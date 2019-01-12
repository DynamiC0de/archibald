<?php
    $email=$_POST['email'];
    $subject = 'nagyadam40@gmail.com';
    $message = 'Üzenet érkezett az Archibald oldalra:';

    mail($email, $subject, $message);
?>