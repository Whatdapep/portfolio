<?php

namespace App\View\Components\Profile\Form;

use App\Models\Personal as ModelsPersonal;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Personal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        // $this->middleware('auth');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $user_id = Auth::user()->id;
        $data = ModelsPersonal::find($user_id);
        return view('components.profile.form.personal', compact('data'));
    }
}
