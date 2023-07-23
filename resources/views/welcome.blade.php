
<x-layout title="FastTravel">



    <div class="container  p-5">
      <div class="row h-50%">
          <div class="col-12">
              <h1 class="text-center bg-info p-5">Benvenuti sul nostro sito di viaggi</h1>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
          </div>
      </div>
    </div>



</x-layout>


    