<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}" class="mt-5">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Non scambieremo la tua email con parti terze.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="button-64" role="button"><span class="text">Login</span></button>
                  </form>
            </div>
        </div>
    </div>

</x-layout>
