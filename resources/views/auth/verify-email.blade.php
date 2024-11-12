<x-auth.layout>
    @slot('title')
        Verify Email
    @endslot
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <p class="text-center">Please verify your email address by clicking the link we sent to your
                                email.</p>
                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-success" role="alert">
                                    A new verification link has been sent to your email address.
                                </div>
                            @endif
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Resend
                                    Verification Email</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth.layout>
