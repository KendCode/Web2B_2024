<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor = isset($_POST['valorEntrada']) ? $_POST['valorEntrada'] : 'No se recibió valor';
    echo "El valor presionado es: " . htmlspecialchars($valor);
} else {
    echo "No se recibieron datos.";
}
?>
