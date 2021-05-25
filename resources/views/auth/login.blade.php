<!DOCTYPE html>
<html lang="en">

@include('dashboard.layout.head')


<body class="login-page">
    @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
    <h1 style="color: red"> {{$error}}</h1>
    @endforeach
    @endif
    @if(session('error'))
    <h1 style="color: red"> {{session('error')}}</h1>
    @endif
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                        <div class="authent-logo">
                            <img src="../../assets/images/logo@2x.png" alt="">
                        </div>
                        <div class="authent-text">
                            <p>Welcome to Refugee</p>
                            <p>Please Sign-in to your account.</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">Sign In</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.layout.script')

</body>

</html>