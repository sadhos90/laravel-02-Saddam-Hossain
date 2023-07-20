<x-layout title="Contattaci">

    <div class="container  p-5">
        <div class="row h-50%">
            <div class="col-12">
                <h1 class="text-center bg-info p-5">Lasciaci un messaggio</h1>
            </div>
        </div>
      </div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('contactUsSubmit')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nome</label>
                  <input name="name" type="text" class="form-control" >
                </div>
                <div class="mb-3 form-check">
                    <div class="form-floating">
                        <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                      </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>








</x-layout>