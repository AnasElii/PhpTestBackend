<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    $data = array(
        'firstname' => $firstname,
        'lastname' => $lastname
    )

    header("Context-Type: application/json; charset=UTF-8");
    echo json_encode($data);
    // echo "<h3>From Post Method</h3>";
    // echo "Your name is: " . $firstname . " | Post.php";
    // echo "Your name is: " . $firstname . " " . $lastname . " | Post.php";
    exit;
} else {
    echo isset($_POST['firstname']);
    echo "not submit yet";
}