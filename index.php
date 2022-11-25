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


<body>
    <div class="container w-50 bg-light p-5 mt-5">
        <form action="script.php" method="get">

            <div class="form_box">
                <div class="paragrafo">
                    <label for="paragr">Inserisci un paragrafo</label>
                    <input name="paragr" id="paragr" type="text">

                </div>

                <div class="parola my-3">
                    <label for="parola">Inserisci una parola da censurare</label>
                    <input name="parola" id="paragr" type="text">

                </div>
            </div>
            <div class="buttons pt-3 text-center">
                <button class="border-0 btn btn-success " type="submit">invia</button>
                <button class="border-0 btn btn-warning text-white" type="reset">cancella</button>
            </div>
        </form>
    </div>
</body>

</html>