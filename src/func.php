<?php
const USERCOUNT = 50;
const NAMES = [
    'Apolon', 'Natasha', 'Arnold', 'Vladimir', 'Olga'
];

function createUser()
{
    for($UserId = 0; $UserId < USERCOUNT; $UserId++) {

        $users[] = [
            'id' => $UserId,
            'name' => NAMES[array_rand(NAMES)],
            'age' => mt_rand(18, 45),
        ];
    }
    return $users;
}

