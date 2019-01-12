<?php
    $email=$_POST['nagyadam40@gmail.com'];
    $subject = 'nagyadam40@gmail.com';
    $message = 'Üzenet érkezett az Archibald oldalra:';

    mail($email, $subject, $message);
?>