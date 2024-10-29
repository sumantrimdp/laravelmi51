<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Komputer extends Model
{
    use HasFactory;

    protected $fillable = ['kode_komputer', 'spesifikasi', 'ruang_id'];

    public function ruang() {
        return $this->belongsTo(Ruang::class, 'ruang_id', 'id');

    }
}
