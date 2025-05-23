<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CV de {{ $user->name }}</title>
    <style>
        body { font-family: sans-serif; }
        h1, h2, h3 { color: #333; }
    </style>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <h2>{{ $user->title }}</h2>
    <p>{{ $user->bio }}</p>

    <h3>Projets</h3>
    <ul>
        @foreach ($user->projects as $project)
            <li><strong>{{ $project->title }}</strong> : {{ $project->description }}</li>
        @endforeach
    </ul>

    <h3>Compétences</h3>
    <ul>
        @foreach ($user->skills as $skill)
            <li>{{ $skill->name }}</li>
        @endforeach
    </ul>
</body>
</html>
