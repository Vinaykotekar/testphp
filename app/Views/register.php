<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
</head>
<body>
<div class="container">
    <center>
    <h1>Sign Up</h1>

    <form action="/handleRegister" method="post" style="width:600px">
        First Name:<br>
        <input type="text" name="firstname" required class="form-control">
        <br>
        Last Name:<br>
        <input type="text" name="lastname" required class="form-control">
        <br>
        Email:<br>
        <input type="email" name="email" required class="form-control">
        <br>
        Password:<br>
        <input type="password" name="password" required class="form-control">
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</center>

</div>
</body>
</html>
