<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>

        .test {
            background-color: #f99;
        }
        .cont1 {
            background-color: #f99;
        }

        .box1 {
            background-color: bisque;
        }

        .box2 {
            background-color: gold;
        }
    </style>

</head>
<body>
    <div class="container cont1">
        <h1 class="card m-3">bootstrapの練習</h1>
        <p class="m-3">練習しています</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="box1 col-4">box1</div>
            <div class="box2 col-8">box2</div>
        </div>
    </div>
    <div class="container">
        <h1>見出し１</h1>
        <h2>見出し２</h2>
        <h3>見出し３</h3>

        <ul>
            <li>list01</li>
            <li>list02</li>
        </ul>

        <table class="table table-hover">
            <tr>
                <th>head</th>
                <td>body</td>
            </tr>
            <tr>
                <th>head</th>
                <td>body</td>
            </tr>
        </table>

        <p>これは<code>test</code>です</p>

        <img class="rounded mx-auto d-block" src="https://picsum.photos/200/200" alt="">
    </div>


</body>
</html>
