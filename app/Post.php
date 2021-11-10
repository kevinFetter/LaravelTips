<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

//vai converter tudo para caixa baixa
//passar tudo pra minusculo e vai por no plural
class Post extends Model
{
    //OBS>Devo setar todos os atributos para que possa atender todas as necessidades 

    //saber qual é a tabela que o framework vai fazer a gestão
    protected $table = "posts";
    //quando rodar um fresh nas migrations, deve setar como false se não quiser usar
    public $timestamps = false;


    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    public function setTitleAttribute($value) 
    {
        $this->attributes['title'] = $value;
        //o Str é um helper que se encarrega já da acentuação e faz com que armazene de forma certa no DB
        $this->attributes['slug'] = Str::slug($value);
    }
}
