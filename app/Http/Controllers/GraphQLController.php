<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Bakery\Http\Controller\BakeryController;
use Illuminate\Http\Request;

class GraphQLController extends BakeryController {

    use AuthorizesRequests;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->middleware(['graphql', 'auth']);
    }

}