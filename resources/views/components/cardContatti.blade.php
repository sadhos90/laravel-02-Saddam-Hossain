<div class="card" style="width: 20rem;">
    <img src="{{$contatto['image']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nome: {{$contatto['name']}} {{$contatto['surname']}}</h5>
      <p class="card-text">Ruolo: {{$contatto['role']}}</p>
      <p class="card-text">CV: {{substr($contatto['aboutMe'], 0, 25)}}...</p>
      <a href="{{route('dettaglioTeam', ['id' => $contatto ['id']])}}" class="btn btn-primary">Scopri di più</a>
    </div>
  </div>