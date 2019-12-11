<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enchant extends Model {
    public $timestamps = false;

    protected $fillable = ['name'];

    // Accessors
    public function getIconAttribute() {
        $strSlot = explode(' - ', $this->name)[0];

        switch ($strSlot) {
            case '2H Weapon':
                return '2h.jpg';
                break;
            case 'Boots':
                return 'boots.jpg';
                break;
            case 'Bracer':
                return 'bracer.jpg';
                break;
            case 'Chest':
                return 'chest.jpg';
                break;
            case 'Cloak':
                return 'cloak.jpg';
                break;
            case 'Gloves':
                return 'gloves.jpg';
                break;
            case 'Shield':
                return 'shield.jpg';
                break;
            case 'Weapon':
                return 'weapon.jpg';
                break;
        }

        return '';
    }

    // Relations
    public function crafts() {
        return $this->hasMany(Craft::class);
    }
}
