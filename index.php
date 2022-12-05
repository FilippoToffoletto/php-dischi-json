<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <title>Dischi Json</title>
</head>
<body>

    <div id="app">
        <header>
            <div class="container d-flex align-items-center">
                <div class="logo">
                    <img src="assets/spotify-logo.svg" alt="Spotify">
                </div>
                <h1 class="text-center w-100 fs-1 fw-bolder">SELEZIONA CANZONE</h1>
            </div>
        </header>

        <main>
            <div class="ft-container ">
                <div class="row row-cols-3 my-3">
                    <div class="col my-3">
                        <div class="ft-card">
                            <div class="top">
                                <div class="img"></div>
                            </div>
                            <div class="bottom">
                                <div class="content-bottom my-2">
                                    <h2>title</h2>
                                    <h5>artist</h5>
                                    <h6>data</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script src="./js/main.js"></script>
</body>
</html>