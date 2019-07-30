<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LARAVEL</title>

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
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                <div class="title m-b-md">
                    Адреса
                </div>
                </div>
                    <h2>Добавить адрес</h2>
                    <form action='/addresses' method="POST">
                        <div>
                            <input type="text" name="city_name" placeholder="Населенный пунк" required="required" />
                        </div>
                        <div>
                            <input type="text" name="street" placeholder="Улица" required="required" />
                        </div>
                        <div>
                            <input type="text" name="house" placeholder="Номер дома" required="required" />
                        </div>
                        <div>
                            <input type="text" name="floor" placeholder="Квартира" />
                        </div>
                        <div>
                            <input type="submit" value="Сохранить" />
                        </div>
                    </form>
                    <div>
                        <h2>Список адресов</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Номер</th>
                                    <th>Населенный пункт</th>
                                    <th>Улица</th>
                                    <th>Номер дома</th>
                                    <th>Квартира</th>
                                </tr>
                                </thead>
                            <tbody>
                                <?php foreach ($items as $item) { ?>
                                    <tr>
                                        <td><?=$item->id ?></td>
                                        <td><?=$item->city_name ?></td>
                                        <td><?=$item->street ?></td>
                                        <td><?=$item->house ?></td>
                                        <td><?=$item->floor ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
