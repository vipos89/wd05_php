<?php

    namespace App\Models;

    use App\Core\Model;

    class Contact extends Model
    {
        public static $fillable = ['email', 'name', 'phone', 'message'];

    }