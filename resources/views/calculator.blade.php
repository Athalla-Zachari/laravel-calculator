<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/calculator" method="POST">
        @csrf
        <input type="number" name="number1" id="number1" required>
        
        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input type="number" name="number2" id="number2" required>
        <button type="submit">=</button>
    </form>

    @if (isset($result))
        <h2>Result: {{$result}}</h2>
    @endif
</body>
</html>