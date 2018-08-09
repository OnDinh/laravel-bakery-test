<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Bakery\Eloquent\Introspectable;
use Bakery\Eloquent\Mutable;
use GraphQL\Type\Definition\Type;

class Group extends Model {

    use Introspectable;
    use Mutable;

    protected $fillable = [
        'name'
    ];

    public function fields() {
        return [
            'id' => Type::id(),
            'name' => Type::string(),
        ];
    }

}