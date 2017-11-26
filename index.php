<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/javascript/jquery-2.2.4.min.js"></script>
    <script src="script.js"></script>
</head>

<body>

    <header class='header text-center'>
        <h2>Rating Stars</h2>
    </header>

    <section class='rating-widget'>
        <div class='rating-stars text-center'>
            <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                    <i class='material-icons'>star</i>
                </li>
                <li class='star' title='Fair' data-value='2'>
                    <i class='material-icons'>star</i>
                </li>
                <li class='star' title='Good' data-value='3'>
                    <i class='material-icons'>star</i>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                    <i class='material-icons'>star</i>
                </li>
                <li class='star' title='Perfect' data-value='5'>
                    <i class='material-icons'>star</i>
                </li>
            </ul>
        </div>

        <div class='success-box'>
            <div class='clearfix'></div>
            <div class='text-message'></div>
            <div class='clearfix'></div>
        </div>
    </section>
</body>

</html>
