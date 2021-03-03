<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- せっかくだから5.０を使ってみる -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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

        /* css でflex-boxを使用する */
        /* .test-flex {
            display: flex;
            justify-content: center;
        } */
        .box3 {
            width: 100px;
            height: 100px;
            color: white;
            padding: 5px;
        }
    </style>

</head>
<body>


    <!-- form用 -->
    <div class="container mt-5">
        <div class="row g-3">
            <a class=link-success href="/index">登録</a>
            <a class=link-secondary href="/index/show">確認</a>
        </div>
    </div>

    <div class="test-flex mt-5 bg-info d-flex justify-content-center">
        <div class="box3 border border-3 bg-secondary">1</div>
        <div class="box3 border border-3 bg-primary">2</div>
        <div class="box3 border border-3 bg-secondary">3</div>
    </div>

    <div class="container mt-5">
        <div class="box3 border border-danger border-3 bg-info">
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary m-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>


    <div class="container mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Company</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Content</a>
            </li>
        </ul>
    </div>

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

    <!-- js読み込み bootstrap 5.0ではjqueryを使用しないらしい -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</body>
</html>
