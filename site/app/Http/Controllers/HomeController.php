<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about() {
        return view('about', [
        ]);
    }

    public function school() {
        return view('school', [
        ]);
    }

    public function projet() {
        return view('projet', [
        ]);
    }

    public function experience() {
        return view('experience', [
        ]);
    }

    public function contact() {
        return view('contact', [
        ]);
    }

    public function mail(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $email_form = 'gabindepaire@gmail.com';
        $email_subject = "Message Site CV";
        $email_body = "Sujet: $name.\n".
                    "User Emails: $email.\n".
                    "User Message: $message.\n\n\n";


        if ($request->input('maquette')) {
            $email_body .= "Projet: Maquette\n";
        }
        
        if ($request->input('vitrine')) {
            $email_body .= "Projet: Vitrine\n";
        }
        
        if ($request->input('ecommerce')) {
            $email_body .= "Projet: E-Commerce\n";
        }

        $to = "gabin.depaire@ynov.com";

        $headers = "From: $email_form \r\n";

        mail($to, $email_subject, $email_body, $headers);

        return back()->with('success', 'Votre message a bien été envoyé !');
    }

    
}
