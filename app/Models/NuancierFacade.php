<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class NuancierFacade extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    public $incrementing = false;

    // Initialisation des événements du modèle
    protected static function boot()
    {
        parent::boot();

        // Générer un UUID pour chaque nouvel article
        self::creating(function ($nuancier) {
            $nuancier->id = (string) Str::uuid();
        });

        // Tri par défaut selon la colonne "priority" en ordre croissant
        static::addGlobalScope('order', function ($builder) {
            $builder->orderBy('priority', 'asc');
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function document()
    {
        return $this->morphOne(Document::class, 'documentable');
    }
}
