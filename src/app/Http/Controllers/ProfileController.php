<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index() {
        $is_Image = false;

        // image folder作成
        if(!Storage::exists('public/profile_images')) {
            $result = Storage::makeDirectory('public/profile_images', 0775, true);
        }

        // image check
        if(Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $is_Image = true;
        }

        return view('profile/index', ['is_Image'=>$is_Image]);
    }

    /**
     * プロフィールの保存
     *
     * @param ProfileRequest $request
     * @return Response
     */
    public function store(ProfileRequest $request) {
        $request->photo->storeAs('public/profile_images', Auth::id() . '.jpg');

        return redirect('profile')->with('success', '新しいプロフィールを登録しました');
    }    
}
