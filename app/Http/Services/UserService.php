<?php

namespace App\Http\Services;

use App\Http\Services\Base\BaseService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService {

    public function create(Request $request)
    {
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->save();
        return $newUser;
    }
}