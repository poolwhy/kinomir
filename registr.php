<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Киномир</title>
    <link rel="stylesheet" href="css/style_registr.css">
</head>
<body>
    <div class="register-container">
        <div class="logo-wrapper">
            <img src="https://avatars.mds.yandex.net/i?id=3436f743c6094597735fca121b70a057e7b44b7b-10649741-images-thumbs&n=13" alt="Логотип" class="logo-mini">
            <h2>Киномир</h2>
        </div>
        
        <h3>Создание аккаунта</h3>
        
        <div class="error-message" id="errorMsg"></div>
        
        <form action="bdOutput.php" method="post" id="registerForm">
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" id="login" name="login" required placeholder="Введите логин (мин. 3 символа)">
                <span class="input-icon">👤</span>
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required placeholder="Введите пароль (мин. 6 символов)">
                <span class="input-icon">🔒</span>
            </div>
            
            <div class="form-group">
                <label for="pochta">Электронная почта</label>
                <input type="email" id="pochta" name="pochta" required placeholder="example@mail.ru">
                <span class="input-icon">📧</span>
            </div>

            <button type="submit" class="register-btn">Зарегистрироваться</button>
        </form>
        
        <div class="login-link">
            Уже есть аккаунт? <a href="vxod.php">Войти</a>
        </div>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const login = document.getElementById('login').value.trim();
            const password = document.getElementById('password').value;
            const email = document.getElementById('pochta').value.trim();
            const errorMsg = document.getElementById('errorMsg');
            
            errorMsg.style.display = 'none';
            errorMsg.textContent = '';
            
            if (login.length < 3) {
                e.preventDefault();
                errorMsg.textContent = '❌ Логин должен содержать минимум 3 символа';
                errorMsg.style.display = 'block';
                document.getElementById('login').focus();
                return;
            }
            
            if (password.length < 6) {
                e.preventDefault();
                errorMsg.textContent = '❌ Пароль должен содержать минимум 6 символов';
                errorMsg.style.display = 'block';
                document.getElementById('password').focus();
                return;
            }
            
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                errorMsg.textContent = '❌ Введите корректный email адрес (пример: name@domain.ru)';
                errorMsg.style.display = 'block';
                document.getElementById('pochta').focus();
                return;
            }
        });
    </script>
</body>
</html>