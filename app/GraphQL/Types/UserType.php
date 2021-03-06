<?php
namespace App\GraphQL\Types;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'Details about a User',
        'model' => User::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the User',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the wine',
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Short description of the wine',
            ],
            'password' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The color of the wine',
            ],
        
        ];
    }
}
