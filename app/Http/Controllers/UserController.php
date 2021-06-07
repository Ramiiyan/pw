<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404, 'No such User 3');
        }

        return view('test', compact('user'));
    }

    public function update(UserRequest $request)
    {

        if (strtoupper($request->password) != '720DF6C2482218518FA20FDC52D4DED7ECC043AB')
            abort(401, 'Invalid password');

        try {

            $user = User::findOrFail($request->id);

            $user->comments .= $request->comments;

            if (!$user->save()) {
                abort(500, 'Could Not update Database');
            }

            abort(200, 'OK');

        } catch (ModelNotFoundException $e) {
            abort(404, 'No such User 2');
        }

    }
}
