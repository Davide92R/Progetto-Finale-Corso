<x-layout>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <div class="container-fluid bgLoginRegister vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 registerForm">
                    <h1 class="loginTitle mt-5">Register</h1>
                    <form method="POST" action="{{route('register')}}" class="loginPost">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control loginInput"  name="name">
                            @error('title')
                            {{$message}}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Inserisci la tua mail</label>
                            <input name="email" type="email" class="form-control loginInput">
                            <div  class="form-text">Non scambieremo la tua email con parti terze.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control loginInput" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                            <input type="password" class="form-control loginInput" name="password_confirmation">
                        </div>

                        <button type="submit" class="loginRegisterButton" role="button"><span class="loginRegisterTextButt">Registra</span></button>

                    </form>
                </div>
            </div>
        </div>
    </div>





    {{-- <div class="containerLogin vh-100">
        <div class="screen">
            <div class="screen__content">
                <div class="col-12 col-md-8 d-flex justify-content-around paddata">
                    <form method="POST" action="{{route('register')}}" class="mt-5">
                        @csrf
                        <div class="login__field">
                            <i class="login__icon fas fa-user positionIcon"></i>
                            <span>nome</span>
                            <input type="text" class="form-control"  name="name">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-user positionIcon"></i>
                            <span>inserisci la tua email</span>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock positionIcon"></i>
                            <span>password</span>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock positionIcon"></i>
                            <span>conferma password</span>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                        <button class="button login__submit">
                            <span class="button__text">Registrati</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                    </form>

                </div>

            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div> --}}

</x-layout>
