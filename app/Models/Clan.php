<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    use HasFactory;

    protected $table= 'clans';
    protected $fillable =['ime_prezime','kategorija_id'];


    public function kategorija(){
        return $this->belongsTo(KategorijaClana::class);
    }
}
