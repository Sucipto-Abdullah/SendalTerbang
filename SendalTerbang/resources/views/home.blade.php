<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    
</head>
<body>
    <header>
        @include('element.header')
    </header>
    
    <section class="hero">
        <div class="hero-bg-animation"></div>
        <div class="container">
            <h1>REPOSITORY</h1>
            <p>Temukan berbagai contoh implementasi web development dari tugas-tugas kuliah dan proyek pribadi. <br> Dari HTML dasar hingga aplikasi web modern.</p>
        </div>
    </section>

    <div class="pembatas">
        
    </div>

    <section class="top-project">
        <h2 style="padding-left: 20px;">TOP PROJECT</h2>
        <div class="slider-container">
            <button class="slider-arrow prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slider-arrow next">
                <i class="fas fa-chevron-right"></i>
            </button>
            
            <div class="slider-track">
                <!-- Slide 1 -->
                <div class="slide">
                    <div class="slide-image">
                        <img src="{{asset("image/background1.jpg")}}" alt="Project 1">
                    </div>
                    <div class="slide-content">
                        <h3>E-Commerce Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="slide">
                    <div class="slide-image">
                        <img src="{{asset("image/background1.jpg")}}" alt="Project 2">
                    </div>
                    <div class="slide-content">
                        <h3>Task Management App</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="slide">
                    <div class="slide-image">
                        <img src="{{asset("image/background1.jpg")}}" alt="Project 3">
                    </div>
                    <div class="slide-content">
                        <h3>Portfolio Website</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
            </div>
            
            <div class="slider-nav" style="">
                <div class="slider-dot active"></div>
                <div class="slider-dot"></div>
                <div class="slider-dot"></div>
            </div>
        </div>
    </section>

    <footer>
        @include('element.footer')
    </footer>
    <script src='{{asset('js/home.js')}}'></script>
</body>
</html>