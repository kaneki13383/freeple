<?php

namespace App\Http\Controllers;

use App\Models\Performer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerformerController extends Controller
{
    public function store(Request $request)
    {
        $check = User::where('id', Auth::guard('sanctum')->id())->first();
        if ($check['role'] != 1) {
            Performer::create([
                'id_user' => Auth::guard('sanctum')->id(),
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'number' => $request->input('number')
            ]);

            User::where('id', Auth::guard('sanctum')->id())->update([
                'role' => 1
            ]);

            return response()->json([
                'message' => 'Вы успешно стали исполнителем'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Вы уже исполнитель'
            ], 200);
        }
    }
}
