<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','categorie_id'];
    protected $table = 'products';

    public function categorie()
    {
        $this->belongsTo(categorieModel::class,'categorie_id');
    }
}
