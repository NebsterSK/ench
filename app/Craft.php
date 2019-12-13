<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Craft extends Model {
    protected $fillable = ['user_id', 'enchant_id', 'mats', 'price', 'buyer'];

    protected $with = ['enchant'];

    // Accessors
    public function getIconAttribute() {
        return $this->enchant->icon;
    }

    // Relations
    public function enchant() {
        return $this->belongsTo(Enchant::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
