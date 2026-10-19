<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    $users=User::query()->get();
    return view('home',compact('users'));
    }

    public function store(StoreUserRequest $request){
        $users=User::query()->create($request->validated());
        return 'sorted';
    }
}
