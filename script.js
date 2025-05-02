// script.js
let progress = 0;

function startGame(gameId) {
    // Chuyển trang tới game cụ thể
    window.location.href = gameId + ".html";

    // Mở thanh tiến độ khi vào game
    document.getElementById('progress-container').style.display = 'block';
    progress = 0;  // Reset tiến độ mỗi khi vào game
    updateProgressBar();
}

function updateProgressBar() {
    // Cập nhật thanh tiến độ và số % theo tiến độ
    document.getElementById('progress-bar').style.height = progress + '%';
    document.getElementById('percentage').innerText = progress + '%';
}

// Hàm này sẽ được gọi sau mỗi lựa chọn trong game để cập nhật tiến độ
function makeChoice(choice) {
    progress += 20; // Giả sử mỗi lựa chọn sẽ tăng 20% tiến độ
    if (progress > 100) progress = 100;  // Không vượt quá 100%
    updateProgressBar();

    // Kiểm tra nếu đã hoàn thành 100% thì game kết thúc
    if (progress === 100) {
        alert('Chúc mừng! Bạn đã hoàn thành game này!');
    }
}
