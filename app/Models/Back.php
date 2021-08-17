<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Business;
use Illuminate\Database\Eloquent\SoftDeletes;

class Back extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user',
        'business',
        'consecutive',
        'backcode',
        'transport',
        'driver',
        'vehicle_plate',
        'exit_departament',
        'exit_municipality',
        'exit_address',
        'exit_date',
        'arrival_departament',
        'arrival_municipality',
        'arrival_address',
        'arrival_date',
        'user_generator',
        'user_identity',
        'user_phone',
        'commodity',
        'packing',
        'freigh',
        'price',
        'percentage',
        'total',
        'approved',
    ];

        /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'exit_date' => 'date',
    ];

    public function findUser() {
        return User::findOrFail($this->user);
    }

    public function findBusiness() {
        return Business::findOrFail($this->business);
    }

    public function getConsecutivoFormatted() {
        $format = strval($this->consecutive);
        for ($i=strlen($format); $i < 3; $i++) { 
            $format = "0" . $format;
        }
        return $format;
    }

    public function getPriceFormatted() {
        return number_format($this->price, 0, ",", ".");
    }
}
