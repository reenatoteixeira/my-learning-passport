<?php

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordCheck = $_POST['password-check'];
$errors = [];

if (empty($firstName)) {
  $errors['first-name'] = 'First name is required';
}

if (empty($lastName)) {
  $errors['last-name'] = 'Last name is required';
}

if (empty($email)) {
  $errors['email'] = 'Email is required';
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = 'Please, enter a valid email address';
}

if (empty($password)) {
  $errors['password'] = 'Password is required';
}

if (empty($password) ||
  strlen($password) < 6 ||
  !preg_match('/[A-Z]/', $password) ||
  !preg_match('/[a-z]/', $password) ||
  !preg_match('/[0-9]/', $password)) {
  $errors['password'] = 'Password must follow the given rules';
}

if ($password !== $passwordCheck) {
  $errors['password-check'] = 'Passwords must match';
}

if (!empty($errors)) {
  view('teacher/register.view.php', [
    'errors' => $errors,
  ]);
  exit();
}

$config = require base_path('config.php');
$db = new Core\Database($config['database']);
$teacher = $db->query('SELECT * FROM teachers WHERE email = :email', [
  'email' => $email,
])->find();

if ($teacher) {
  $errors['email'] = 'Email is already taken';
  header('Location: /teacher/register.view.php', [
    'errors' => $errors,
  ]);
  exit();
}

$db->query('INSERT INTO teachers (first_name, last_name, email, password, token)
VALUES (:first_name, :last_name, :email, :password, :token)', [
  'first_name' => $firstName,
  'last_name' => $lastName,
  'email' => $email,
  'password' => password_hash($password, PASSWORD_DEFAULT),
  'token' => bin2hex(random_bytes(16))
]);

header('Location: /');
exit();
