<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $resume->name }}'s Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $resume->name }}</h1>
            <i class="fas fa-user"></i>
        </div>
        <p>Email: {{ $resume->email }}</p>
        <p>Phone: {{ $resume->phone }}</p>

        <hr>

        <p>{{ $resume->about }}</p>

        <h2>Education</h2>
        <ul>
            @foreach(json_decode($resume->education) as $edu)
                <li>{{ $edu }}</li>
            @endforeach
        </ul>

        <h2>Experience</h2>
        <ul>
            @foreach(json_decode($resume->experience) as $exp)
                <li>{{ $exp }}</li>
            @endforeach
        </ul>

        <h2>Skills</h2>
        <ul>
            @foreach(json_decode($resume->skills) as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>