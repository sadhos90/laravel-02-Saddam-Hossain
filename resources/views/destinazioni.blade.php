<x-layout>





      <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bg-info p-5">Ecco le nostre destinazioni</h1>
            </div>
        </div>
      </div>

      <div class="container">
        <div class="row text-center justify-content-center">
            @foreach ($viaggi as $viaggio)
                <div class="col-3">
                  <div class="card" style="width: 20rem;">
                      <img src="{{$viaggio['img']}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{$viaggio['name']}}</h5>
                        <p class="card-text">Notti: {{$viaggio['notti']}}</p>
                        <p class="card-text">Prezzo: £ {{$viaggio['costo']}}</p>
                        <a href="{{route('dettaglio', ['name' => $viaggio ['name']])}}" class="btn btn-primary">Dettagli</a>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



  </x-layout>