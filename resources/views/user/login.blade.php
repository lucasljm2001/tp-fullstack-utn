@extends('layouts.bootstrap5')


@section('title', 'Sign In')

@section('customCSS')
<link rel="stylesheet" href="{{ url('css/login.css') }}">
@endsection

@section('body')
<section class="vh-100 user-select-none">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100 bg-light rounded">
            <div class="col-md-9 col-lg-6 col-xl-5 ">
                <img src="https://cdn.forbes.com.mx/2020/10/crossfit.jpg" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form>
                    <div clas="sign-in-container">
                        <i class="fa fa-unlock-alt mt-3 mb-4 sign-in-logo" aria-hidden="true"></i>
                    </div>
                    <h1 class="h3 mb-3 fw-normal">{{__('messages.signInWelcome')}}</h1>

                    <!-- Email Input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="{{__('placeholders.email')}}" required />
                        <label class="form-label" for="form3Example3" required>{{__('labels.email')}}</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="{{__('placeholders.password')}}" required />
                        <label class="form-label" for="form3Example4" required>{{__('labels.password')}}</label>
                        <div id="passWordValidation" class="invalid-feedback">
                            {{__('auth.failed')}}
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                {{__('messages.rememberMe')}}
                            </label>
                        </div>
                        <a href="#!" class="text-body">{{__('messages.forgotPw?')}}</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">{{__('labels.signIn')}}</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">{{__('messages.noAccount?')}} <a href="#!" class="link-danger">{{__('labels.signUp')}}</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
