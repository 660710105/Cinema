document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.querySelector(".wrapper");
    const loginLink = document.querySelector(".login-link");
    const registerLink = document.querySelector(".register-link");
    const iconClose = document.querySelector(".icon-close");

    const loginForm = document.querySelector('.login form');
    const registerForm = document.querySelector('.register form');

    const btnLogin = document.querySelector('.btn-login');
    const btnLogout = document.querySelector('.btn-logout');
    const userInfo = document.querySelector('.user-info');
    const userFirstnameSpan = document.getElementById('user-firstname');
    const userLastnameSpan = document.getElementById('user-lastname');

    const lang = document.querySelector(".lang-menu");
    const btnlang = document.querySelector(".selected-lang");

    const menuLeft = [...document.querySelectorAll('.pls-login')];
    const cardBtn = [...document.querySelectorAll('.card-btn')];

    function notActive() {
        if (wrapper.classList.contains("active", "active-popup")) {
            wrapper.classList.remove("active", "active-popup");
        } else {
            wrapper.classList.remove('active-popup');
        }
    }
    function active() {
        wrapper.classList.add("active-popup");
    }

    const loginPopUp = (e) => {
        if (!lang.contains(e.target) && e.target !== btnlang) {
            lang.classList.remove('display');
        }
        if (!wrapper.contains(e.target) && e.target !== iconClose && e.target !== btnLogin
            && e.target !== menuLeft[0] && e.target !== menuLeft[1] && e.target !== menuLeft[2]
            && e.target !== cardBtn[0] && e.target !== cardBtn[1] && e.target !== cardBtn[2] && e.target !== cardBtn[3] && e.target !== cardBtn[4]) {
            notActive();
        }
    };

    // ฟังก์ชันสำหรับตรวจสอบสถานะ Login เมื่อหน้าโหลด
    function checkLoginStatus() {
        fetch('./includes/checkLoginStatus.php')
            .then(response => response.json())
            .then(data => {
                if (data.loggedin) {
                    userInfo.style.display = 'block';
                    btnLogout.style.display = 'block';
                    btnLogin.style.display = 'none';
                    console.log(data);
                    userFirstnameSpan.textContent = data.firstname;
                    userLastnameSpan.textContent = data.lastname;
                    document.removeEventListener("click", loginPopUp);

                    // Add event listeners for navigation when logged in
                    menuLeft.forEach((item) => {
                        item.addEventListener('click', (e) => {
                            e.preventDefault(); // Prevent default link behavior
                            notActive();
                        });
                    });

                    cardBtn.forEach(button => {
                        button.addEventListener('click', notActive);
                    });

                } else {
                    userInfo.style.display = 'none';
                    btnLogout.style.display = 'none';
                    btnLogin.style.display = 'block';

                    document.addEventListener("click", loginPopUp);

                    menuLeft.forEach((item, index) => {
                        item.addEventListener('click', (e) => {
                            active();
                            e.preventDefault(); // Prevent default link behavior
                        });
                    });

                    cardBtn.forEach(button => {
                        button.addEventListener('click', active);
                    });
                }
            })
            .catch(error => {
                console.error('Error checking login status:', error);
            });
    }

    // เรียกฟังก์ชันตรวจสอบสถานะ Login เมื่อหน้าโหลด
    checkLoginStatus();

    registerLink.addEventListener("click", () => {
        wrapper.classList.add('active');
    });

    loginLink.addEventListener("click", () => {
        wrapper.classList.remove('active');
    });

    btnLogin.addEventListener("click", () => {
        wrapper.classList.add('active-popup');
    });

    iconClose.addEventListener("click", () => {
        notActive();
    });

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('./includes/login.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("data success");
                    if($_SESSION('type_user')==1){
                        window.location.href= '../admin/Home.php';
                    }else{
                        window.location.href = './Home.php';
                    }
                    checkLoginStatus(); // อัปเดต UI หลังจาก Login สำเร็จ
                    wrapper.classList.remove('active-popup'); // ปิด Popup Login
                    loginForm.reset();   
                } else {
                    alert(data.message); // แสดงข้อความผิดพลาดในการ Login
                }
            })
            .catch(error => {
                console.error('Error during login:', error);
                alert('An error occurred during login.');
            });
    });

    registerForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('./includes/register.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                alert(data.message); // แสดงข้อความตอบกลับจากการ Register
                if (data.success) {
                    wrapper.classList.remove('active'); // สลับไปหน้า Login
                    registerForm.reset();
                }
            })
            .catch(error => {
                console.error('Error during registration:', error);
                alert('An error occurred during registration.');
            });
    });

    // Event listener สำหรับปุ่ม Logout
    btnLogout.addEventListener('click', function () {
        fetch('./includes/logout.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = "./index.php"
                    checkLoginStatus(); // อัปเดต UI หลังจาก Logout สำเร็จ
                } else {
                    alert(data.message); // แสดงข้อความผิดพลาดในการ Logout (ถ้ามี)
                }
            })
            .catch(error => {
                console.error('Error during logout:', error);
                alert('An error occurred during logout.');
            });
    });
});