<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
</head>
<body>
    <h1>Product Catalog</h1>
    @if ($catalogData['status'])
        <h2>Products</h2>
        @foreach ($catalogData['data']['products'] as $productId => $product)
            <h3>Product ID: {{ $productId }}</h3>
            <ul>
                <li><strong>Product:</strong> {{ $product['product'] }}</li>
                <li><strong>Type:</strong> {{ $product['type'] }}</li>
                <li><strong>Datacenter:</strong> {{ $product['datacenter'] }}</li>
                <li><strong>Periodicity:</strong> {{ $product['periodicity'] }}</li>
                <li><strong>Resources:</strong>
                    <ul>
                        @foreach ($product['resources'] as $resource)
                            <li>{{ $resource['name'] }}: {{ $resource['value'] }} {{ $resource['unit'] }}</li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        @endforeach
    @else
        <p>Failed to fetch product catalog.</p>
    @endif
</body>
</html>
