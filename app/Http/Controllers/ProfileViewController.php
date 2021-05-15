<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileViewController extends Controller
{
    //

    public function index()
    {
        dd('go to index ');
    }
    public function show($name)
    {
        // dd($name);
        if (!empty($name)) {
            $replace_space = preg_replace('/-/i', ' ', $name);

            $find_user = User::where("name", $replace_space)->first();
            if (!empty($find_user->id)) {

                $profile = $find_user;
                return view("view_profile", ['profile' => $profile]);
            } else {
                return $this->index();
            }
        } else {

            return $this->index();
        }
    }
}
