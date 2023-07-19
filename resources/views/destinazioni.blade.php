<x-layout title="FastTravel-Destinazioni">





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
                  <x-card name="{{$viaggio['name']}}"
                          img="{{$viaggio['img']}}"
                          notti="{{$viaggio['notti']}}"
                          costo="{{$viaggio['costo']}}"></x-card>
                          
                </div>
            @endforeach
        </div>
    </div>



  </x-layout>