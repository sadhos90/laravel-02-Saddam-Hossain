<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    function destinazioni () {
        $viaggi = [
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
        return view('destinazioni', ['viaggi' => $viaggi]);
    }

    function contatti (){
        $contatti = [
            [   
                'id' => 1,
                'name' => 'Saddam',
                'surname' => 'Hossain',
                'role' => 'Receptionist',
                'image' => '/img/saddam.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Shiam',
                'surname' => 'Hossain',
                'role' => 'Manager',
                'image' => '/img/siam.jpg'
            ],
            [   
                'id' => 3,
                'name' => 'Samir',
                'surname' => 'Hossain',
                'role' => 'Attore',
                'image' => '/img/samir.jpg'
            ]
            ];
    
        return view('contatti', ['contatti' => $contatti]);
    
    }

    function dettaglioTeam ($id){
        $contatti = [
            [   
                'id' => 1,
                'name' => 'Saddam',
                'surname' => 'Hossain',
                'role' => 'Receptionist',
                'image' => '/img/saddam.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Shiam',
                'surname' => 'Hossain',
                'role' => 'Manager',
                'image' => '/img/siam.jpg'
            ],
            [   
                'id' => 3,
                'name' => 'Samir',
                'surname' => 'Hossain',
                'role' => 'Attore',
                'image' => '/img/samir.jpg'
            ]
            ];
    
            foreach ($contatti as $contatto){
                if ($id == $contatto ['id']){
                    return view('dettaglioTeam', ['contatto' => $contatto]);
                }
            }
        return view('dettaglioTeam');
    }

    function dettaglioViaggi ($name){
    
        $viaggi = [
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
    
            foreach ($viaggi as $viaggio){
                if ($name == $viaggio ['name']){
                    return view('dettaglio', ['viaggio' => $viaggio]);
                }
            }
    
    }

    function welcome (){
        return view('welcome');
    }

}
