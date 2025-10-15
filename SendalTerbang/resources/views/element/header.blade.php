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
                <button class="buttonMenu" onclick="setHeaderMenu()"> <i class="bi bi-list"></i></button>
            </div>

        </div>
    </div>

    <div class="headerMenu" id="headerMenu">
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/">Expo</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/kontak">Kontak Kami</a></li>
            <li><a href="/">Home</a></li>
            <li><a href="/expo">Expo</a></li>
            <li><a href="/">About Us</a></li>
        </ul>
    </div>

</body>

<script>

    //set Hedaer Menu Position
    const menuButton = document.querySelector('.ButtonElement');
    const headerMenuElement = document.querySelector('.headerMenu');
    const headerMenu = document.getElementById('headerMenu');
    
    screenDisplay();

    window.addEventListener("load", screenDisplay);
    window.addEventListener("resize", screenDisplay);

    function screenDisplay(){
        let buttonPosition = menuButton.getBoundingClientRect();
        headerMenu.style.left = `${buttonPosition.x}px`;
        headerMenu.style.top = `${buttonPosition.y+50}px`;
    }

    //set header menu button
    function setHeaderMenu(){
        headerMenuElement.classList.toggle("active");
    }

</script>