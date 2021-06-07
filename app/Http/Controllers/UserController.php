<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('test', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        if(strtoupper($request->password) != '720DF6C2482218518FA20FDC52D4DED7ECC043AB')
            abort(401,'Invalid password');

        $user = User::findOrFail($id);

        $user->comments .= $request->comments;

        $user->save();

        $user->update($request->validated());
        return redirect('users/'.$user->id);

    }
}
