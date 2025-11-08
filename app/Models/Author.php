<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{   
    use HasFactory;
    protected $fillable = ['name','specialist'];
    public function article(): HasMany
    {
        return $this->hasMany(Articles::class, 'au_id');
    }
}
