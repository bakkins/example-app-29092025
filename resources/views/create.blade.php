    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1>Izveidot jaunu postu</h1>

    <form action="/posts/store" method="POST">
    @csrf <!-- Laravel CSRF aizsardzība -->
    
    <label for="title">Virsraksts:</label><br>
    <input type="text" name="title" id="title"><br><br>

    <label for="content">Saturs:</label><br>
    <textarea name="content" id="content"></textarea><br><br>

    <button type="submit">Izveidot postu</button>
    </form>

    </body>
    </html>