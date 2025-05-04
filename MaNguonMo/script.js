const menuIcon = document.getElementById('menuIcon');
const sidebar = document.getElementById('sidebar');
const modal = document.getElementById('modal');
const playGameBtn = document.getElementById('playGameBtn');
const containerGame = document.getElementById('containerGame');
const statusBar = document.getElementById('statusBar');
const homeButtons = document.querySelectorAll('.homeButton');
const menuLinks = document.querySelectorAll('.statusBar ul li a', '.sidebar ul li a');
const homeContent = document.getElementById('homeContent'); 

if (menuIcon && sidebar && modal && playGameBtn && containerGame && statusBar && homeContent) {
    menuIcon.addEventListener('click', () => {
        sidebar.classList.add('active');
        modal.classList.add('active');
        menuIcon.style.opacity = '0';
        menuIcon.style.pointerEvents = 'none';
    });

    modal.addEventListener('click', () => {
        sidebar.classList.remove('active');
        modal.classList.remove('active');
        menuIcon.style.opacity = '1';
        menuIcon.style.pointerEvents = 'auto';
    });

    playGameBtn.addEventListener('click', () => {
        containerGame.style.display = 'block';
        homeContent.style.display = 'none'; 
    });

    homeButtons.forEach(button => {
        button.addEventListener('click', () => {
            containerGame.style.display = 'none';
            homeContent.style.display = 'block';
            sidebar.classList.remove('active');
            modal.classList.remove('active');
            menuIcon.style.opacity = '1';
            menuIcon.style.pointerEvents = 'auto';
        });
    });

    menuLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            menuLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        });

        link.addEventListener('mouseleave', () => {
            menuLinks.forEach(l => l.classList.remove('active'));
            menuLinks[0].classList.add('active');
            document.querySelector('.sidebar ul li a.active')?.classList.add('active');
        });
    });
} else {
    console.error('Một hoặc nhiều phần tử không tồn tại.');
}
