<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(Auth::user()->id);
        $personal = Personal::find(Auth::user()->id);
        // dd($personal);
        // ['personal' => $personal]
        return view('profiles.personal', ['personal' => $personal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request, $id);
        $personal = Personal::find($id);
        if (!empty($personal)) {
            $personal->first_name = $request->first_name;
            $personal->last_name = $request->last_name;
            $personal->phone_no = $request->phone_no;
            $personal->sex = $request->sex;
            $personal->date_of_birth = $request->date_of_birth;
            $personal->personal_summary = $request->personal_summary;
            $personal->website = $request->website;
            $personal->facebook = $request->facebook;
            $personal->twitter = $request->twitter;
            $personal->instagram = $request->instagram;
            $personal->github = $request->github;
            $personal->line = $request->line;
            if ($personal->save()) {
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
