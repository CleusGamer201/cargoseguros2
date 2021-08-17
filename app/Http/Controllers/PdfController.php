<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewBackNotification;
use App\Models\User;
use App\Models\Business;
use App\Models\Back;
use App\Notifications\NewPdfNotification;
use Illuminate\Support\Facades\Redirect;

class PdfController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
      $user = Auth::user();
      if (!$user->wasVerified()) {
          return view('verification');
      } else if (!$user->isAdmin()) {
        return redirect("dashboard");
      }

      // $notifications = $user->unreadNotifications;
      $backs = Back::where('approved', 0)->get();
      return view('list-pdf', compact('backs'));
      // return view('list-pdf', compact('backs', 'notifications'));
    }

    public function indexAll() {
      $user = Auth::user();
      if (!$user->wasVerified()) {
          return view('verification');
      } else if (!$user->isAdmin()) {
        return redirect("dashboard");
      }

      $backs = Back::all();
      return view('list-pdf', compact('backs'));
    }

    // Generate PDF
    public function visualizePdf(Request $request) {
      $user = Auth::user();
      if (!$user->wasVerified()) {
          return view('verification');
      } else if (!$user->isAdmin()) {
        return response()->noContent();
      }

      $backId = $request->get('backId');
      $back = Back::findOrFail($backId);
      $business = $back->findBusiness();
      $pdf = PDF::loadView('pdf', compact('back', 'business'));
      $pdf->setPaper('A4');
      //$pdf->save(public_path() . '\tempPdf\Respaldo-' . $back->backcode . $back->id . '.pdf');

      return $pdf->stream('Respaldo-' . $back->backcode . $back->id);
    }

    /*public function fakeNotification() {
      $user = Auth::user();
      $back = Back::findOrFail(1);
      $user->notify(new NewPdfNotification($back));
      return response()->noContent();
    }

    public function markNotification(Request $request) {
      $user = Auth::user();
      $user->unreadNotifications
        ->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        })
        ->markAsRead();
      return response()->noContent();
    }*/

    public function approvePdf(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
          return response()->noContent();
        }


        $backId = $request->get('backId');
        $back = Back::findOrFail($backId);
        $business = $back->findBusiness();
        $back->approved = 1;
        $back->save();

        $pdf = PDF::loadView('pdf', compact('back', 'business'));
        $pdf->setPaper('A4');

        $emailAddress = 'info@cargoseguros.com';
        Mail::to($emailAddress)->send(new NewBackNotification($back, $pdf->output()));
        return redirect("listado");
    }

    public function rejectPdf(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
          return response()->noContent();
        }

        $backId = $request->get('backId');
        $back = Back::findOrFail($backId);
        $back->forceDelete();
        return redirect("listado");
    }

}
