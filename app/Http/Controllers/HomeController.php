<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Business;
use App\Models\Back;
use Carbon\Carbon;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware(['auth', 'verified']);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if ($user->isAdmin()) {
            $backs = Back::where("approved", 1)->get();
            $business = Business::all();
            return view('dashboard', compact('backs', 'business'));
        }
        $backs = Back::where('user', $user->id)->get();
        return view('client', compact('backs'));
    }


    /**
     *   $products = Product::latest()->paginate(20);
     *   return view("products.index",compact("products"))->with("i", (request()->input("page", 1) - 1) * 5);
     **/
    public function listUsers() {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
            return redirect("dashboard");
        }

        $users = User::whereNull('email_verified_at')->get();
        return view('users-verify', compact('users'));
    }

    public function approveUser(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
          return response()->noContent();
        }

        $userId = $request->get('userid');
        $userToVerify = User::findOrFail($userId);

        $date = Carbon::now();
        $userToVerify->email_verified_at = $date;

        $userToVerify->save();
        return redirect("verificar-usuarios");
    }

    public function rejectUser(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
          return response()->noContent();
        }

        $userId = $request->get('userid');
        User::findOrFail($userId)->forceDelete();
        return redirect("verificar-usuarios");
    }
}
