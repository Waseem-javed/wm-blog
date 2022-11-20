@extends('layouts.master')
@section('title','Signin')

@section('content')

<div class="container-fluid justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm-4 mx-auto mt-5">
            <form class="needs-validation" novalidate>
                <div class="card p-4">
                    <h4 class="text-primary">Sign In</h4>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control is-valid" id="username" required>
                        <label for="username">Email or Username</label>
                        <div class="valid-feedback">
                            Username is required!
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control is-invalid" id="password" required>
                        <label for="password">Password</label>
                        <div class="invalid-feedback">
                            Password is required!
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop