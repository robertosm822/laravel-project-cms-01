<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = ['contact_name','contact_email','assunto','mensagem'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'contatos';
}
