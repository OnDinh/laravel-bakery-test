<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Bakery models
     |--------------------------------------------------------------------------
     |
     | Here you can define your Bakery models.
     | The classes you define here should extend Bakery\Eloquent\BakeryModel.
     */
    'models' => [
        App\Models\Group::class
    ],

    /*
     |--------------------------------------------------------------------------
     | Bakery Route
     |--------------------------------------------------------------------------
     |
     | Here you can define the route where Bakery should serve GraphQL.
     */
    'route' => 'graphql',

    'graphiqlRoute' => 'graphql/explore',

    /*
     |--------------------------------------------------------------------------
     | Bakery Controller
     |--------------------------------------------------------------------------
     |
     | Here you can define the controller that should
     | handle the GraphQL requests.
     */
    'controller' => App\Http\Controllers\GraphQLController::class . '@graphql',

    /*
     |--------------------------------------------------------------------------
     | GraphiQL Controller
     |--------------------------------------------------------------------------
     |
     | Here you can define the controller that should
     | render the GraphiQL view.
     */
    'graphiqlController' => App\Http\Controllers\GraphQLController::class . '@graphiql',

    'pagination' => [
        /*
        |--------------------------------------------------------------------------
        | Pagination max count
        |--------------------------------------------------------------------------
        |
        | Here you can define the maximum number of items that you can query
        | on a paginated collection.
        */
        'maxCount' => 1000,
    ],

    'postgresDictionary' => 'simple',
];
