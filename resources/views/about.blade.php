@extends('layout')
@section('title', 'About')
@section('content')
    <div style="max-width: 600px; margin: 0 auto;">
        <div style="margin-bottom: 3rem;">
            <h1 style="
                font-size: 1.8rem;
                font-weight: 400;
                color: #222;
                margin-bottom: 1rem;
            ">
                About
            </h1>
            <div style="
                width: 40px;
                height: 1px;
                background: #222;
            "></div>
        </div>
        
        <div style="margin-bottom: 2.5rem;">
            <h2 style="
                font-size: 1.5rem;
                font-weight: 400;
                color: #222;
                margin-bottom: 0.8rem;
            ">
                {{ $name }}
            </h2>
            
            <div style="margin-top: 1rem;">
                <p style="
                    color: #666;
                    font-size: 0.9rem;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    margin-bottom: 0.3rem;
                ">
                    Education
                </p>
                <p style="color: #444; margin-bottom: 0.2rem;">
                    {{ $course }}
                </p>
                <p style="color: #666; font-size: 0.95rem;">
                    {{ $university }}
                </p>
            </div>
        </div>
        
        <div style="
            padding-top: 2rem;
            border-top: 1px solid #eee;
        ">
            <p style="
                line-height: 1.7;
                color: #555;
                font-size: 1rem;
            ">
                A student exploring web development with Laravel.
                Interested in building applications and solving problems through code.
                Focused on creating meaningful digital solutions.
            </p>
        </div>
    </div>
@endsection