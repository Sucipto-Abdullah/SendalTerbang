<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php url('CSS/general.css')?>" >
    <style>
        
        footer {
        background-color: #ffffff; /* putih */
        border-top: 2px solid #000000; /* garis atas hitam */
        font-family: Arial, sans-serif;
        color: #000000;
    }

    /* container utama */
    .footer {
        display: flex;
        justify-content: space-between; /* rata kiri - tengah - kanan */
        align-items: flex-start; /* biar sejajar di atas */
        padding: 20px 50px;
        flex-wrap: wrap; /* responsif kalau layar kecil */
    }

    .footer-col {
        flex: 1;
        min-width: 200px;
        margin: 10px;
    }

    .footer-col h3 {
        margin-bottom: 10px;
        font-size: 16px;
        font-weight: bold;
        border-bottom: 1px solid #000000;
        padding-bottom: 5px;
    }

    .footer-col p,
    .footer-col ul {
        font-size: 14px;
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    .footer-col ul {
        list-style: none;
    }

    .footer-col ul li {
        margin-bottom: 8px;
    }

    .footer-col ul li a {
        text-decoration: none;
        color: #000000;
        transition: color 0.3s;
    }

    .footer-col ul li a:hover {
        color: #555555;
    }

    /* bagian bawah */
    .footer-bottom {
        text-align: center;
        padding: 10px;
        border-top: 1px solid #000000;
        font-size: 13px;
    }

    </style>
</head>
<body>
    <footer>
        <div class="footer">
            <!-- Kiri -->
            <div class="footer-col">
            <h3>About</h3>
            <p>Sendal Terbang adalah platform inovatif untuk berbagi ide dan karya digital.</p>
            </div>

            <!-- Tengah -->
            <div class="footer-col">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
            </div>

            <!-- Kanan -->
            <div class="footer-col">
            <h3>Web Terkait</h3>
            <ul>
                <li><a href="#">OpenAI</a></li>
                <li><a href="#">Laravel</a></li>
                <li><a href="#">GitHub</a></li>
            </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2024 Sendal Terbang. All rights reserved.</p>
        </div>
    </footer>


</body>
</html>