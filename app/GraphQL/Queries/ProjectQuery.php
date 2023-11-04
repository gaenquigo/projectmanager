<?php


namespace App\GraphQL\Queries;
use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;


class ProjectQuery extends Query {

    protected $attributes= [
        'name' => 'Project Query',
        'description' => 'Retrieve Project'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('project'));
    }

    public function resolve($root, $args)
    {
        return Project::all();
    }


}

