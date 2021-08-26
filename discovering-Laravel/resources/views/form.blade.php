@extends('layout')

@section('content')

    <div class="d-flex align-items-center justify-content-center" style="flex-direction: column">
        <h1>Form page</h1>
        <div>
            <p style="text-align: center">This is our form page. Here is a random cat 🐈. </br>Is it yours? Please confirm your identity.</p>

            <img id="photo" src="https://thecatapi.com/api/images/get?format=src&type=gif" alt="random cat"
                  style="padding-bottom: 30px; padding-top: 30px ">
        </div>

        <div>
            <form class="row g-3">

                <div class="col-auto">
                    <label for="staticEmail2" class="visually-hidden">Email</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2"
                           value="email@example.com">
                </div>
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>

            </form>
        </div>
    </div>

@endsection
