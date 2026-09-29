<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];
$role = $_SESSION["role"];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dashboard — SULL</title>

    <link rel="stylesheet" href="dashboard.css">
</head>

<body>

<div class="dashboard">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-logo">
            SULL<span>.</span>
        </div>

        <div class="sidebar-label">
            MANAGEMENT
        </div>

        <nav class="sidebar-menu">

            <a href="#" class="menu-item active">
                <span class="menu-icon">⌂</span>
                Dashboard
            </a>

            <a href="#" class="menu-item">
                <span class="menu-icon">▣</span>
                Projects
            </a>

            <a href="#" class="menu-item">
                <span class="menu-icon">✎</span>
                Content
            </a>

            <a href="#" class="menu-item">
                <span class="menu-icon">◆</span>
                Skills
            </a>

            <a href="#" class="menu-item">
                <span class="menu-icon">⚙</span>
                Settings
            </a>

        </nav>

        <div class="sidebar-bottom">

            <a href="index.html" class="portfolio-link">
                <span>↗</span>
                View Portfolio
            </a>

            <a href="logout.php" class="logout-link">
                <span>↪</span>
                Logout
            </a>

        </div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <header class="topbar">

            <button class="mobile-menu" id="mobileMenu">
                ☰
            </button>

            <div class="page-title">
                <span>Dashboard</span>
                <small>Overview</small>
            </div>

            <div class="profile">

                <div class="profile-info">
                    <strong>
                        <?= htmlspecialchars($username) ?>
                    </strong>

                    <span>
                        <?= htmlspecialchars($role) ?>
                    </span>
                </div>

                <div class="profile-avatar">
                    <?= strtoupper(substr($username, 0, 1)) ?>
                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <section class="content">

            <div class="welcome">

                <div>
                    <span class="eyebrow">
                        SULL MANAGEMENT
                    </span>

                    <h1>
                        Welcome back,
                        <span><?= htmlspecialchars($username) ?></span> 👋
                    </h1>

                    <p>
                        Kelola portfolio kamu dari satu tempat.
                    </p>
                </div>

                <div class="role-badge">
                    <?= htmlspecialchars($role) ?>
                </div>

            </div>


            <!-- STAT CARDS -->
            <div class="stats">

                <div class="stat-card">

                    <div class="stat-icon purple">
                        ◈
                    </div>

                    <div>
                        <span>Projects</span>
                        <strong>03</strong>
                    </div>

                    <small>
                        Portfolio projects
                    </small>

                </div>


                <div class="stat-card">

                    <div class="stat-icon blue">
                        ✦
                    </div>

                    <div>
                        <span>Skills</span>
                        <strong>04</strong>
                    </div>

                    <small>
                        Core skills
                    </small>

                </div>


                <div class="stat-card">

                    <div class="stat-icon green">
                        ✓
                    </div>

                    <div>
                        <span>Status</span>
                        <strong>Active</strong>
                    </div>

                    <small>
                        Portfolio online
                    </small>

                </div>


                <div class="stat-card">

                    <div class="stat-icon orange">
                        ∞
                    </div>

                    <div>
                        <span>Ideas</span>
                        <strong>∞</strong>
                    </div>

                    <small>
                        Creative ideas
                    </small>

                </div>

            </div>


            <!-- LOWER CONTENT -->
            <div class="dashboard-grid">


                <!-- PROJECTS -->
                <div class="panel projects-panel">

                    <div class="panel-header">

                        <div>
                            <span class="panel-label">
                                PORTFOLIO
                            </span>

                            <h2>
                                Recent Projects
                            </h2>
                        </div>

                        <button class="add-button">
                            + Add Project
                        </button>

                    </div>


                    <div class="project-list">

                        <div class="project-item">

                            <div class="project-number">
                                01
                            </div>

                            <div class="project-info">
                                <strong>
                                    Web Article
                                </strong>

                                <span>
                                    HTML · CSS · JS
                                </span>
                            </div>

                            <button class="edit-button">
                                Edit
                            </button>

                        </div>


                        <div class="project-item">

                            <div class="project-number">
                                02
                            </div>

                            <div class="project-info">
                                <strong>
                                    Rock Paper Scissors
                                </strong>

                                <span>
                                    HTML · CSS · JavaScript
                                </span>
                            </div>

                            <button class="edit-button">
                                Edit
                            </button>

                        </div>


                        <div class="project-item">

                            <div class="project-number">
                                03
                            </div>

                            <div class="project-info">
                                <strong>
                                    Interface Exploration
                                </strong>

                                <span>
                                    Figma · UI/UX
                                </span>
                            </div>

                            <button class="edit-button">
                                Edit
                            </button>

                        </div>

                    </div>

                </div>


                <!-- QUICK ACTION -->
                <div class="panel">

                    <div class="panel-header">

                        <div>
                            <span class="panel-label">
                                QUICK ACTION
                            </span>

                            <h2>
                                Manage
                            </h2>
                        </div>

                    </div>


                    <div class="quick-actions">

                        <button class="quick-action">
                            <span>＋</span>
                            <div>
                                <strong>
                                    Add Project
                                </strong>

                                <small>
                                    Create new project
                                </small>
                            </div>
                        </button>


                        <button class="quick-action">
                            <span>✎</span>
                            <div>
                                <strong>
                                    Edit Profile
                                </strong>

                                <small>
                                    Update information
                                </small>
                            </div>
                        </button>


                        <button class="quick-action">
                            <span>⚙</span>
                            <div>
                                <strong>
                                    Settings
                                </strong>

                                <small>
                                    Dashboard settings
                                </small>
                            </div>
                        </button>

                    </div>

                </div>

            </div>


            <!-- BOTTOM -->
            <div class="bottom-panel">

                <div>

                    <span class="panel-label">
                        WEBSITE STATUS
                    </span>

                    <h2>
                        Your portfolio is online.
                    </h2>

                    <p>
                        Semua orang dapat melihat portfolio kamu
                        tanpa login.
                    </p>

                </div>

                <a href="index.html">
                    Open Portfolio →
                </a>

            </div>

        </section>

    </main>

</div>

<script src="dashboard.js"></script>

</body>
</html>