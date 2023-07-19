<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
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
    return view('welcome', ['viaggi' => $viaggi]);
})->name('welcome');

Route::get('/contatti', function (){
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

})->name('contatti');

Route::get('/team/dettaglio/{id}', function($id){
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
})->name('dettaglioTeam');

Route::get('/dettaglio/{name}', function ($name){
    
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

})->name('dettaglio');

Route::get('/destinazioni', [PublicController::class, 'destinazioni']);
