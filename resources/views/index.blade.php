<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ewit LMS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/index.css', 'resources/js/index.js'])
</head>
<body>
    <!-- Sidebar -->
    @extends('layouts.sidebar')

    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Bar -->
        <header class="topbar">
            <button class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <div class="search-box">
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
                </svg>
                <input type="text" placeholder="Search courses, lessons..." class="search-input">
            </div>

            <div class="topbar-right">
                <button class="notification-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                    </svg>
                    <span class="notification-badge">5</span>
                </button>
                <div class="user-menu">
                    <div class="user-avatar">
                        <span>JD</span>
                    </div>
                    <div class="user-info">
                        <span class="user-name">John Doe</span>
                        <span class="user-role">Student</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="dashboard">
            <!-- Welcome Section -->
            <section class="welcome-section">
                <div class="welcome-content">
                    <h1>Welcome back, <span>John!</span></h1>
                    <p>Continue your learning journey. You're making great progress!</p>
                </div>
            </section>

            <!-- Continue Learning Section -->
            @extends('layouts.GigLayout')
        </div>
    </main>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
</body>
</html>
