<body>
    <div class="login-container">
        <div class="login-card">
            <a href="{{ url('/') }}" class="back-btn">
                ⬅ Kembali
            </a>

            <img src="{{ asset('image/logo.png') }}" alt="Logo" class="logo">
            <h2>Verifikasi Akun</h2>
            
            <form action="" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username / email / NIM" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>

                <button type="submit" class="btn-login">Login</button>

            </form>
        </div>
    </div>

    <style>
        /* Latar belakang */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        /* Kartu login */
        .login-card {
            position: relative;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(20px);
            padding: 45px 35px;
            border-radius: 20px;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.3);
            width: 380px;
            color: #fff;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* Tombol kembali */
        .back-btn {
            position: absolute;
            top: 15px;
            left: 15px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
            height: 40px;
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        .logo {
            width: 90px;
            height: 90px;
            margin-bottom: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.2));
        }

        h2 {
            margin-bottom: 25px;
            letter-spacing: 1px;
            font-weight: 600;
            color: #fff;
        }

        .input-group {
            text-align: left;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #f0f0f0;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }

        input:focus {
            border: 2px solid #00d4ff;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #00d4ff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-login:hover {
            background-color: #00aee0;
        }


        /* Responsif untuk HP */
        @media (max-width: 480px) {
            .login-card {
                width: 90%;
                padding: 30px 20px;
            }

            .back-btn {
                font-size: 13px;
                padding: 5px 8px;
            }

            h2 {
                font-size: 20px;
            }

            input, .btn-login {
                font-size: 14px;
            }
        }
    </style>
</body>
