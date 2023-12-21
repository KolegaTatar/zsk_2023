<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Car</title>
</head>
<body>
    <h3>Create Car</h3>
    <form action="CarController" method="get">
        @csrf

        <label for="brand">Podaj brand:
            <input type="text" name="brand" id="brand" value="{{old('brand')}}">
        </label>
        @error("brand")
            {{$message}}
        @enderror <br> <br>

        <label for="model">Podaj model:
            <input type="text" name="model" id="model" value="{{old('model')}}">
        </label>
        @error("model")
            {{$message}}
        @enderror <br> <br>

        <label for="price">Podaj price:
            <input type="text" name="price" id="price" value="{{old('price')}}">
        </label>
        @error("price")
            {{$message}}
        @enderror <br> <br>
        <input type="submit" value="wyślij">
    </form>
</body>
</html>