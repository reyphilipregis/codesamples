<?php
declare(strict_types=1);

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\AccountRepositoryInterface;

return [
    /*
    |--------------------------------------------------------------------------
    | Repositories List
    |--------------------------------------------------------------------------
    |
    | Here you will define all your application's repositories to be registered
    | as services in the container.
    | Repositories list must be an associative array where the keys are the
    | abstraction of your repositories (most likely an interface) and the values
    | the concrete class of your repositories.
    |
    | Example:
    | \App\Repositories\PostRepositoryInterface::class => \App\Repositories\PostRepository::class,
    | \App\Repositories\CommentRepositoryInterface::class => \App\Repositories\CommentRepository::class
    |
    */
    'repositories' => [
        AccountRepositoryInterface::class => \App\Repositories\Doctrine\AccountRepository::class,
        UserRepositoryInterface::class => \App\Repositories\Doctrine\UserRepository::class
    ]
];
