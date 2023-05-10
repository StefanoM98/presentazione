<?php
$result = "";
//abs
if (isset($_GET['card-n-0'])) {
    $inputValue = $_GET['card-n-0'];
    $result = abs($inputValue);
}
//round
if (isset($_GET['card-n-1'])) {
    $inputValue = $_GET['card-n-1'];
    $variable = $_GET['card-var-n-1'];
    $result = round($inputValue, $variable);
}
//ceil
if (isset($_GET['card-n-2'])) {
    $inputValue = $_GET['card-n-2'];
    $result = ceil($inputValue);
}
//floor
if (isset($_GET['card-n-3'])) {
    $inputValue = $_GET['card-n-3'];
    $result = floor($inputValue);
}
//sqrt
if (isset($_GET['card-n-4'])) {
    $inputValue = $_GET['card-n-4'];
    $result = sqrt($inputValue);
}
//pow
if (isset($_GET['card-n-5'])) {
    $inputValue = $_GET['card-n-5'];
    $variable = $_GET['card-var-n-5'];
    $result = pow($inputValue, $variable);
}
//rand
if (isset($_GET['card-n-6'])) {
    $inputValue = $_GET['card-n-6'];
    $variable = $_GET['card-var-n-6'];
    $result = rand($inputValue, $variable);
}
//min
if (isset($_GET['card-n-7'])) {
    $inputValue = $_GET['card-n-7'];
    $variable = $_GET['card-var-n-7'];
    $result = min($inputValue, $variable);
}
//max
if (isset($_GET['card-n-8'])) {
    $inputValue = $_GET['card-n-8'];
    $variable = $_GET['card-var-n-8'];
    $result = max($inputValue, $variable);
}
//fmod
if (isset($_GET['card-n-9'])) {
    $inputValue = $_GET['card-n-9'];
    $variable = $_GET['card-var-n-9'];
    $result = fmod($inputValue, $variable);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentazione</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
        <!-- Container -->
        <div class="container">
            <!-- Card -->
            <!-- Con 1 input -->

            <div class="result">
                <p>Risultato : <?php echo $result ?></p>
            </div>

            <div class="card" style="margin: 20px 0;" v-for="(card, index) in functions">
                <div class="card-body">
                    <h5 class="card-title">{{card.name}}</h5>
                    <p class="card-text">{{card.description}}</p>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label :for="'user-input-' + index">Inserisci numero/i</label>
                        <input type="text" :id="'user-input-' + index" :name="'card-n-' + index">
                        <input v-if="card.variousInputs" type="text" :name="'card-var-n-' + index" :id="'user-input-var-' + index">
                        <button class="btn btn-primary" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <a :href="card.link" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Container -->

    </div>
    <!-- Javascript -->
    <script src="js/store.js"></script>
</body>

</html>