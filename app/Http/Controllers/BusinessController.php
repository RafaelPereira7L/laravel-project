<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {
        // $businesses = Business::all();
        // dd($businesses);

        // $business = Business::find(1);
        // dd($business);

        // $businessWhere = Business::where('id', 2)->get();
        // dd($businessWhere);

        // $businessWhereFirst = Business::where('id', 2)->first();
        // dd($businessWhereFirst);

        // $business = Business::create([
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@email.com',
        //     'address' => '123',
        // ]);
        // dd($business);

        // $business = Business::find(5)->update([
        //     'name' => 'Rafael Pereira',
        //     'email' => 'rafael.hpereira7@gmail.com',
        //     'address' => 'Rua ABCD',
        // ]);

        // $input = [
        //     'name' => 'Rafael Pereira2',
        //     'email' => 'rafael.hpereira7@gmail.com',
        //     'address' => 'Rua ABCD',
        // ];
        // $business = Business::find(5);
        // $business->fill($input)->save();

        // dd($business);

        /*  CRUD
            Create -> create()
            Read -> get() ou find()
            Update -> find()->update()
            Delete -> delete()
        */

        $business = Business::find(5);
        // $business->delete();
        dd($business->toArray());
    }
}
