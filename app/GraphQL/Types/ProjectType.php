<?php


namespace App\GraphQL\Types;
use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;



class ProjectType extends GraphQLType
{

    protected $attributes=[

        'name'=>'Project',
        'description'=>'The Project Type',
        'model'=>Project::class
    ];

    public function fields(): array
    {
        return [
            'id'=>[
                'type'=>Type::nonNull(Type::int()),
                'description'=>'Project Id'
            ],
            'name'=>[
                'type'=>Type::nonNull(Type::string()),
                'description'=>'Project Name'
            ],
            'description'=>[
                'type'=>Type::nonNull(Type::string()),
                'description'=>'Project Description'
            ],/*,
            'manager'=>[
                'type'=>Type::nonNull(Type::int()),
                'description'=>'Manager Id'
            ],
            'tasks'=>[
                'type'=>Type::nonNull(Type::int()),
                'description'=>'Task Id'
            ]*/
        ];
    }
}
