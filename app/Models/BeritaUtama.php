<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaUtama extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'type', 'thumb'
    ];

    public function images()
    {
        return $this->hasMany(BertamaImage::class);
    }
}
