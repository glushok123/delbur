<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRoleRequest;
use App\Http\Requests\UpdateUserRoleRequest;
use App\Models\UserRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Redirect;

class UserRoleController extends Controller
{
    public function loginUser(Request $request)
    {
        if (User::where('email', $request->email)->exists() == false) {
            return response()->json([
                'status' => 'error',
                'text' => 'Не верный логин или пароль',
            ]);
        }

        $UserModel = User::where('email', $request->email)
            ->first();

        
        if (Hash::check($request->password, $UserModel->password)) {
            backpack_auth()->login($UserModel);

            return response()->json([
                'status' => 'success',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'text' => 'Не верный логин или пароль',
        ]);
    }

    public function registerUser(Request $request)
    {
        if (backpack_auth()->check() == true) {
            abort(404);
        }

        if (User::where('email', $request->email)->exists() == true) {
            return response()->json([
                'status' => 'error',
                'type' => 'email',
                'text' => 'Данный email уже используется!',
            ]);
        }

        if (User::where('phone', $request->phone)->exists() == true) {
            return response()->json([
                'status' => 'error',
                'type' => 'phone',
                'text' => 'Данный телефон уже используется!',
            ]);
        }

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->phone = $request->phone;
        $newUser->password = bcrypt($request->password);
        $newUser->save();

        $userRole = new UserRole();
        $userRole->user_id = $newUser->id;

        if ($request->type == 'false') {
            $userRole->role_id = 2;
        }

        if ($request->type == 'true') {
            $userRole->role_id = 3;
        }

        $userRole->save();
        backpack_auth()->login($newUser);

        return response()->json([
            'status' => 'success',
        ]);
    }

    public function logout()
    {
        backpack_auth()->logout();

        return Redirect::to('/');
    }
}
