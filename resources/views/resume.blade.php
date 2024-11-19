<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head section remains the same -->
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
    <h
