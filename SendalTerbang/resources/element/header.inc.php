<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php url('CSS/general.css')?>">
    <style>
        :root{
            ---white: rgba(252, 252, 252, 1);
        }
        body{
            margin: auto;
            background-color: var(---white);
        }
        .header{
            margin: auto;
            height: 58px;
            width: 100%;
            background-color: var(---white);
        }
        .content{
            margin: auto;
            width: max(960px);
            height: 100%;
            display: flex;
        }

        .logo{
            margin: auto;
            height: 100%;
        }
        p{
            align-content: center;
            margin: auto;
            height: 100%;
        }

        .searchBar{
            display: flex;
            height: 100%;
            margin: auto;
            align-content: center;
        }
        #searchInput{
            margin: auto;
            align-content: center;
            height: 20px;
        }

        .ButtonElement{
            height: 100%;
            align-content: center;
            margin: auto;
        }
        .buttonMenu{
            background-color: rgba(0, 0, 0, 0);
            width: 24px;
            height: 24px;
            border: none;
            color: blue;
        }

    </style>

</head>
<body>
    <div class="header">
        
        <div class="content">

            <div class="logo">
                <p>Sendal Terbang</p>
            </div>
            <div class="searchBar">
                <input id="searchInput" placeholder="Cari Proyek" >
            </div>
            <div class="ButtonElement">
                <button class="buttonMenu"> <img src="../resources/icon/list.svg"></button>
            </div>

        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</html>