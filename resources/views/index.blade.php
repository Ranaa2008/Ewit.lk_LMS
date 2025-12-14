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
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="/" class="logo">Ewit<span>.lk</span></a>
            <button class="sidebar-close" id="sidebarClose">×</button>
        </div>
        
        <nav class="sidebar-nav">
            <ul class="nav-menu">
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                        </svg>
                        <span>My Courses</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        <span>Schedule</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                        <span>Messages</span>
                        <span class="nav-badge">3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        <span>Certificates</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <a href="{{ route('login') }}" class="logout-btn">
                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <polyline points="16 17 21 12 16 7"/>
                    <line x1="21" y1="12" x2="9" y2="12"/>
                </svg>
                <span>Logout</span>
            </a>
        </div>
    </aside>

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
                <div class="welcome-stats">
                    <div class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Courses Enrolled</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">48</span>
                        <span class="stat-label">Hours Learned</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Certificates</span>
                    </div>
                </div>
            </section>

            <!-- Continue Learning Section -->
            <section class="section">
                <div class="section-header">
                    <h2>Continue Learning</h2>
                    <a href="#" class="view-all">View All</a>
                </div>
                <div class="courses-grid">
                    <div class="course-card">
                        <div class="course-image">
                            <div class="course-placeholder">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                    <path d="M2 17l10 5 10-5"/>
                                    <path d="M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="course-content">
                            <span class="course-category">Mathematics</span>
                            <h3 class="course-title">Advanced Algebra for O/L</h3>
                            <div class="course-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 65%"></div>
                                </div>
                                <span class="progress-text">65% Complete</span>
                            </div>
                            <div class="course-footer">
                                <span class="course-lessons">12 of 18 lessons</span>
                                <button class="continue-btn">Continue</button>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-image">
                            <div class="course-placeholder">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 16v-4"/>
                                    <path d="M12 8h.01"/>
                                </svg>
                            </div>
                        </div>
                        <div class="course-content">
                            <span class="course-category">Science</span>
                            <h3 class="course-title">Physics Fundamentals</h3>
                            <div class="course-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 40%"></div>
                                </div>
                                <span class="progress-text">40% Complete</span>
                            </div>
                            <div class="course-footer">
                                <span class="course-lessons">8 of 20 lessons</span>
                                <button class="continue-btn">Continue</button>
                            </div>
                        </div>
                    </div>

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
                </div>
            </section>

            <!-- Upcoming Classes & Activity -->
            <div class="dashboard-grid">
                <!-- Upcoming Classes -->
                <section class="section upcoming-section">
                    <div class="section-header">
                        <h2>Upcoming Classes</h2>
                        <a href="#" class="view-all">View Calendar</a>
                    </div>
                    <div class="upcoming-list">
                        <div class="upcoming-item">
                            <div class="upcoming-time">
                                <span class="time">10:00</span>
                                <span class="period">AM</span>
                            </div>
                            <div class="upcoming-content">
                                <h4>Mathematics - Trigonometry</h4>
                                <p>Mr. Kamal Perera</p>
                            </div>
                            <span class="upcoming-badge live">Live</span>
                        </div>
                        <div class="upcoming-item">
                            <div class="upcoming-time">
                                <span class="time">2:00</span>
                                <span class="period">PM</span>
                            </div>
                            <div class="upcoming-content">
                                <h4>Physics - Mechanics</h4>
                                <p>Mrs. Nimal Silva</p>
                            </div>
                            <span class="upcoming-badge">In 3 hours</span>
                        </div>
                        <div class="upcoming-item">
                            <div class="upcoming-time">
                                <span class="time">4:30</span>
                                <span class="period">PM</span>
                            </div>
                            <div class="upcoming-content">
                                <h4>Chemistry - Organic</h4>
                                <p>Dr. Saman Fernando</p>
                            </div>
                            <span class="upcoming-badge">In 5 hours</span>
                        </div>
                    </div>
                </section>

                <!-- Recent Activity -->
                <section class="section activity-section">
                    <div class="section-header">
                        <h2>Recent Activity</h2>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon completed">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </div>
                            <div class="activity-content">
                                <p>Completed <strong>Chapter 5: Quadratic Equations</strong></p>
                                <span class="activity-time">2 hours ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon quiz">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                    <polyline points="14 2 14 8 20 8"/>
                                </svg>
                            </div>
                            <div class="activity-content">
                                <p>Scored <strong>85%</strong> on Physics Quiz</p>
                                <span class="activity-time">5 hours ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon enrolled">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                    <path d="M2 17l10 5 10-5"/>
                                </svg>
                            </div>
                            <div class="activity-content">
                                <p>Enrolled in <strong>Chemistry for A/L</strong></p>
                                <span class="activity-time">Yesterday</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon certificate">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="8" r="7"/>
                                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                                </svg>
                            </div>
                            <div class="activity-content">
                                <p>Earned certificate in <strong>Basic English</strong></p>
                                <span class="activity-time">3 days ago</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
</body>
</html>
