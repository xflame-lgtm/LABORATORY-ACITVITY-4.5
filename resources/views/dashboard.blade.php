
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Management System</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f3ef;
            color: #333;
        }

        header {
            background: #4b2e24;
            color: white;
            padding: 22px 30px;
        }

        header h1 {
            margin: 0;
            font-size: 26px;
        }

        header p {
            margin-bottom: 0;
            color: #eadbd1;
        }

        main {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 3px 12px #00000010;
        }

        .card h2 {
            margin-top: 0;
            color: #4b2e24;
        }

        .card p {
            color: #666;
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            color: #8b4513;
            font-weight: bold;
            text-decoration: none;
        }

        .card a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <h1>Café Management System</h1>
        <p>Manage your café operations in one place.</p>
    </header>

    <main>
        <h2>Dashboard</h2>
        <p>Select a section to manage your café.</p>

        <div class="cards">
            <section class="card">
                <h2>Products</h2>
                <p>Manage product names, prices, and stock.</p>
                <a href="{{ route('products.index') }}">View Products →</a>
            </section>

            <section class="card">
                <h2>Categories</h2>
                <p>Organize products into categories.</p>
                <a href="#">Coming soon</a>
            </section>

            <section class="card">
                <h2>Customers</h2>
                <p>Manage customer information.</p>
                <a href="#">Coming soon</a>
            </section>

            <section class="card">
                <h2>Orders</h2>
                <p>Create and view customer orders.</p>
                <a href="#">Coming soon</a>
            </section>

            <section class="card">
                <h2>Payments</h2>
                <p>Track payments for customer orders.</p>
                <a href="#">Coming soon</a>
            </section>
        </div>
    </main>
</body>
</html>
