<x-layout>
    <main class="auth layout">
      <div class="container">
        <div class="layout__box">
          <div class="layout__boxHeader">
            <div class="layout__boxTitle">
              <h3>Sign Up</h3>
            </div>
          </div>
          <div class="layout__body">
            <h2 class="auth__tagline">Find your study partner</h2>

            <form class="form" action="{{ route('users.store') }}" method="POST">
              @csrf
              <div class="form__group form__group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{old('email')}}" placeholder="e.g. abc@edf.com" />
                @error('email')
                    <p class="error-message">{{$message}}</p>
                @enderror
              </div>

              <div class="form__group form__group">
                <label for="name">Username</label>
                <input id="name" name="name" type="text" value="{{old('name')}}" placeholder="e.g. dennis_ivy" />
                @error('name')
                    <p class="error-message">{{$message}}</p>
                @enderror
              </div>

              <div class="form__group">
                <label for="password">Password</label>
                <input
                  id="password"
                  name="password"
                  type="password"
                  placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                />
                @error('password')
                    <p class="error-message">{{$message}}</p>
                @enderror
              </div>

              <div class="form__group">
                <label for="password_confirmation">Confirm Password</label>
                <input
                  id="password_confirmation"
                  name="password_confirmation"
                  type="password"
                  placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>

              <button class="btn btn--main" type="submit">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <title>lock</title>
                  <path
                    d="M27 12h-1v-2c0-5.514-4.486-10-10-10s-10 4.486-10 10v2h-1c-0.553 0-1 0.447-1 1v18c0 0.553 0.447 1 1 1h22c0.553 0 1-0.447 1-1v-18c0-0.553-0.447-1-1-1zM8 10c0-4.411 3.589-8 8-8s8 3.589 8 8v2h-16v-2zM26 30h-20v-16h20v16z">
                  </path>
                  <path
                    d="M15 21.694v4.306h2v-4.306c0.587-0.348 1-0.961 1-1.694 0-1.105-0.895-2-2-2s-2 0.895-2 2c0 0.732 0.413 1.345 1 1.694z">
                  </path>
                </svg>

                Login
              </button>
            </form>

            <div class="auth__action">
                <p>Already had an account?</p>
                <a href="{{ route('login') }}" class="btn btn--link">Sign In</a>
            </div>
          </div>
        </div>
      </div>
    </main>
</x-layout>