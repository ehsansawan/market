<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all() : array
    {
        return [
        [
            'id'=> 1,
            'title'=>'teacher',
            'salary'=>100
        ],
        [
            'id'=> 2,
            'title'=>'programmer',
            'salary'=>200
        ],
        [
            'id'=> 3,
            'title'=>'director',
            'salary'=>300
        ]
    ];

    }

public static function find(int $id) : array
{
    $job= Arr::first(Job::all(),fn($job)=> $job['id'] == $id);// research about it
    // pay attention
    // u can write instead of job::all() (static::all())

    if(!$job )
    {
         abort(404);
    }
    return $job;

}

}
