<?php

namespace App\Model\Admin;
use Illuminate\Support\Facades\Auth;
use App\Model\BaseModel;
use App\Model\Common\User;
use Illuminate\Database\Eloquent\Model;
use App\Model\Common\File;
use DB;
use App\Model\Common\Notification;

class VideoBlock extends Model
{
    public function image()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image');
    }


    public static function searchByFilter($request) {
        $result = self::query();

        if (!empty($request->title)) {
            $result = $result->where('title', 'like', '%'.$request->title.'%');
        }

        $result = $result->orderBy('created_at','desc')->get();
        return $result;
    }

    public static function getForSelect() {
        return self::select(['id', 'name', 'code'])
            ->orderBy('name', 'ASC')
            ->get();
    }

    public static function getDataForEdit($id) {
        return self::where('id', $id)->with('image')
            ->firstOrFail();
    }

    public static function getDataForShow($id) {
        return self::where('id', $id)->with('image')
            ->firstOrFail();
    }

}
