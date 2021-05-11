<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel First Steps</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .title{
              font-size: 4em;
            }

            .links{
              padding-top: 10px;
            }

            .links a{
              margin: 10px;
              text-decoration: none;
            }

        </style>
    </head>
    <body>
      <div class="links flex-center">
          <a href="">Home</a>
          <a href="/laravel">Laravel</a>
          <a href="/news">News</a>
          <a href="/contacts">Contacts</a>
      </div>
        <div class="flex-center full-height">
            <div class="content">
                <div class="title m-b-md">
                    Hello World!
                </div>
            </div>
        </div>
    </body>
</html>
