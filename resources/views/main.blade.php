<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <div id="app">
    </div>
    
    @production
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            print_r($manifest);
        @endphp
        <script type="module" src="/build/{{ $manifest['resources/js/main.js']['file'] }}"></script>
        <link rel="stylesheet" href="/build/{{ $manifest['resources/js/main.js']['css'][0] }}">
    @else
        <script type="module" src="http://localhost:3000/@vite/client"></script>
        <script type="module" src="http://localhost:3000/resources/js/main.ts"></script>
    @endproduction
</body>
</html>