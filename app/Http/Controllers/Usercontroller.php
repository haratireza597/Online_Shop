<?php

namespace App\Http\Controllers;
use App\Http\Requests\Userupdaterequest;
use App\Http\Resources\Userresource;
use \App\Models\User;

use App\Http\Requests\UserRequest;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Usercontroller extends Controller
{
    public function Store(UserRequest $userRequest)
    {
        $user=User::create($userRequest->all());
        if ($userRequest->hasFile('Avatar'));
        {
            $AvatarUrl = Storage::putFile('Avatar',$userRequest->Avatar);
            $user->update([
                'Url_Avatar'=>$AvatarUrl
            ]);
        }
        return response() ->json([
            'message'=>"کاربر با موفقیت ثبت گردید",
            "deta"=>new Userresource($user),
        ]);
    }

    public function Show($id)
    {
       $User=User::find($id);

        if ($User == null) {
            return response()->json([
                "message" => 'کاربر یافت نشد'
            ], 404)->header('Content-Type', 'application/json; charset=UTF-8');
        } else {
            return response()->json([
                    "message" => 'کاربر مورد نظر یافت شد',
                    "data" =>new Userresource($User)
                ], 200
            );
        }

    }

    public function ShowAll()
    {
        $Users = DB::table('Users')->simplePaginate(1);
        if ($Users == null) {
            return response()->json([
                "message" => 'کاربری یافت نشد'
            ], 404)->header('Content-Type', 'application/json; charset=UTF-8');
        } else {
            return response()->json([
                "message" => 'کاربران ',
                "data" => Userresource::collection($Users)
            ], 200
            );
        }

    }

    public function update(Userupdaterequest $userupdaterequest, User $user)
    {
        // به‌روزرسانی اطلاعات کاربر
        $user->update($userupdaterequest->all());

        // ارسال پاسخ JSON
        return response()->json([
            "message" => "کاربر با موفقیت به روز رسانی شد",
            "data" => $user // ارسال اطلاعات کاربر به صورت JSON
        ], 200);
    }

    public function delete(User $user)
    {
        $user ->delete();
        return response()->json([
            "message"=>"کاربر حذف شد"
        ],200);
    }
}

