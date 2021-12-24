<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    protected $fillable=[
        'nombre_empresa',
        'nombre_corto',
        'tipo_empresa',
        'rep_empresa',
        'email_empresa',
        'direccion',
        'telf_empresa',
        'socios',
    ];
    public static $rules = array(
        'nombre_empresa'=> ['required', 'string', 'max:50', 'unique:empresas'],
        'nombre_corto'=> ['required', 'string', 'max:10', 'unique:empresas'],
        'tipo_empresa'=> ['required', 'string', 'max:50'],
        'rep_empresa'=> ['required', 'string', 'max:50'],
        'email_empresa'=> ['required', 'string', 'max:50', 'unique:empresas','email'],
        'direccion'=> ['string', 'max:80'],

        'telf_empresa'=> ['required','integer','digits_between:9,9'],
        'socios'=> ['required', 'string', 'max:255'],
    );

        'telf_empresa'=> ['required','integer','digits_between:7,8'],
        'socios'=> ['string', 'max:255'],
    );
    public function users()
    {
        return $this->hasMany(User::class,'id');
    }
    
}