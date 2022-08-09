<?php
$type = filter_input(INPUT_POST, 'type');

unset($_POST['type']);

switch ($type) {
    case 'buy':
        buy(getBuyParams());
        break;
    case 'register':
        register(getRegisterParams());
        break;
    case 'login':
        login(getLoginParams());
        break;
    default:
        redirect();
}

function getBuyParams(): array
{
    $args = [
        'product_id' => FILTER_VALIDATE_INT,
        'quantity' => FILTER_VALIDATE_INT,
        'additions' => [
            'filter' => FILTER_VALIDATE_INT,
            'flags' => FILTER_REQUIRE_ARRAY
        ],
        'additions_qnty' => [
            'filter' => FILTER_VALIDATE_INT,
            'flags' => FILTER_REQUIRE_ARRAY
        ]
    ];

    return filter_input_array(INPUT_POST, $args);
}

function getRegisterParams(): array
{
    $args = [
        'name' => [
            'filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ],
        'surname' => [
            'filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ],
        'birthdate' => [
            'filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ],
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => [
            'filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ],
        'password_confirm' => [
            'filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ],
    ];

    return filter_input_array(INPUT_POST, $args);
}


function getLoginParams(): array
{
    $args = [
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => [
            'filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ]
    ];

    return filter_input_array(INPUT_POST, $args);
}
