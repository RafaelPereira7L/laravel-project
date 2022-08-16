<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {
        $users = User::all();
        return view('users', [
            'users' => $users,
        ]);
    }


    public function show(User $user) {
        //  $user->posts()->create([
        //      'title' => 'First Post',
        //      'content' => 'This is the first post',
        //  ]);

        // $post = $user->posts()->find(4);
        // $post->delete();
        dd($user->posts->toArray());

        return view('user', [
            'user' => $user,
        ]);
    }

}
