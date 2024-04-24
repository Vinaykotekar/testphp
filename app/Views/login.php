<html>
<head><title>  Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body bgcolor='white'>
<div class="container">
    <center>
    <h1>Login</h1>
    <div style='margin: 20px;'>

    <form action='handleLogin' method='post' style="width:600px">
        <div class="form-group">
            <label for='username'>Email:</label>
            <input type='email' class="form-control" name='email' id='username' placeholder="Enter email" required><br>
        </div>

        <br>

    <div class="form-group">
            <label for='password'  >Password:</label>
            <input type='password' class="form-control" name='password' id='password' placeholder="Enter password" required><br>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
</center>
</div>
</body>
</html>
