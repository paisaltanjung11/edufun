<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Category;
use HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Articles extends Model
{
    
    protected $fillable = ['title','desc','date','cat_id','au_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'au_id');
    }
}
