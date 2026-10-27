<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Café Management</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f3ef;
            margin: 0;
            padding: 30px;
            color: #333;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }

        h1 {
            color: #4b2e24;
        }

        a {
            color: #8b4513;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #4b2e24;
            color: white;
        }

        .back {
            display: inline-block;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a class="back" href="{{ route('dashboard') }}">← Back to Dashboard</a>

        <h1>Products</h1>
        <p>View your café products and current stock.</p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Availability</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category_name ?? 'Uncategorized' }}</td>
                        <td>₱{{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock_quantity }}</td>
                        <td>{{ $product->is_available ? 'Available' : 'Unavailable' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No products found. Add sample data to get started.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
