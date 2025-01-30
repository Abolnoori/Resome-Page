<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Eror 404</title>
        <style>
            @font-face {
                font-family: GillSans;
                src: url(assets/fonts/GillSansBold.woff) format("woff");
            }
            body{
                background-color: #ffffff;
                overflow: hidden;
            }
            * {
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
                -webkit-user-select: none; /* Safari */
                -ms-user-select: none; /* IE 10 and IE 11 */
                user-select: none;
            }
            .container {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                height: 100vh;
                width: 100%;
                flex-direction: column;
                font-family: GillSans;
            }
            h1 {
                position: relative;
                font-size: 15vw;
                font-weight: 700 !important;
                background: url("assets/img/404/Galaxy.jpg");
                background-size: cover;
                -webkit-text-fill-color: transparent;
                -webkit-background-clip: text;
                background-clip: text;
            }
            h3 {
                font-family: '';
                position: relative;
                margin-top: 20px;
                font-size: 1.5vw;
                letter-spacing: 1.8px;

            }
            a {
                text-align: center;
                padding: 12px 46px  ;
                margin-top: 40px;
                border: 0px;
                background-color: #8750f7;
                border-radius: 20px;
                color: rgb(255, 255, 255);
                text-transform: uppercase;
                cursor: pointer;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div><h1>Oops!</h1></div>
            <div><h3>404 - Page {{ $name }} Not Found</h3></div>
            <a href="/Abol">Go to Home Page</a>
        </div>
    </body>
</html>
