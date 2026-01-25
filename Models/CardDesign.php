<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardDesign extends Model
{
    // User can only enter these fields.
    protected $fillable = ['user_id', 'title', 'data', 'description', 'price'];

    // Converts data entry to specific format.
    protected $casts = [
        'data' => 'array',
    ];

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }


}
