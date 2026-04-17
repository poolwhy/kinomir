<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Киномир</title>
    <link rel="stylesheet" href="css/style_vxod.css">
</head>
<body>
    <div class="login-container">
        <div class="logo-wrapper">
            <img src="https://avatars.mds.yandex.net/i?id=3436f743c6094597735fca121b70a057e7b44b7b-10649741-images-thumbs&n=13" alt="Логотип" class="logo">
            <h2>Киномир</h2>
        </div>
        
        <h3>Вход в аккаунт</h3>
        
        <div class="error-message" id="errorMsg"></div>
        
        <form action="bdOutputVxod.php" method="post" id="loginForm">
            <div class="form-group">
                <label>Логин или Email</label>
                <input type="text" name="loginvx" required placeholder="Введите логин или email">
            </div>

            <div class="form-group">
                <label>Пароль</label>
                <input type="password" name="passwordvx" required placeholder="Введите пароль">
            </div>

            <button type="submit" class="login-btn">Войти</button>
        </form>
        
        <div class="register-link">
            Нет аккаунта? <a href="regist.php">Зарегистрироваться</a>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const login = document.querySelector('input[name="loginvx"]').value.trim();
            const password = document.querySelector('input[name="passwordvx"]').value;
            const errorMsg = document.getElementById('errorMsg');
            
            errorMsg.style.display = 'none';
            errorMsg.textContent = '';
            
            if (login === '') {
                e.preventDefault();
                errorMsg.textContent = 'Введите логин или email';
                errorMsg.style.display = 'block';
                return;
            }
            
            if (password === '') {
                e.preventDefault();
                errorMsg.textContent = 'Введите пароль';
                errorMsg.style.display = 'block';
                return;
            }
        });
    </script>
</body>
</html>