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
            	Добавить книгу
	            </div>
	            <form action="/books" method="POST">

	            	<div class="form group">
	            		<label>Наименование книги</label>
	            		<input type="text" name="name" class="form-control" id="name" required>
	                </div>
	                <div class="form-group">
	                	<label>Год публикации</label>
	                	<input type="text" name="publish_year" class="form-control" id="name" required>
	                </div>
	                <div class="form-group">
	                	<label>Автор книги</label>
	                	<select name="author_id">
	                		<?php
	                			foreach ($authors as $author) {
	                				?>
	                				<option value="<?=$author->id; ?>"><?=$author->id; ?></option>
	                				<?php }	?>
	                			
	                	</select>
	                </div>
	                <input type="submit" value="Сохранить" class="btn btn-primary">
	            </form>
	        </div>
	    </div>
    </body>
</html>
