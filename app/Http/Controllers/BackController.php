<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Business;
use App\Models\Back;
use App\Mail\NewBackNotification;
use App\Notifications\NewPdfNotification;
use Illuminate\Support\Facades\Mail;

class BackController extends Controller {

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function generateView(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
            return view('respalde-generate');
        }
        $business = Business::findOrFail($request->get('businessId'));
        return view('respalde-generate-admin', compact('business'));
    }

    public function deletedView() {
      $user = Auth::user();
      if (!$user->wasVerified()) {
        return view('verification');
      } else if (!$user->isAdmin()) {
        return redirect("dashboard");
      }
      $backs = Back::onlyTrashed()->get();
      return view("historial", compact('backs'));
    }

    public function editView(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
          return redirect("dashboard");
        }

        if ($request->has('backId')) {
            $backId = $request->get('backId');
            $back = Back::findOrFail($backId);
            if (!isset($back) || $back == null || $back->trashed() || !$back->exists()) {
                return "Falló. Respaldo no encontrado";
            }
            return view('respalde-edit', compact('back'));
        }
        return "Falló. Consecutivo no encontrado";
    }

    /**
     * Create a new Back as requested
     *
     * @param  array  $data
     * @return \App\Models\Back
     */
    public function create(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        }
        /*if (!$user->isAdmin()) {
          return redirect("dashboard");
        }*/

        $business = null;
        if ($request->has("businessId") && $user->isAdmin()) {
            $businessId = intval($request->get("businessId"));
            $business = Business::findOrFail($businessId);
        } else {
            $business = Business::findOrFail($user->business);
        }

        $consecutive = Back::withTrashed()->where('user', $user->id)->max('consecutive') + 1;

        $arrival_date = null;
        if ($request->has("arrival_date")) {
            $arrival_date = $request->get('arrival_date');
        }
        if ($arrival_date == null || $arrival_date == "" || trim($arrival_date) == "") {
            $arrival_date = "Información de " . $business->name;
        }

        $driver = null;
        if ($request->has("driver")) {
            $driver = $request->get('driver');
        }
        if ($driver == null || $driver == "" || trim($driver) == "") {
            $driver = "Información de " . $business->name;
        }        

        $vehicle_plate = null;
        if ($request->has("vehicle_plate")) {
            $vehicle_plate = $request->get('vehicle_plate');
        }
        if ($vehicle_plate == null || $vehicle_plate == "" || trim($vehicle_plate) == "") {
            $vehicle_plate = "Información de " . $business->name;
        }   

        $user_phone = null;
        if ($request->has("user_phone")) {
            $user_phone = $request->get('user_phone');
        }
        if ($user_phone == null || $user_phone == "" || trim($user_phone) == "") {
            $user_phone = "Información de " . $business->name;
        }  

        $commodity = null;
        if ($request->has("commodity")) {
            $commodity = $request->get('commodity');
        }
        if ($commodity == null || $commodity == "" || trim($commodity) == "") {
            $commodity = "Enseres y mercancia avaluada por el cliente en $" . $request->get('price') . " COP";
        }                    

        $newBack = Back::create([
            'user' => $user->id,
            'business' => $business->id,

            'consecutive' => $consecutive,
            'backcode' => $business->backcode,

            'transport' => $request->get('transport'),
            'driver' => $driver,
            'vehicle_plate' => $vehicle_plate,
            'exit_departament' => $request->get('exit_departament'),
            'exit_municipality' => $request->get('exit_municipality'),
            'exit_address' => $request->get('exit_address'),
            'exit_date' => $request->get('exit_date'),
                
            'arrival_departament' => $request->get('arrival_departament'),
            'arrival_municipality' => $request->get('arrival_municipality'),
            'arrival_address' => $request->get('arrival_address'),
            'arrival_date' => $arrival_date,

            'user_generator' => $request->get('user_generator'),
            'user_identity' => $request->get('user_identity'),
            'user_phone' => $user_phone,

            'commodity' => $commodity,
            'packing' => $request->get('flexRadioDefault'),
            'freigh' => 'Información de la empresa',
            'price' => floatval(str_replace(".", "", strval($request->get('price')))),
            'percentage' => floatval(str_replace(",", ".", strval($request->get('percentage')))),
            'total' => floatval(str_replace(".", "", strval($request->get('price')))),
            'approved' => 0,
        ]);

        return redirect("listado");
    }

    /**
     * Create a new Back as requested
     *
     * @param  array  $data
     * @return \App\Models\Back
     */
    public function edit(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
          return redirect("dashboard");
        }

        $backId = $request->get("backId");
        $back = Back::findOrFail($backId);

        $back->transport = $request->get('transport');
        $back->driver = $request->get('driver');
        $back->vehicle_plate = $request->get('vehicle_plate');

        $back->exit_departament = $request->get('exit_departament');
        $back->exit_municipality = $request->get('exit_municipality');
        $back->exit_address = $request->get('exit_address');
        $back->exit_date = $request->get('exit_date');

        $back->arrival_departament = $request->get('arrival_departament');
        $back->arrival_municipality = $request->get('arrival_municipality');
        $back->arrival_address = $request->get('arrival_address');
        $back->arrival_date = $request->get('arrival_date');

        $back->user_generator = $request->get('user_generator');
        $back->user_identity = $request->get('user_identity');
        $back->user_phone = $request->get('user_phone');
            
        $back->commodity = $request->get('commodity');
        $back->packing = $request->get('flexRadioDefault');
        $back->freigh = 'FLETE NO HAY';
        /*$back->price = $request->get('price');
        $back->percentage = $request->get('percentage');
        $back->total = $request->get('total');*/

        $back->price = floatval(str_replace(".", "", strval($request->get('price'))));
        $back->percentage = floatval(str_replace(",", ".", strval($request->get('percentage'))));
        $back->total = floatval(str_replace(".", "", strval($request->get('price'))));

        $back->save();
        return redirect("dashboard");
    }

    public function delete(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
          return redirect("dashboard");
        }

        $backId = $request->get("backId");
        Back::findOrFail($backId)->delete();
        return redirect("dashboard");
    }

    public function forceDelete(Request $request) {
        $user = Auth::user();
        if (!$user->wasVerified()) {
          return view('verification');
        } else if (!$user->isAdmin()) {
          return redirect("dashboard");
        }
        
        $backId = $request->get("backId");
        Back::withTrashed()->findOrFail($backId)->forceDelete();
        return redirect("historial");
    }

    protected function retrieveAll() {
        return Back::all();
    }

    protected function retrieveByUser(integer $userId) {
        return Back::where('user', $userId)->all();
    }
 
    protected function retrieveByUserLimit(array $data) {
        return Back::where('user', $data['userId'])
               ->orderByDesc('created_at')
               ->limit($data['limit'])->all();
    }

    protected function retrieveByBusiness(integer $businessId) {
        return Back::where('business', $businessId)->all();
    }

    protected function countByUser(integer $userId) {
        return Back::where('user', $userId)->count();
    }

    protected function countByBusiness(integer $businessId) {
        return Back::where('business', $businessId)->count();
    }
  }