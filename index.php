<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>

<body>
    <div class="container">
        <form action="script.php" method="get">
            <div class="paragrafo">
                <label for="paragr">Paragrafo</label>
                <input name="paragr" id="paragr" type="text">
                <small>Inserisci un paragrafo</small>
            </div>

            <div class="parola">
                <label for="parola">Parola</label>
                <input name="parola" id="paragr" type="text">
                <small>Inserisci una parola</small>

                <button type="submit">invia</button>
            </div>
        </form>
    </div>
</body>

</html>