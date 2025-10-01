
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><head>
    <!-- Bootstrap CSS (opsional kalau belum ada) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,226;1,226&family=Jersey+10&family=Staatliches&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset( resources/css/general.css }}">
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
            align-content: center;
            height: 100%;
        }
        a{
            align-content: center;
            text-decoration: none;
            color: black;
            margin: auto;
            height: 100%;
            font-size: 18px;
            font-family: 'jersey 10';
        }

        .searchBar{
            display: flex;
            height: 100%;
            width: 500px;
            margin: auto;
            align-content: center; 
            align-self: center;
        }

        .searchBar form{
            margin: auto;
            display: flex;
            gap: 10px;
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
            border: none;
        }

        #searchButton{
            background:none;
            border: none;
            margin: auto;
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

        .headerMenu{
            width: 110px;
            min-height: 120px;
            display: flex;
            flex-direction: column;
            background-color: red;
            position: fixed;
            translate: -20% 0;
            left: 80%;
        }

        .headerMenu ul{
            list-style-type: none;
            margin-left: -10px;
            margin-top: 10px;
            
        }

    </style>

</head>
<body>
    <div class="header">
        
        <div class="content">

            <div class="logo" style="grid-area: logo;">
                <a href="/">
                    <i class="bi bi-gear-fill"></i> Sendal Terbang
                </a>
            </div>
            <div class="searchBar" style="grid-area: searchBar;">

                <form action="">
                    <input id="searchInput" placeholder="Cari Proyek" >
                    <button id="searchButton"><i class="bi bi-search"></i></button>
                </form>

            </div>
            <div class="ButtonElement" id="ButtonMenu" style="grid-area: menu;">
                <button class="buttonMenu"> <i class="bi bi-list"></i></button>
            </div>

        </div>
    </div>

    <div class="headerMenu" id="headerMenu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/">Expo</a></li>
            <li><a href="/">About Us</a></li>
        </ul>
    </div>

</body>

<script>
    const menuButtonPos = document.querySelector('.ButtonElement');
    const headerMenu = document.getElementById('headerMenu');
    
    window.addEventListener("load", screenDisplay);
    window.addEventListener("resize", screenDisplay);

    function screenDisplay(){
        let buttonPosition = menuButtonPos.getBoundingClientRect();

        headerMenu.style.left = `${buttonPosition.x}px`;
    }

</script>

</html>