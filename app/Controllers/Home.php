<?php

namespace App\Controllers;

class Home extends BaseController
{

public function index()
{
    return view('home');
}

public function welcome()
{
    return view('welcome');
}

public function login()
{
    return view('login');
}

public function handleLogin()
{
    $username = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    if (empty($username) || empty($password)) {
        return '<h2> Error </h2> <p>Email and password is mandatory </p> <a href="/login">Go back</a>';
    }

    $db = \Config\Database::connect();
    $query = $db->query('SELECT * FROM User WHERE email="'. $username. '" AND password="' . md5($password) . '"');
    $results = $query->getResult();

    if(count($results)) {
        return redirect('welcome');
    } else {
        return '<h2> Error </h2> <p>Invalid Email and password </p> <a href="/login">Go back</a>';
    }
}

public function register()
{
    return view('register');
}

public function handleRegister()
{
    $firstname = $this->request->getPost('firstname');
    $lastname = $this->request->getPost('lastname');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');


    if (empty($email) || empty($lastname) || empty($firstname) || empty($password)) {
        return '<h2> Error </h2> <p>firstname lastname password email is mandatory </p> <a href="/register">Go back</a>';
    }

    $db = \Config\Database::connect();
    $query = $db->query('INSERT INTO User (firstName, lastName, email, password) VALUES ("'. $firstname .'","'. $lastname. '","'. $email . '","' . $password . '")');

    if($query) {
        return redirect('welcome');
    } else {
        return '<h2> Error </h2> <p>Some error happened </p> <a href="/register">Go back</a>';
    }
}


public function logout()
{
    return redirect('login');
}

}
