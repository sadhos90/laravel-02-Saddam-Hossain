<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $viaggi = [
        [
            'name' => 'Amsterdam',
            'notti' => '5',
            'costo' => '500',
            'img' => '/img/amsterdam.jpg'
        ],
        [
            'name' => 'Vienna',
            'notti' => '3',
            'costo' => '300',
            'img' => '/img/vienna.jpg'
        ],
        [
            'name' => 'Napoli',
            'notti' => '5',
            'costo' => '500',
            'img' => '/img/napoli.jpg'
        ]
        ];

        public $contatti = [
            [   
                'id' => 1,
                'name' => 'Saddam',
                'surname' => 'Hossain',
                'role' => 'Receptionist',
                'image' => '/img/saddam.jpg',
                'aboutMe' => 'bbicus uhudsiojspd uhibduc ibybib uindc u uhinusdo oiasodud uhhu siudn '
            ],
            [
                'id' => 2,
                'name' => 'Shiam',
                'surname' => 'Hossain',
                'role' => 'Manager',
                'image' => '/img/siam.jpg',
                'aboutMe' => 'bbicus uhudsiojspd uhibduc ibybib uindc u uhinusdo oiasodud uhhu siudn '
            ],
            [   
                'id' => 3,
                'name' => 'Samir',
                'surname' => 'Hossain',
                'role' => 'Attore',
                'image' => '/img/samir.jpg',
                'aboutMe' => 'bbicus uhudsiojspd uhibduc ibybib uindc u uhinusdo oiasodud uhhu siudn '
            ]
            ];

    function destinazioni () {
        
        return view('destinazioni', ['viaggi' => $this->viaggi]);
    }

    function contatti (){
        
    
        return view('contatti', ['contatti' => $this->contatti]);
    
    }

    function dettaglioTeam ($id){
            
            foreach ($this->contatti as $contatto){
                if ($id == $contatto ['id']){
                    return view('dettaglioTeam', ['contatto' => $contatto]);
                }
            }
        return view('dettaglioTeam');
    }

    function dettaglioViaggi ($name){
    
            foreach ($this->viaggi as $viaggio){
                if ($name == $viaggio ['name']){
                    return view('dettaglio', ['viaggio' => $viaggio]);
                }
            }
    
    }

    public function welcome (){
        return view('welcome');
    }

    public function contactUs (){
        return view('contactUs');
    }

    public function contactUsSubmit (Request $request){
        $name = $request->input("name");
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::to($email)->send(new ContactMail($name, $email, $message));
        
        return redirect(route('welcome'))->with('message', 'Grazie per averci contattato, Email inviata con successo');

    }

}
