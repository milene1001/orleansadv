<?php
session_start();

// Load API key from environment or .env file
$apiKey = getenv('NEWSAPI_KEY');
$envPath = __DIR__ . '/.env';
if (!$apiKey && file_exists($envPath)) {
    $envData = parse_ini_file($envPath, false, INI_SCANNER_TYPED);
    if (isset($envData['NEWSAPI_KEY'])) {
        $apiKey = $envData['NEWSAPI_KEY'];
    }
}
if (!$apiKey) {
    $_SESSION['news_error'] = 'NEWSAPI_KEY not configured. Set it in .env or server environment.';
    header('Location: /');
    exit;
}

// Cache file path
$cacheFile = 'cache/news_cache.json';
$cacheTime = 24 * 60 * 60; // 24 hours in seconds

// Check if cache exists and is still valid
if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
    // Read from cache
    $cachedData = json_decode(file_get_contents($cacheFile), true);
    if ($cachedData && isset($cachedData['articles'])) {
        $_SESSION['news_articles'] = $cachedData['articles'];
        header('Location: /');
        exit;
    }
}

// If no valid cache exists, fetch from API
$query = urlencode('direito brasil leis regulamentação');
$url = "https://newsapi.org/v2/everything?q={$query}&language=pt&sortBy=publishedAt&apiKey={$apiKey}";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)) {
    $_SESSION['news_error'] = curl_error($ch);
    header('Location: /');
    exit;
}

// Close cURL session
curl_close($ch);

// Decode JSON response
$data = json_decode($response, true);

// Check if the response is valid
if ($data && isset($data['articles']) && !empty($data['articles'])) {
    // Get only the first three articles
    $articles = array_slice($data['articles'], 0, 3);
    
    // Store the articles in session
    $_SESSION['news_articles'] = $articles;
    
    // Create cache directory if it doesn't exist
    if (!file_exists('cache')) {
        mkdir('cache', 0755, true);
    }
    
    // Save to cache file
    $cacheData = [
        'timestamp' => time(),
        'articles' => $articles
    ];
    file_put_contents($cacheFile, json_encode($cacheData));
} else {
    $_SESSION['news_error'] = 'Invalid response from API or no articles found';
}

// Redirect to site root
header('Location: /');
exit;
?> 