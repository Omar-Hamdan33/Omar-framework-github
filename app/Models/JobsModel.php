<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JobsModel
{
    public static function all(): array
    {
        return DB::table('job')->get()->toArray();
    }

    public static function find($id)
{
    return DB::table('job')->where('id', $id)->first() ?? (object)[
        'id' => null,
        'title' => 'Job not found',
        'logo' => '',
        'url' => ''
    ];
}

}
