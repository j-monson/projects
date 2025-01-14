<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    //fillables
    protected $fillable = [
        'message'
    ];

    //event for created chip
    protected $dispatchesEvents =[
        'created' => ChirpCreated::class
    ];
    
    //relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
