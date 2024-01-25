@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class='container pt-4 index-title'>
<h1 class=''><strong>Bruno Vargas Tettamanti</strong></h1>
</div>
<div class='container pb-4 index-subtitle'>    
    <h2 class=''>Software Developer</h2>
</div>

<div class="container-fluid pt-4">
    <section class='photo container-fluid pt-4 col-3 offset-7'>
        <div>
            <h2 class=''>Photo</h2>
        </div>
    </section>

    <section class='about-me container pt-4'>
        <div>
            <h2 class='text-center'>About me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                mollit anim id est laborum.</p>
        </div>
    </section>

    <section class='projects container pt-4'>
        <div>
            <h2 class='text-center'>Projects</h2>
        </div>
    </section>

    <section class='stack container pt-4'>
        <div>
            <h2 class='text-center'>Technologies</h2>
        </div>
    </section>

    <section class='education container pt-4'>
        <div>
            <h2 class='text-center'>Education</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                mollit anim id est laborum.</p>
        </div>
    </section>

    <section class='hobbies container pt-4'>
        <div>
            <h2 class='text-center'>Hobbies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                mollit anim id est laborum.</p>
        </div>
    </section>

    <section class='contact container pt-4'>
        <div>
            <h2 class='text-center'>Contact</h2>
        </div>
    </section>
</div>
@endsection