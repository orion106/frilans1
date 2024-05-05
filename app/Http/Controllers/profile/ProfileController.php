<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function create(Request $request): View
    {
        return view('profile.profile', [
            'user' => $request->user(),
            'group'=> Group::all(),
            'group_me'=> Group::find(auth()->user()->group_id)
        ]);
    }
    public function update(Request $request)
    {
        $user_id = auth()->user()->id;
        $request -> validate([
            'firstname' => ['required','string'],
            'surname' => ['required','string'],
            'lastname' => ['required','string'],
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $images = 'images/' . $imageName;
            $user = User::where('id', $user_id)->update([
                'photo' => $images,
                'firstname' => $request->firstname,
                'surname' => $request->surname,
                'lastname' => $request->lastname,
                'group_id' => $request->group_id,
            ]);
        }else {
            $user = User::where('id', $user_id)->update([
                'firstname' => $request->firstname,
                'surname' => $request->surname,
                'lastname' => $request->lastname,
                'group_id' => $request->group_id,
            ]);
        }
//        dd($request );
        return redirect()->route('profile');
    }
}
