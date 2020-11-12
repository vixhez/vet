<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        "first_name",
        "last_name",
        "telephone",
        "email",
        "address_1",
        "address_2",
        "town",
        "postcode"
    ];

    public function fullName()
    {
        return ($this->first_name . " " . $this->last_name);
    }

    public function fullAddress()
    {
        if ($this->address_2 != null) {
            return ($this->address_1 . ", " . $this->address_2 . ", " . $this->town . ", " . $this->postcode);
        } else {
            return ($this->address_1 . ", " . $this->town . ", " . $this->postcode);
        }
    }

    public function formattedPhoneNumber()
    {
        $section1 = substr($this->telephone, 0, 5);
        $section2 = substr($this->telephone, 5, 3);
        $section3 = substr($this->telephone, 8, 3);
        return ($section1 . " " . $section2 . " " . $section3);
    }

    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        }
        if ($number === 1) {
            return "Yes we have {$number} banana";
        }
        return "Yes we have {$number} bananas";
    }

    public static function emailExists($email)
    {
        $dbMatch = Owner::where('email', '=', $email)->get();


        if (count($dbMatch) > 0) {
            return true;
        } else {
            return false;
        }
    }
}