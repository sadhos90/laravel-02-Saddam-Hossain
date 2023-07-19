<x-layout>



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
                  <div class="card" style="width: 20rem;">
                      <img src="{{$contatto['image']}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nome: {{$contatto['name']}} {{$contatto['surname']}}</h5>
                        <p class="card-text">Ruolo: {{$contatto['role']}}</p>
                        <a href="{{route('dettaglioTeam', ['id' => $contatto ['id']])}}" class="btn btn-primary">Scopri di più</a>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

 
    
  </x-layout>