<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <style>
        body { font-family: sans-serif; background: #f8f9fa; padding: 20px; margin: 0; }
        .container { max-width: 1200px; margin: 0 auto; }
        h1 { text-align: center; color: #333; margin-bottom: 30px; }
        
        .items-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 20px;
        }
        
        .card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s;
        }
        .card:hover { transform: translateY(-4px); }
        
        .card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: #f1f3f5;
        }
        .card-image-placeholder {
            height: 200px;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 13px;
        }
        
        .card-body { padding: 15px; flex-grow: 1; display: flex; flex-direction: column; }
        .card-name { margin: 0 0 8px; font-size: 1.1rem; font-weight: 600; color: #212529; }
        .card-col { 
            display: inline-block; 
            background: #e7f1ff; 
            color: #0d6efd; 
            padding: 4px 10px; 
            border-radius: 20px; 
            font-size: 0.8rem; 
            margin-bottom: 10px; 
            font-weight: 500;
        }
        .card-price { 
            font-size: 1.3rem; 
            color: #198754; 
            font-weight: 700; 
            margin: 8px 0; 
        }
        .card-text { 
            color: #666; 
            font-size: 0.95rem; 
            line-height: 1.4; 
            margin: 0; 
            flex-grow: 1;
        }
        
        .empty-message {
            text-align: center;
            padding: 50px 20px;
            color: #666;
            font-size: 1.1rem;
            background: #fff;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📦 Каталог товаров</h1>

        <div style="text-align: right; margin-bottom: 20px;">
        <a href="{{ route('about') }}" 
           style="display: inline-block; padding: 10px 25px; background: #667eea; color: white; 
                  text-decoration: none; border-radius: 50px; font-weight: 500;
                  transition: background 0.2s;">
            ℹ️ О проекте
        </a>
    </div>

        @if($main->isEmpty())
            <div class="empty-message">
                ⚠️ В базе данных пока нет записей.
            </div>
        
        @else
            <div class="items-grid">
                @foreach($main as $item)
                    <div class="card">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" 
                                 alt="{{ $item->name }}" 
                                 class="card-image">
                        @else
                            <div class="card-image-placeholder">Нет фото</div>
                        @endif

                        <div class="card-body">
                            <h3 class="card-name">{{ $item->name }}</h3>
                            
                            @if($item->col)
                                <span class="card-col">{{ $item->col }}</span>
                            @endif

                            <div class="card-price">{{ number_format($item->price, 2, '.', ' ') }} ₽</div>
                            
                            <p class="card-text">{{ Str::limit($item->text, 120) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>