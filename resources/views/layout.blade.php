<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <style>
        /* Reset & Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #fafafa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Typography */
        html {
            font-size: 16px;
        }
        
        h1, h2, h3 {
            font-weight: 400;
            letter-spacing: -0.5px;
        }
        
        /* Navigation */
        nav {
            
            padding: 1.5rem 0;
            position: sticky;
            top: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #eee;
            z-index: 100;
        }
        
        nav ul {
            
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2.5rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        nav a {
            text-decoration: none;
            color: #666;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: color 0.2s ease;
            padding: 0.5rem 0;
            position: relative;
        }
        
        nav a:hover {
            color: #222;
        }
        
        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background: #222;
            transition: width 0.3s ease;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        /* Main Content */
        .container {
            flex: 1;
            max-width: 800px;
            width: 90%;
            margin: 3rem auto;
            padding: 0 1rem;
        }
        
        /* Content Area */
        .content {
            background: white;
            padding: 3rem 2rem;
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        }
        
        /* Footer */
        footer {
            padding: 2rem;
            text-align: center;
            color: #888;
            font-size: 0.85rem;
            border-top: 1px solid #eee;
            margin-top: auto;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            
            .container {
                margin: 2rem auto;
            }
            
            .content {
                padding: 2rem 1.5rem;
            }
        }
        
        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .container {
            animation: fadeIn 0.4s ease-out;
        }
        
        /* Selection */
        ::selection {
            background: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('projects') }}">Work</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    
    <div class="container">
        <main class="content">
            @yield('content')
        </main>
    </div>
    
    <footer>
        <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>