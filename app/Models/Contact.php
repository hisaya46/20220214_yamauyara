<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public static $rules = array(
        'fullname' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'postcode' => 'required|regex:/^[0-9-]+$/',
        'address' => 'required',
        'opinion' => 'required|max:120',
    );

}
