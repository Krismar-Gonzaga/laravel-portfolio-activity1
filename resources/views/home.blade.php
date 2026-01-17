@extends('layout')

@section('title', 'Home')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; text-align: center;">
        <h1 style="
            font-size: 2.5rem;
            font-weight: 300;
            letter-spacing: -0.5px;
            margin-bottom: 1.5rem;
            color: #222;
        ">
            Welcome
        </h1>
        
        <div style="
            font-size: 1.1rem;
            line-height: 1.8;
            color: #666;
            margin-bottom: 2rem;
        ">
            <p style="margin-bottom: 1.5rem;">
                I'm a web developer focused on creating clean, functional applications.
            </p>
            
            <p>
                Explore my work and connect with me.
            </p>
        </div>
        
        <div style="
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid #eee;
        ">
            <a href="{{ route('projects') }}" style="
                display: inline-block;
                padding: 0.8rem 2rem;
                border: 1px solid #222;
                color: #222;
                text-decoration: none;
                font-size: 0.9rem;
                letter-spacing: 1px;
                transition: all 0.2s ease;
            " onmouseover="this.style.backgroundColor='#222'; this.style.color='white'"
               onmouseout="this.style.backgroundColor='transparent'; this.style.color='#222'">
                View Work
            </a>
        </div>
    </div>
@endsection