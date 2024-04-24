<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Homepage</title>
    <meta name="description" content="The small framework with powerful features">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
<a class="nav-item nav-link" href="/">Home</a>
<?php if (session()->has('user_id') == false) { ?>
<a class="nav-item nav-link" href="/login">Login</a>
<?php } ?>
<?php if (session()->has('user_id') == true) { ?>
<a class="nav-item nav-link" href="/logout">Logout</a>
<?php } ?>
<?php if (session()->has('user_id') == false) { ?>
<a class="nav-item nav-link" href="/register">Register</a>
<?php } ?>

</div>
</div>
</nav>
</header>


<section>
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Demo website</h1>
    <p class="lead">Example website</p>
  </div>
</div>
</section>
</div>
</body>
</html>
