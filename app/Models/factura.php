<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;
    protected $td_books = 'factura';
    protected $fillable = [
        'id_user',
        'id_book',
    ];
}
