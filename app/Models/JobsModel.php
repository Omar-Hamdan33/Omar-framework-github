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
        $job = DB::table('job')->where('id', $id)->first() ?? (object)[
            'id' => null,
            'title' => 'Job not found',
            'logo' => '',
            'url' => ''
        ];
        
        $job->delete = function() use ($job) {
            return JobsModel::delete($job->id);
        };
        
        return $job;
    }

    public static function create($data)
    {
        request()->validate([
            'title' => 'required|max:50|min:3',
            'logo' => 'required|url|max:255|min:3',
            'url' => 'required|url|max:255|min:3'
        ]);
        if (DB::table('job')->where('id', $data['id'])->exists()) {
            $id = $data['id'];
            DB::table('job')->where('id', $id)->update($data);
            return self::find($id);
        } else {


        $id = DB::table('job')->insertGetId($data);
        return self::find($id);
        }
    }

    public static function delete($id)
    {
        return DB::table('job')->where('id', $id)->delete();
    }

}
