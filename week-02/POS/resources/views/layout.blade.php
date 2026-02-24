<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'POS App')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f5f5f5;
            line-height: 1.6;
        }
        .navbar {
            background: #2c3e50;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 1.5rem;
            font-size: 1rem;
            transition: color 0.3s;
        }
        .navbar a:hover { color: #3498db; }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }
        .card {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 { color: #2c3e50; margin-bottom: 1.5rem; }
        ul { list-style: none; }
        li { margin-bottom: 0.5rem; }
        a { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th { background: #f8f9fa; font-weight: 600; }
        tr:hover { background: #f5f5f5; }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn:hover { background: #2980b9; text-decoration: none; }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }
        .category-card {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 6px;
            text-align: center;
            transition: transform 0.3s;
        }
        .category-card:hover { transform: translateY(-3px); }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/">🏠 Home</a>
        <a href="/products">📦 Produk</a>
        <a href="/sales">💰 Transaksi</a>
    </nav>

    <div class="container">
        <div class="card">
            @yield('content')
        </div>
    </div>
</body>
</html>