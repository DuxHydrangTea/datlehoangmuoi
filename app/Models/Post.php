<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'expert',
        'seo_title',
        'thumbnail',
        'content',
        'status',
        'user_id',
        'category_id',
        'is_hot',
        'is_new',
        'is_outstanding',
        'tags',
        'meta_description',
        'meta_keywords',
        'views',
        'comment_enabled',


    ];
    public function isPublic()
    {
        return $this->status == "public" ? true : false;
    }
    public function scopePublic($query)
    {
        return $query->where('status', 'public')->orderByDesc('id');
    }
    public function scopePrivate($query)
    {
        return $query->where('status', 'private')->orderByDesc('id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function scopreSortDate($query)
    {
        return $query->orderByDesc('id');
    }
    public function scopeHot($query)
    {
        return $query->where('is_hot', 1);
    }
    public function scopeOutstanding($query)
    {
        return $query->where('is_outstanding', 1);
    }

    public function scopeSearch($query, $searchString)
    {

        return $query->public()->whereAny(['title', 'expert', 'content', 'tags'], 'like', '%' . $searchString . '%');
    }
}