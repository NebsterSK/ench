<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enchant extends Model {
    protected $timestamps = false;

    protected $fillable = ['name'];

    // Relations
    public function crafts() {
        return $this->hasMany(Craft::class);
    }
}
