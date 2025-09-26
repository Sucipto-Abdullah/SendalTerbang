<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><head>
    <!-- Bootstrap CSS (opsional kalau belum ada) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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
            box-shadow: 2px 0 2px black;
        }
        .content{
            margin: auto;
            width: max(960px);
            height: 100%;
            display: grid;
            grid-template-columns: 15% 70% 15%;
            grid-template-areas: "logo searchBar menu";
        }

        .logo{
            margin: auto;
            margin-left: 0;
            height: 100%;
        }
        p{
            align-content: center;
            margin: auto;
            height: 100%;
            font-size: 16px;
        }

        .searchBar{
            display: flex;
            height: 100%;
            width: 500px;
            margin: auto;
            align-content: center;
        }
        #searchInput{
            margin: auto;
            align-content: center;
            height: 24px;
            width: 300px;
            font-size: 12px;
            text-align: center;
            border-style: solid;
            border-width: 1px;
            border-color: black;
        }
        #searchInpus::focus{
            border-width: 2px;
            border-color: pink;
        }

        .ButtonElement{
            margin: auto;
            margin-right: 0;
            height: 100%;
            align-content: center;
            width: 50px;
        }
        .buttonMenu{
            margin: auto;
            background-color: rgba(0, 0, 0, 0);
            text-align: right;
            width: 100% ;
            height: 100%;
            border: none;
            font-size: 24px;
            color: black;
        }

    </style>

</head>
<body>
    <div class="header">
        
        <div class="content">

            <div class="logo" style="grid-area: logo;">
                <p><i class="bi bi-gear-fill"></i> Sendal Terbang</p>
            </div>
            <div class="searchBar" style="grid-area: searchBar;">
                <input id="searchInput" placeholder="Cari Proyek" >
            </div>
            <div class="ButtonElement" style="grid-area: menu;">
                <button class="buttonMenu"> <i class="bi bi-list"></i></button>
            </div>

        </div>
    </div>
</body>
</html>