<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Craft extends Model {
    protected $fillable = ['user_id', 'enchant_id', 'mats', 'price', 'buyer'];

    protected $with = ['enchant'];

    // Accessors
    public function getIconAttribute() {
        return $this->enchant->icon;
    }

    // Scopes
    public function scopeOfUser($query, $user_id = null) {
        $query->where('user_id', ($user_id === null) ? Auth::user()->id : $user_id);
    }

    // Relations
    public function enchant() {
        return $this->belongsTo(Enchant::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
