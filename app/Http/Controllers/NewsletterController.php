<?php

namespace App\Http\Controllers;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
   public function newsletter(Request $request) {
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;        
        
        if(Newsletter::where('email', $newsletter->email )->exists()) {
            return redirect('/')->with('error', 'E-mail já está cadastrado!');
        } else {
            if(filter_var($newsletter->email, FILTER_VALIDATE_EMAIL)) {
                $newsletter->save();
                return redirect('/')->with('success', 'Você se cadastrou com sucesso!');
            } else {
                return redirect('/')->with('error', 'Digite um e-mail válido!');
            }
        }
    }
}