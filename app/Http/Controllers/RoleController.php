<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function addRoles(){
        $roles=['Admin', 'Editor', 'Manage', 'Modarator', 'Developer', 'User'];

        foreach($roles as $item){
            $role=new Role();
            $role->name=$item;
            $role->save();

        }
        return "role added successfully";

    }

    public function addUser(){
        $user=new User();

        $user->name="su";
        $user->email="su@gmail.com";
        $user->password=Hash::make('password');
        $user->save();

        $user->roles()->attach([2,5]);

        return "user added successfully";
    }

    public function getRoles(){
        $roles=User::find(3)->roles;
        foreach($roles as $role){
            echo $role->name."<br>";
        }
    }

    public function getUsers(){
        $users=Role::find(3)->users;
    }
}
