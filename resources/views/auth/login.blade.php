<x-auth.layout>
    @slot('title')
        Login
    @endslot
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="{{ asset('backend') }}/assets/images/logos/dark-logo.svg" width="180"
                                    alt="">
                            </a>
                            <p class="text-center">Login</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Username</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username">
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required
                                        autocomplete="current-password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input primary" type="checkbox" id="remember_me"
                                            name="remember">
                                        <label class="form-check-label text-dark" for="remember_me">
                                            Remember this Device
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="text-primary fw-bold" href="{{ route('password.request') }}">Forgot
                                            Password ?</a>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign
                                    In</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">Create an
                                        account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-auth.layout>
