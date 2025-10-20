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
                    <input id="searchInput" placeholder="Cari Proyek">
                    <button id="searchButton"><i class="bi bi-search"></i></button>
                </form>
            </div>
            
            <!-- Bagian Sign In/User Menu -->
            <div class="auth-section" style="grid-area: auth;">
                @auth
                    <!-- Jika user sudah login -->
                    <div class="user-menu">
                        <button class="user-button">
                            <span>Name</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>
                        <div class="user-dropdown">
                            <a href="/dashboard">Dashboard</a>
                            <a href="/profile">Profile</a>
                            <form method="POST" action="">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Jika user belum login -->
                    <div class="auth-buttons">
                        <a href="" class="sign-in-btn">Sign In</a>
                    </div>
                @endauth
            </div>

            <div class="ButtonElement" id="ButtonMenu" style="grid-area: menu;">
                <button class="buttonMenu" onclick="setHeaderMenu()"> <i class="bi bi-list"></i></button>
            </div>
        </div>
    </div>

    <div class="headerMenu" id="headerMenu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/expo">Expo</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>
    </div>
</body>

<script>
    //set Header Menu Position
    const menuButton = document.querySelector('.ButtonElement');
    const headerMenuElement = document.querySelector('.headerMenu');
    const headerMenu = document.getElementById('headerMenu');
    
    screenDisplay();

    window.addEventListener("load", screenDisplay);
    window.addEventListener("resize", screenDisplay);

    function screenDisplay(){
        let buttonPosition = menuButton.getBoundingClientRect();
        headerMenu.style.left = `${buttonPosition.x}px`;
    }

    //set header menu button
    function setHeaderMenu(){
        headerMenuElement.classList.toggle("active");
    }

    // User dropdown functionality
    document.addEventListener('DOMContentLoaded', function() {
        const userButton = document.querySelector('.user-button');
        const userDropdown = document.querySelector('.user-dropdown');
        
        if (userButton) {
            userButton.addEventListener('click', function() {
                userDropdown.classList.toggle('active');
            });
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.user-menu')) {
                userDropdown.classList.remove('active');
            }
        });
    });
</script>