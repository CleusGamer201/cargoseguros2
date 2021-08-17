<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Business;
use App\Models\Back;
use App\Mail\NewUserNotification;

class ProfileController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function show($id) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
            return view('verification');
        }

        return Mail::to('info@cargoseguros.com')->send(new NewUserNotification($user));


        $requestedUser = User::findOrFail($id);
        $backs = Back::where('user', $requestedUser->id)->get();
        $business = Business::find($requestedUser->business);
        return view('profile', [
            'user' => $requestedUser,
            'backs' => $backs,
            'business' => $business,
        ]);
    }
}
