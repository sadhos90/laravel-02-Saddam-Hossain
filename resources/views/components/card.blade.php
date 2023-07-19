<div class="card" style="width: 20rem;">
    <img src="{{$img}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$name}}</h5>
      <p class="card-text">Notti: {{$notti}}</p>
      <p class="card-text">Prezzo: £ {{$costo}}</p>
      <a href="{{route('dettaglio', ['name' => $name])}}" class="btn btn-primary">Dettagli</a>
    </div>
  </div>