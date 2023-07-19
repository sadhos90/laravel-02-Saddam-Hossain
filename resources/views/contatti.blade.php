<x-layout title="FastTravel-Contatti">



      <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bg-info p-5">Ecco i nostri contatti</h1></h1>
            </div>
        </div>
      </div>

      <div class="container">
        <div class="row text-center justify-content-center">
            @foreach ($contatti as $contatto)
                <div class="col-3">
                  <x-cardContatti :contatto='$contatto'></x-cardContatti>
                </div>
            @endforeach
        </div>
    </div>

 
    
  </x-layout>