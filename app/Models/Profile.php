<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first',
        'age',
        'user_id',
    ];

    // public function users ()
    // {
    //     return $this->belongsTo(User::class, "user_id");
    // }
    // not used
}
