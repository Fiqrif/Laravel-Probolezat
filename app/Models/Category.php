<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id_categories';
    public $incrementing = true;
    protected $fillable = ['nama', 'harga', 'deskripsi','gambar'];
    public $timestamps = false;
    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'category_id', 'id_categories');
    }
}

