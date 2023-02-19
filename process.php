<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // validate the inputs
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields";
    } else {
        // save the guestbook entry to a file
        $file = fopen("guestbook.txt", "a");
        fwrite($file, "$name,$email,$message\n");
        fclose($file);
        echo "Thank you for signing the guestbook!";
    }
}
?>