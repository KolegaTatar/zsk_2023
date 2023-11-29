<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product</title>
</head>
<body>
    <h3>Dodawanie produktu</h3>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div>
            <label for="name">Nazwa produktu</label>
            <input type="text" name="name" id="name" value="{{old('name')}}">
            @error('name')
                <div>{{$message}}</div>
            @enderror
        </div> <br>
        <div>
            <label for="price">Cena produktu</label>
            <input type="text" name="price" id="price" value="{{old('price')}}">
            @error('price')
                <div>{{$message}}</div>
            @enderror
        </div> <br>
        <div>
            <label for="description">Opis produktu</label>
            <textarea type="text" name="description" id="description" value="{{old('description')}}"></textarea>
            @error('description')
                <div>{{$message}}</div>
            @enderror
        </div> <br>
        <input type="submit" value="dodaj produkt">

    </form>
</body>
</html>