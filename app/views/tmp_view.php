<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <script
                src="https://code.jquery.com/jquery-1.9.1.min.js"
                integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ="
                crossorigin="anonymous">
        </script>
        <title>Главная</title>
    </head>

    <body>
        <div id="wrapper">
            <div id="content">
                <?php include 'app/views/'.$content_view; ?>
            </div>
        </div>
    </body>
</html>