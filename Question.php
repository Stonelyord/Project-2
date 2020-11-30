<!DOCTYPE html>
<html lang="en">
<head>


    <link rel="stylesheet" href="registerStyle.css">
    <meta charset="UTF-8">
    <title>Questions Entry</title>

</head>
<body>

<form action="questions.php" method="post" class="container">

    <h1>Register</h1>

    <form action="display.php" method="post">
        <div class="form-group">
            <label for="Questions1">Question Name</label>
            <input id="Questions1" name="title" type="text" class="form-control" placeholder="Enter Question Name...">
        </div>

        <div class="form-group">
            <label for="Questions2">Question Body</label>
            <input id="Questions2" name="body" type="text" class="form-control" placeholder="Enter Question Body...">
        </div>

        <div class="form-group">
            <label for="Questions3">Question Skills</label>
            <input id="Questions3" name="skills" type="text" class="form-control" placeholder="Enter Question Skills...">
        </div>

        <input type="submit" value="Register" class="btn btn-success">
    </form>

</form>

</body>
</html>