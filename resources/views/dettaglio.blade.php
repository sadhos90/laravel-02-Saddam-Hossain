<x-layout>





      <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bg-info p-5">Dettagli destinazione</h1>
            </div>
        </div>
      </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="text-center">Città: {{$viaggio['name']}}</h1>
                <h5 class="text-center">Notti: {{$viaggio['notti']}}</h5>
                <h5 class="text-center">Costo: {{$viaggio['costo']}}</h5>
            </div>
            <div class="col-6">
                <img class="img-thumbnail" src="{{$viaggio['img']}}" alt="">
            </div>
        </div>
    </div>

  

  </x-layout>