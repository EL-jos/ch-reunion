<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        // Générer un UUID pour chaque nouvel article
        self::creating(function ($blog) {
            $blog->id = (string) Str::uuid();
        });
    }

    public static function booted()
    {
        // Tri par défaut selon la colonne "priority" en ordre croissant
        static::addGlobalScope('order', function ($builder) {
            $builder->orderBy('created_at', 'asc');
        });
    }

    public function document()
    {
        return $this->morphOne(Document::class, 'documentable');
    }
}
