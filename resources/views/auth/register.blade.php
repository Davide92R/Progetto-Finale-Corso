<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control"  name="name">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control">
                      <div  class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
                      <input type="password" class="form-control" name="password_confirmation">
                    </div>

                    <button type="submit" class="button-64" role="button"><span class="text">Register</span></button>

                  </form>
            </div>
        </div>
    </div>

</x-layout>
