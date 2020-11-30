<?php
$server = "sql1.njit.edu";
$username ="bbk23";
$password = "Stoneboys4.";
$dbname = "questions";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])) {

    if (!empty($_POST['title']) && !empty($_POST['body']) && !empty($_POST['skills'])) ;

    $title = $_POST['title'];
    $body = $_POST['body'];
    $skills = $_POST['skills'];

    $query = "insert into questions (title, body, skills) values('$title', '$body', '$skills')";

    $run = mysqli_query($conn, $query) or die(mysqli_error());

    if ($run) {
        echo "Form submitted successfully";
    } else {
        echo "form not submitted";
    }
}

else {
        echo "all field required";
    

}
?>