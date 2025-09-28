<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Jobsmodel {
    public static function all():  array 
    {
       $data =[
            [
                'id' => 1,
                'title' => 'Laravel',
                'logo' => 'https://laravel.com/img/logomark.min.svg',
                'url' => 'https://laravel.com'
            ],
            [
                'id' => 2,
                'title' => 'Vue',
                'logo' => 'https://vuejs.org/images/logo.png',
                'url' => 'https://vuejs.org'
            ],
            [
                'id' => 3,
                'title' => 'React',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg',
                'url' => 'https://reactjs.org'
            ]
        ];

        return $data;
    }

    public static function find($id): array 
    {
    return  Arr::first(static::all(), fn ($job) => $job['id'] == $id) ?? ['id' => null, 'title' => 'Job not found', 'logo' => '', 'url' => ''];
}
}