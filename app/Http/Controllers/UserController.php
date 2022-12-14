<?php

namespace App\Http\Controllers;

use App\Models\Team;
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
        $team = Team::find(1);
        $team->load('users');

        $team->users()->attach(3);
        return $team;
        //  $user->posts()->create([
        //      'title' => 'First Post',
        //      'content' => 'This is the first post',
        //  ]);

        // $post = $user->posts()->find(4);
        // $post->delete();

        // dd($user->posts->toArray());

        // $user->teams()->attach(2);
        // $user->teams()->sync([2, 3]);
        // $user->teams()->syncWithoutDetaching([1, 3]);
        // $user->teams()->detach(2);

        return $user;

        return view('user', [
            'user' => $user,
        ]);
    }

}
