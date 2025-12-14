<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ewit LMS')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/GigLayout.css'])
</head>
<body>
    @yield('content')
    <div class="course-card">
        <div class="course-image">
            <div class="course-placeholder">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                </svg>
            </div>
        </div>
        <div class="course-content">
            <span class="course-category">English</span>
            <h3 class="course-title">English Literature</h3>
            <div class="course-progress">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 80%"></div>
                </div>
                <span class="progress-text">80% Complete</span>
            </div>
            <div class="course-footer">
                <span class="course-lessons">16 of 20 lessons</span>
                <button class="continue-btn">Continue</button>
            </div>
        </div>
    </div>
</body>
</html>
