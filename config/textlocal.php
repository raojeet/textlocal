<?php

// Either specify a Key OR a Hash - don't enter both!
return [
    'key' => env('TEXTLOCAL_KEY',''),
    'username' => env('TEXTLOCAL_USERNAME',''),
    'hash' => env('TEXTLOCAL_HASH',''),
    'url' => env('TEXTLOCAL_URL','https://api.textlocal.in/'),
    'sender' => env('SENDER','POEMT'),
];