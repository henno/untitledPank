<?php

function transfer($accountTo, $amount)
{
    $user = get_first("SELECT * FROM users WHERE user_id = 1");
    update(
        'users',
        ['balance' => $user['balance'] - $amount],
        "user_id=1");
}