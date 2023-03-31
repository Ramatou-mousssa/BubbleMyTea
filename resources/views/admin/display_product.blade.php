<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>my Bubble Tea</h1>
    <tbody>
    @foreach($products as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['price'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>{{ $item['category'] }}</td>
            <td>{{ $item['gallery'] }}</td>
            <td>{{ $item['description'] }}</td>
        </tr>
    @endforeach
</tbody>
</body>
</html>