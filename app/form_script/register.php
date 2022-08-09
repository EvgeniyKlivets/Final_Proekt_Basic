<?php

function register(array $fields)
{
    try {
        validateFields($fields);

        $db = DB::connect();
        $query = "INSERT INTO users (name, surname, birthdate, email, password) VALUES (:name, :surname, :birthdate, :email, :password)";
        $query = $db->prepare($query);

        $query->bindParam('name', $fields['name']);
        $query->bindParam('surname', $fields['surname']);
        $query->bindParam('birthdate', $fields['birthdate']);
        $query->bindParam('email', $fields['email']);

        $password = password_hash($fields['password'], PASSWORD_BCRYPT);

        $query->bindParam('password', $password);

        if ($query->execute()) {
            alert('success', 'User was created!');
            redirect();
        }
    } catch (Exception $exception) {
        alert('danger', $exception->getMessage());
        redirect('/register');
    }
}

function validateFields(array $fields)
{
    unset($_SESSION['register']);
    $_SESSION['register']['fields'] = $fields;

    if (emptyFields($fields, 'register') || !passwordValidation($fields['password'], $fields['password_confirm'])) {
        redirect('/register');
    }
}

function passwordValidation(string $password, string $passwordConfirm): bool
{
    $result = true;

    if (strlen($password) < 8) {
        $_SESSION['register']['errors']['password'] = "Password length should be more than 7 symbols";
        $result = false;
    }

    if ($password !== $passwordConfirm) {
        $_SESSION['register']['errors']['password'] = "Passwords are not equal";
        $result = false;
    }

    return $result;
}

//function ageValidation(string $birthdate): bool
//{
//
//}