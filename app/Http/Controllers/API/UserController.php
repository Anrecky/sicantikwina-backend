<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\UserResource;
use App\Models\User;
use Validator;
use Illuminate\Validation\Rule;

class UserController extends BaseController
{
    public function update(Request $request, User $user)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'email' =>  [
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'fullname' => 'string',
            // 'password' => 'nullable',
            // 'passwordConfirmation' => 'nullable|same:password',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user->email = $input['email'];
        $user->name = $input['fullname'];
        // $user->password = $input['password'];
        // $user->password = $input['passwordConfirmation'];
        $user->save();

        return $this->sendResponse(new UserResource($user), 'Berhasil memperbaharui data pengguna.');
    }

    public function logout(Request $request)
    {
        $user = auth()->user();
        try {
            $user->tokens()->delete();
            return $this->sendResponse(new UserResource($user), 'Berhasil keluar dari aplikasi.');
        } catch (\Throwable $th) {
            return $this->sendError('Gagal Logout.', $th);
        }
    }
}
