<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Snippet extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'snippets';
    protected $fillable = [
        'author',
        'name',
        'snippet',
        'description',
        'language',
        'style',
    ];
}
