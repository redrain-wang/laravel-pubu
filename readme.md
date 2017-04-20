    
#composer安装
        
    composer require redrain/laravel-pubu
    
#添加ServiceProvider

    Redrain\Pubu\PubuServiceProvider::class,
    
#添加别名

    'Pubu' => Redrain\Pubu\Facades\Pubu::class
        
#使用
    
    Pubu::send($url, [
            'text' => 'text',
            'channel' => '#test-logs',
            'displayUser' => ['name' => 'logs', 'avatarUrl' => 'avatar.jpg'],
        ]);