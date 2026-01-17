@extends('layout')
@section('title', 'Contact')
@section('content')
    <div style="max-width: 500px; margin: 0 auto;">
        <div style="margin-bottom: 3rem;">
            <h1 style="
                font-size: 1.8rem;
                font-weight: 400;
                color: #222;
                margin-bottom: 1rem;
            ">
                Contact
            </h1>
            <div style="
                width: 40px;
                height: 1px;
                background: #222;
            "></div>
        </div>

        <div style="margin-bottom: 2rem;">
            <p style="
                color: #666;
                line-height: 1.6;
                font-size: 0.95rem;
                margin-bottom: 2rem;
            ">
                Reach out via email or phone.
            </p>
        </div>

        <div style="
            padding: 2rem 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        ">
            <div style="margin-bottom: 1.5rem;">
                <div style="
                    font-size: 0.9rem;
                    color: #888;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    margin-bottom: 0.5rem;
                ">
                    Email
                </div>
                <a href="mailto:{{ $email }}" style="
                    color: #222;
                    text-decoration: none;
                    font-size: 1rem;
                    transition: color 0.2s ease;
                " onmouseover="this.style.color='#555'"
                   onmouseout="this.style.color='#222'">
                    {{ $email }}
                </a>
            </div>

            <div>
                <div style="
                    font-size: 0.9rem;
                    color: #888;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    margin-bottom: 0.5rem;
                ">
                    Phone
                </div>
                <div style="color: #222; font-size: 1rem;">
                    {{ $phone }}
                </div>
            </div>
        </div>
    </div>
@endsection