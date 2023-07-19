<x-layout>





      <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bg-info p-5">Scopri di più sul nostro team</h1>
            </div>
        </div>
      </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h5 class="text-center">Nome: {{$contatto['name']}} {{$contatto['surname']}} </h5>
                <h1 class="text-center">{{$contatto['role']}}</h1>
            </div>
            <div class="col-6">
                <img src="{{$contatto['image']}}" class="img-thumbnail" alt="">
            </div>
        </div>
    </div>

 

  </x-layout>