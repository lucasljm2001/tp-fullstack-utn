@extends('layouts.with-navbar')

@section('title', 'Inicio')

@section('customJS')
<script type="text/javascript" src="{{asset('js/landing.js')}}"></script>
@endsection

@section('customCSS')
<link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endsection

@section('body')
<!-- Navbar -->
@parent
<!-- Content -->

<div id="section1">
    <div class="container">
        <div class="row justify-content-end align-items-center">
            <div class="col-8 text-white">
                <h1>My Gym</h1>
                <h2>Queremos hacerte lindo y fuerte papito</h2>
            </div>
            <div class="col-4">
                <iframe src='https://my.spline.design/cylindersanimationcopy-43c0e5e1ed68a1131b25d698596a2193/' frameborder='0' width='100%' height='700px'></iframe>
            </div>
        </div>
    </div>
</div>
<section>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorem.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, laborum?
    </p>    
</section>
<section>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorem.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, laborum?
    </p>    
</section>
<section>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorem.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, laborum?
    </p>    
</section>
<footer>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorem.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, laborum?
    </p>    
</footer>
@endsection