<x-layout>

    <div class="container-fluid vh-100 bgLoginRegister">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 loginForm">
                    <h1 class="loginTitle">Login</h1>
                    <form method="POST" action="{{route('login')}}" class="loginPost">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                          <input name="email" type="email" class="form-control loginInput" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">Non scambieremo la tua email con parti terze.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input name="password" type="password" class="form-control loginInput" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="loginRegisterButton" role="button"><span class="loginRegisterTextButt">Login</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>

