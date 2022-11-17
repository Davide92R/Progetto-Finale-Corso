<x-layout>
  {{-- <div class="container my-5">
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
  </div> --}}
  <div class="containerLogin vh-100">
    <div class="screen">
      <div class="screen__content">
        <form class="login" method="POST" action="{{route('login')}}">
          @csrf
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <span>email</span>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <span>password</span>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button class="button login__submit">
            <span class="button__text">Log In Now</span>
            <i class="button__icon fas fa-chevron-right"></i>
          </button>				
        </form>
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>		
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>		
    </div>
  </div>

</x-layout>

