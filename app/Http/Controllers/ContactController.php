<?php

Namespace App\Http\Controllers;

use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Contact;

Class ContactController extends Controller
{
 
	public function mailToAdmin(ContactFormRequest $message, Contact $admin)
	{   
        
             //Envoie une notification au contact
		$admin->notify(new InboxMessage($message));
		
		return redirect()->back()->with('message', 'Merci pour votre message! Nous reviendrons vers vous le plus vite possible!');
	}
}
