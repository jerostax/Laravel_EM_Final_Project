<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use Notifiable;

    protected $admin;
    protected $email;
	
    public function __construct() {
        $this->admin = config('contact.name');
        $this->email = config('contact.email');
    }
}