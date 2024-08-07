<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('pros.store')}}" method="post">
        @csrf
        @method('post')
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">description:</label><br>
        <input type="text" id="description" name="description" required><br><br>

        <label for="qty">Quantity:</label><br>
        <input type="text" id="qty" name="qty" required><br><br>

        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>