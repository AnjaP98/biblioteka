<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategorijaClana extends Model
{
    use HasFactory;
    protected $table= 'kategorija_clanas';
    protected $fillable =['naziv_kategorije'];


    public function kategorija(){
        return $this->hasMany(Clan::class);
    }
}
