<?php

namespace App;

use App\Models\CitizenDetails;
use Illuminate\Database\Eloquent\Model;

class CitizenHistory extends Model
{
    protected $table = 'citizen_history';

    // Define any relationships or additional configuration here 
    public function citizen()
    {
        return $this->belongsTo(CitizenDetails::class, 'citizen_id');
    }

    // public function diagnostic()
    // {
    //     return $this->belongsTo(Diagnostic::class, 'diagnostic_id');
    // }
}
