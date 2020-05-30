<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['public_show']]);
    }

    public function show($id) {
        $user = User::where('id', $id)->first();
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User Found !',
                'data' => $user,
            ], 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'User Not Found !',
                'data' => '',
            ], 404);
        }
    }

    public function public_show($id){
        $user = User::where('id', $id)->first();
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User Found !',
                'data' => $user,
            ], 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'User Not Found !',
                'data' => '',
            ], 404);
        }
    }

}
