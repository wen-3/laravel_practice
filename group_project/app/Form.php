<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
    protected $fillable = ['contact_name','contact_phone','contact_email','message_content'];
}
