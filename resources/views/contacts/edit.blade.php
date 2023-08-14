@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Editar Contacto</div>

          <div class="card-body">
            <form method="POST"
              action="{{ route('contacts.update', $contact->id) }}">
              @csrf
              @method("PUT")
              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-end">Nombre</label>

                <div class="col-md-6">
                  <input id="name" type="text"
                    class="form-control
                    @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') ?? $contact->name }}"
                    autocomplete="name" autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="phone_number"
                  class="col-md-4 col-form-label text-md-end">Telefono</label>

                <div class="col-md-6">
                  <input id="phone_number" type="tel"
                    class="form-control @error('phone_number') is-invalid @enderror"
                    name="phone_number"
                    value="{{ old('phone_number') ?? $contact->phone_number }}"
                    autocomplete="phone_number">

                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Email</label>

                <div class="col-md-6">
                  <input id="email" type="text"
                    class="form-control
                    @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') ?? $contact->email }}"
                    autocomplete="email" autofocus>

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="age"
                  class="col-md-4 col-form-label text-md-end">Edad</label>

                <div class="col-md-6">
                  <input id="age" type="number"
                    class="form-control
                    @error('age') is-invalid @enderror"
                    name="age" value="{{ old('age') ?? $contact->age }}"
                    autocomplete="age" autofocus>

                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
