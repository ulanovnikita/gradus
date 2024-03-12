<!DOCTYPE html>
<html>
<head>
    <title>Конвертер температуры</title>
</head>
<body>
    <h2>Выберите единицы измерения температуры и введите значение:</h2>
    <form method="post" action="">
        <input type="radio" id="celsius" name="unit" value="celsius" checked>
        <label for="celsius">Градусы Цельсия</label>
        <input type="radio" id="fahrenheit" name="unit" value="fahrenheit">
        <label for="fahrenheit">Градусы Фаренгейта</label><br><br>
        <input type="text" name="temperature" placeholder="Температура" required><br><br>
        <input type="submit" name="convert" value="Преобразовать">
    </form>

    <?php
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    if(isset($_POST['convert'])) {
        $unit = $_POST['unit'];
        $temperature = $_POST['temperature'];

        if($unit === 'celsius') {
            $converted_temperature = celsiusToFahrenheit($temperature);
            echo "<p>$temperature градусов Цельсия = $converted_temperature градусов Фаренгейта</p>";
        } elseif($unit === 'fahrenheit') {
            $converted_temperature = fahrenheitToCelsius($temperature);
            echo "<p>$temperature градусов Фаренгейта = $converted_temperature градусов Цельсия</p>";
        }
    }
    ?>
</body>
</html>
