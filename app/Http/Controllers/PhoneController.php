<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PhoneController extends Controller
{
    public function show(){
        return User::find(1)->phone->phone;
    }

    public function store(){
        $phone=new Phone();
        $phone->phone="09123456789";

        $user=new User();
        $user->name="TTS";
        $user->email="thein@gmail.com";
        $user->password=Hash::make('password');

        $user->save();
        $user->phone()->save($phone);

        return "User created Successfully";


    }
}
