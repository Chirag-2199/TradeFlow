<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Added Notification</title>
</head>
<body>
    <h2 style="color: #23297f;">New Stock Added</h2>
    <p>Hello,</p>
    <p>A new stock has been added to TradeFlow.</p>
    <strong>Stock Details:</strong>
    <ul>
        <li><strong>Name:</strong> {{ $stock->name }}</li>
        <li><strong>Quantity:</strong> {{ $stock->quantity }}</li>
        <li><strong>Price:</strong> ${{ $stock->price }}</li>
        <li><strong>Category:</strong> {{ $stock->category }}</li>
    </ul>
    <p>Thank you for using TradeFlow.</p>
</body>
</html>
