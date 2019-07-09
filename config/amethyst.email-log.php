<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'email-log' => [
            'table'      => 'amethyst_email_logs',
            'comment'    => 'Email Log',
            'model'      => Amethyst\Models\EmailLog::class,
            'schema'     => Amethyst\Schemas\EmailLogSchema::class,
            'repository' => Amethyst\Repositories\EmailLogRepository::class,
            'serializer' => Amethyst\Serializers\EmailLogSerializer::class,
            'validator'  => Amethyst\Validators\EmailLogValidator::class,
            'authorizer' => Amethyst\Authorizers\EmailLogAuthorizer::class,
            'faker'      => Amethyst\Fakers\EmailLogFaker::class,
            'manager'    => Amethyst\Managers\EmailLogManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'email-log' => [
                'enabled'    => true,
                'controller' => Amethyst\Http\Controllers\Admin\EmailLogsController::class,
                'router'     => [
                    'as'     => 'email-log.',
                    'prefix' => '/email-logs',
                ],
            ],
        ],
    ],
];
