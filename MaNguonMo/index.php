<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./fontawesome-free-6.7.2-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Game.css">
    <link rel="stylesheet" href="Home.css">
    <title>Phiêu Lưu Cùng MARIO</title>
</head>
<body>

    <!-- GÓI HẾT NỘI DUNG TRANG CHỦ TRONG homeContent -->
    <div id="homeContent">
        <div class="statusBar" id="statusBar">
            <div class="logo">  
                <img src="logo.png" alt="Logo" height="50">
            </div>
            <ul class="nav-menu">
                <li><a href="#" class="active" id="homeButton">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#" id="playGameBtn">Trò chơi</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="card_img">
                    <img src="/images/Huy.jpg" alt="Profile 1">
                </div>
                <h2>Ngô Văn Huy</h2>  
                <p>Programmer</p>
                <div class="card_social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <button>Follow</button>
            </div>

            <div class="card">
                <div class="card_img">
                    <img src="https://via.placeholder.com/60" alt="Profile 2">
                </div>
                <h2>Profile 2</h2>
                <p>Designer</p>
                <div class="card_social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <button>Follow</button>
            </div>

            <div class="card">
                <div class="card_img">
                    <img src="https://via.placeholder.com/60" alt="Profile 3">
                </div>
                <h2>Profile 3</h2>
                <p>Manager</p>
                <div class="card_social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <button>Follow</button>
            </div>

            <div class="card">
                <div class="card_img">
                    <img src="https://via.placeholder.com/60" alt="Profile 4">
                </div>
                <h2>Profile 4</h2>
                <p>Tester</p>
                <div class="card_social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <button>Follow</button>
            </div>

            <div class="card">
                <div class="card_img">
                    <img src="https://via.placeholder.com/60" alt="Profile 5">
                </div>
                <h2>Profile 5</h2>
                <p>Support</p>
                <div class="card_social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <button>Follow</button>
            </div>
        </div>
    </div> 

    <!-- KHU VỰC GAME -->
    <div id="containerGame" style="display: none;">
        <div class="menu-icon" id="menuIcon">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div class="modal" id="modal"></div>

        <div class="sidebar" id="sidebar">
            <ul>
                <li><a href="#" class="homeButton">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#" class="active">Trò chơi</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>

        <video autoplay muted loop id="background-video">
            <source src="simulater.mp4" type="video/mp4">
        </video>

        <div class="menu">
            <h1>Your Adventure</h1>
            <button class="startGame">Bắt đầu trò chơi</button>
            <button class="showInstructions">Hướng dẫn trò chơi</button>
            <button class="settings">Cài Đặt</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
