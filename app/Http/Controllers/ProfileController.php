<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|min:8|max:50',
        ]);

        $user = Auth::user();

        try {
            $user->name = $request->name;
            $user->email = $request->email;

            $user->update();
        } catch (Exception $e) {
            return back()->withError(__('Something went wrong! Please try again.'));
        }

        return back()->withSuccess(__('Account Settings successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|min:6',
            'password' => 'required|min:6|confirmed|different:old_password',
            'password_confirmation' => 'required|min:6'
        ]);


        $user = Auth::user();

        $user->password = Hash::make($request->password);

        return back()->withSuccess(__('Password successfully updated.'));
    }
}
