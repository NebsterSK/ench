<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Craft extends Model {
    protected $fillable = ['user_id', 'enchant_id', 'mats', 'price', 'buyer', 'class'];

    protected $with = ['enchant'];

    // Accessors
    public function getIconAttribute() {
        return $this->enchant->icon;
    }

    public function getClassIconAttribute() {
        switch ($this->class) {
            case 'druid':
                return 'druid.jpg';
                break;
            case 'hunter':
                return 'hunter.jpg';
                break;
            case 'mage':
                return 'mage.jpg';
                break;
            case 'paladin':
                return 'paladin.jpg';
                break;
            case 'priest':
                return 'priest.jpg';
                break;
            case 'rogue':
                return 'rogue.jpg';
                break;
            case 'shaman':
                return 'shaman.jpg';
                break;
            case 'warlock':
                return 'warlock.jpg';
                break;
            case 'warrior':
                return 'warrior.jpg';
                break;
        }

        return '';
    }

    public function getClassColorAttribute() {
        switch ($this->class) {
            case 'druid':
                return '#FF7D0A';
                break;
            case 'hunter':
                return '#ABD473';
                break;
            case 'mage':
                return '#69CCF0';
                break;
            case 'paladin':
                return '#F58CBA';
                break;
            case 'priest':
                return '#FFFFFF';
                break;
            case 'rogue':
                return '#FFF569';
                break;
            case 'shaman':
                return '#0070DE';
                break;
            case 'warlock':
                return '#9482C9';
                break;
            case 'warrior':
                return '#C79C6E';
                break;
        }

        return '';
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
