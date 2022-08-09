<?php

function login(array $fields)
{
    loginValidateFields($fields);

    $user = db_select('users', conditions: "email = '{$fields['email']}'");
    $user = $user[0] ?? null;

    if (is_null($user) || !password_verify($fields['password'], $user['password'])) {
        alert('danger', 'Credentials are not valid');
        $_SESSION['login']['fields'] = $fields;
        redirect('/login');
    }

    $_SESSION['user'] = [
        'id' => $user['id'],
        'is_admin' => (bool)$user['is_admin'],
    ];

    alert('success', 'You\'re successfully signed in');
    redirect();
}

function loginValidateFields(array $fields)
{
    unset($_SESSION['login']);
    $_SESSION['login']['fields'] = $fields;

    if (emptyFields($fields, 'login') || !loginPasswordValidation($fields['password'])) {
        redirect('/login');
    }
}

function loginPasswordValidation(string $password): bool
{
    $result = true;

    if (strlen($password) < 8) {
        $_SESSION['login']['errors']['password'] = "Password length should be more than 7 symbols";
        $result = false;
    }

    return $result;
}
