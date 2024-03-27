<!-- arquivo: calculadora.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
    <link rel="stylesheet" href="css/style_calculadora.css">
</head>
<body>
    <div class="calculator">
        <h2>Calculadora Simples</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="num1" placeholder="Digite o primeiro número" required>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="text" name="num2" placeholder="Digite o segundo número" required>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
        // Verifica se o formulário foi submetido
        if(isset($_POST['submit'])){
            // Obtém os valores dos campos do formulário
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = '';

            // Realiza a operação matemática com base no operador selecionado
            switch ($operator) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    // Verifica se o divisor não é zero para evitar erros de divisão por zero
                    if($num2 != 0)
                        $result = $num1 / $num2;
                    else
                        $result = "Erro! Divisão por zero.";
                    break;
                default:
                    $result = "Operador inválido";
                    break;
            }

            // Exibe o resultado da operação
            echo "<h4>O resultado é: $result</h4>";
        }
        ?>
    </div>
</body>
</html>