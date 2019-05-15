<?php 

if ($_POST['pass'] == 'slackingoff') {
    header('Location: welcome.html');
} else {
    // header('Location: index.php?failed');
    $message = 'Password Incorrect.';

    echo   "<script type='text/javascript'>
                alert('$message');
                window.location.replace(\"index.php\");
            </script>";
}

?>