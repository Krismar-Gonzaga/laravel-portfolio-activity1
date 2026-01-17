@extends('layout')
@section('title', 'Projects')
@section('content')
    <div style="max-width: 800px; margin: 0 auto;">
        <div style="margin-bottom: 3rem;">
            <h1 style="
                font-size: 1.8rem;
                font-weight: 400;
                color: #222;
                margin-bottom: 1rem;
            ">
                Projects
            </h1>
            <div style="
                width: 40px;
                height: 1px;
                background: #222;
            "></div>
        </div>

        <div style="
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        ">
            @foreach($projects as $project)
            <div style="
                padding: 2rem;
                border: 1px solid #eee;
                transition: all 0.2s ease;
            " onmouseover="this.style.borderColor='#ddd'"
               onmouseout="this.style.borderColor='#eee'">
                <h3 style="
                    font-size: 1.2rem;
                    font-weight: 400;
                    color: #222;
                    margin-bottom: 0.8rem;
                ">
                    {{ $project['title'] }}
                </h3>
                <p style="
                    color: #666;
                    line-height: 1.6;
                    font-size: 0.95rem;
                ">
                    {{ $project['description'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
@endsection