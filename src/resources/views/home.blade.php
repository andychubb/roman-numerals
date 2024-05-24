<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Roman Numerals Converter</title>
</head>
<body>
    <h1>Roman Numerals Converter</h1>
    <form action="{{ route('convert') }}" method="POST">
        @csrf
        <label for="value">Enter a number or Roman numeral:</label>
        <input type="text" id="value" name="value" required>
        <button type="submit">Convert</button>
    </form>
</body>
</html>