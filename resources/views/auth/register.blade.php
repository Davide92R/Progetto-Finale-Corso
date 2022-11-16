<x-layout>
  @if (session()->has('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}" class="mt-5">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('ui.name')}}</label>
                        <input type="text" class="form-control"  name="name">
                        {{-- @error('title')
                          {{$message}}
                        @enderror --}}
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">{{__('ui.mail')}}</label>
                      <input name="email" type="email" class="form-control">
                      <div  class="form-text">{{__('ui.thirdParties')}}.</div>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">{{__('ui.confirm')}}</label>
                      <input type="password" class="form-control" name="password_confirmation">
                    </div>

                    <button type="submit" class="button-64" role="button"><span class="text">{{__('ui.register')}}</span></button>

                  </form>
            </div>
        </div>
    </div>

</x-layout>
