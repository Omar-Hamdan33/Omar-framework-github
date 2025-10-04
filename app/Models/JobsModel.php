<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JobsModel
{
    public static function all(): array
    {
        return DB::table('job')->orderBy('id', 'desc')->get()->toArray();
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

    public static function create($data)
    {
        $id = DB::table('job')->insertGetId($data);
        return self::find($id);
    }

}
