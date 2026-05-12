<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['title'] ?? 'О проекте' }}</title>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="about-container">
        <div class="about-header">
            <h1>{{ $data['title'] }}</h1>
            <p>{{ $data['description'] }}</p>
        </div>
        
        <div class="about-content">
            <h2>🚀 Наша миссия</h2>
            <p>Мы стремимся создавать простые и эффективные инструменты, которые помогают бизнесу расти и развиваться в цифровую эпоху.</p>
            
            <h2>💡 Что мы предлагаем</h2>
            <p>Современные веб-решения на Laravel, адаптивный дизайн, быструю загрузку и удобную админ-панель для управления контентом.</p>
            
            <h2>📬 Контакты</h2>
            <div class="contacts-list">
                <p><span class="icon">✉️</span> {{ $data['contacts']['email'] }}</p>
                <p><span class="icon">📞</span> {{ $data['contacts']['phone'] }}</p>
            </div>
        </div>
        

        <div style="text-align: center;">
            <a href="{{ route('items.index') }}" class="btn-back">
                ← Вернуться к товарам
            </a>
        </div>
        
        <p class="footer-note">© 2026 Ваш проект. Все права защищены.</p>
    </div>
</body>
</html>