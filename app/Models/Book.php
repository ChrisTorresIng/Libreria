<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $td_books = 'books';
    protected $fillable = [
        'title',
        'autor',
        'publication_year',
        'description',
        'category',
        'language',
        'front_page',
        'costo',
    ];
}
