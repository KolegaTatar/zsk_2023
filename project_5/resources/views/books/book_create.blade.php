<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h3>Create Book</h3>

    <form action="" method="get">
        @csrf

        <label for="name">
            <input type="text" name="name" id="name" value="{{old('name')}}">
        </label>
        @error('name')
            {{$message}}
        @enderror <br> <br>

        <label for="description">
            <input type="text" name="description" id="description" value="{{old('description')}}">
        </label>
        @error('description')
            {{$message}}
        @enderror <br> <br>

        <label for="price">
            <input type="text" name="price" id="price" value="{{old('price')}}">
        </label>
        @error('price')
            {{$message}}
        @enderror <br> <br>

        <input type="sumbit" value="submit">
    </form>
</body>
</html>