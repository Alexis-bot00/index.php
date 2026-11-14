<?php
// ------------------------------------------------------------
// Personal Profile / Student Portfolio
// Edit the variables below to customize your profile.
// ------------------------------------------------------------

$fullName = "Alexis Dustin Almonte";
$course = "Bachelor of Science in Information Technology (BSIT)";
$yearLevel = "2nd Year";
$school = "Mater Dei College";
$email = "your.email@example.com"; // Replace with your email address.
$phone = "Your phone number";      // Replace with your contact number.
$location = "Bohol, Philippines";
$profilePhoto = "profile.jpg";     // Place your photo beside this index.php file.

$biography = "I am an Information Technology student who enjoys learning about technology, programming, and creating useful digital experiences. I am continuously improving my skills through school projects, practice, and hands-on activities.";

$education = [
    [
        "level" => "College",
        "school" => "Mater Dei College",
        "details" => "Bachelor of Science in Information Technology — 2nd Year"
    ],
    [
        "level" => "Senior High School",
        "school" => "Your Senior High School",
        "details" => "Add your strand, school year, or achievements here."
    ]
];

$skills = [
    "HTML & CSS",
    "PHP Fundamentals",
    "Java Programming",
    "基本 Programming Logic",
    "Problem Solving",
    "Teamwork"
];

$hobbies = [
    ["icon" => "💻", "name" => "Programming", "description" => "Exploring code and building projects."],
    ["icon" => "🎮", "name" => "Gaming", "description" => "Playing games and discovering game ideas."],
    ["icon" => "🎨", "name" => "Creative Design", "description" => "Exploring layouts, interfaces, and visuals."],
    ["icon" => "📚", "name" => "Learning", "description" => "Developing new skills and knowledge."]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal student portfolio of <?php echo htmlspecialchars($fullName); ?>">
    <title><?php echo htmlspecialchars($fullName); ?> | Student Portfolio</title>

    <style>
        /* ---------- Global styles ---------- */
        :root {
            --primary: #5b5ce2;
            --primary-dark: #4546bd;
            --accent: #17a6a1;
            --text: #20243a;
            --muted: #68708a;
            --surface: #ffffff;
            --background: #f4f6fc;
            --border: #e7eaf3;
            --shadow: 0 12px 35px rgba(34, 42, 82, 0.08);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
            color: var(--text);
            background: var(--background);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1100px, 92%);
            margin: 0 auto;
        }

        /* ---------- Header and navigation ---------- */
        header {
            color: white;
            background: linear-gradient(120deg, #34358f, #6566ed 65%, #17a6a1);
            padding: 20px 0;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand {
            font-size: 1.15rem;
            font-weight: 800;
            letter-spacing: 0.4px;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            list-style: none;
        }

        .nav-links a {
            font-size: 0.92rem;
            color: rgba(255, 255, 255, 0.9);
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: #b9fff5;
        }

        /* ---------- Hero / profile section ---------- */
        .hero {
            padding: 65px 0 55px;
            color: white;
            background: linear-gradient(120deg, #34358f, #6566ed 65%, #17a6a1);
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 42px;
        }

        .profile-photo {
            width: 190px;
            height: 190px;
            flex: 0 0 190px;
            object-fit: cover;
            border: 6px solid rgba(255, 255, 255, 0.85);
            border-radius: 50%;
            background: #e7eaff;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
        }

        .eyebrow {
            margin-bottom: 8px;
            color: #c9fff5;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero h1 {
            margin-bottom: 8px;
            font-size: clamp(2rem, 5vw, 3.25rem);
            line-height: 1.15;
        }

        .hero-description {
            max-width: 620px;
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.05rem;
        }

        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .hero-meta span {
            padding: 7px 13px;
            border: 1px solid rgba(255, 255, 255, 0.28);
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.12);
            font-size: 0.88rem;
        }

        /* ---------- Main content and cards ---------- */
        main {
            padding: 42px 0 65px;
        }

        .section {
            margin-bottom: 28px;
            padding: 30px;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: var(--surface);
            box-shadow: var(--shadow);
        }

        .section-heading {
            margin-bottom: 20px;
        }

        .section-heading h2 {
            font-size: 1.45rem;
            line-height: 1.3;
        }

        .section-heading p {
            margin-top: 5px;
            color: var(--muted);
            font-size: 0.94rem;
        }

        .about-text {
            color: var(--muted);
            font-size: 1rem;
        }

        .education-list {
            display: grid;
            gap: 16px;
        }

        .education-item {
            padding: 18px;
            border-left: 4px solid var(--primary);
            border-radius: 10px;
            background: #f7f8ff;
        }

        .education-item .level {
            color: var(--primary);
            font-size: 0.8rem;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .education-item h3 {
            margin: 4px 0;
            font-size: 1.08rem;
        }

        .education-item p {
            color: var(--muted);
            font-size: 0.93rem;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 11px;
        }

        .skill {
            padding: 9px 15px;
            border: 1px solid #dedfff;
            border-radius: 30px;
            color: var(--primary-dark);
            background: #f0f0ff;
            font-size: 0.92rem;
            font-weight: 600;
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .skill:hover {
            transform: translateY(-3px);
            background: #e4e5ff;
        }

        .hobby-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .hobby-card {
            padding: 20px 15px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: #fff;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hobby-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(34, 42, 82, 0.1);
        }

        .hobby-icon {
            display: block;
            margin-bottom: 10px;
            font-size: 1.8rem;
        }

        .hobby-card h3 {
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .hobby-card p {
            color: var(--muted);
            font-size: 0.87rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
        }

        .contact-item {
            padding: 16px;
            border-radius: 12px;
            background: #f7f8ff;
        }

        .contact-item strong {
            display: block;
            margin-bottom: 4px;
            color: var(--primary);
            font-size: 0.82rem;
            text-transform: uppercase;
        }

        .contact-item a,
        .contact-item span {
            overflow-wrap: anywhere;
            color: var(--text);
            font-size: 0.94rem;
        }

        /* ---------- Footer ---------- */
        footer {
            padding: 22px 0;
            color: #dfe2ff;
            background: #292b68;
            text-align: center;
            font-size: 0.9rem;
        }

        /* ---------- Responsive layout ---------- */
        @media (max-width: 760px) {
            .nav {
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                gap: 12px 17px;
            }

            .hero {
                padding: 45px 0;
            }

            .hero-content {
                align-items: center;
                flex-direction: column;
                gap: 22px;
                text-align: center;
            }

            .hero-meta {
                justify-content: center;
            }

            .hobby-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .section {
                padding: 22px 18px;
            }

            .profile-photo {
                width: 155px;
                height: 155px;
                flex-basis: 155px;
            }

            .hobby-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- Site header and navigation -->
    <header>
        <div class="container nav">
            <a class="brand" href="#home">My Portfolio</a>
            <nav aria-label="Main navigation">
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#hobbies">Interests</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Profile introduction -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <img
                class="profile-photo"
                src="<?php echo htmlspecialchars($profilePhoto); ?>"
                alt="Profile photo of <?php echo htmlspecialchars($fullName); ?>"
                onerror="this.style.display='none';"
            >
            <div>
                <p class="eyebrow">Hello, welcome to my portfolio</p>
                <h1><?php echo htmlspecialchars($fullName); ?></h1>
                <p class="hero-description">
                    <?php echo htmlspecialchars($course); ?> student
                    with an interest in technology, creativity, and continuous learning.
                </p>
                <div class="hero-meta">
                    <span><?php echo htmlspecialchars($yearLevel); ?></span>
                    <span><?php echo htmlspecialchars($school); ?></span>
                    <span><?php echo htmlspecialchars($location); ?></span>
                </div>
            </div>
        </div>
    </section>

    <main class="container">
        <!-- About me -->
        <section class="section" id="about">
            <div class="section-heading">
                <h2>About Me</h2>
                <p>A short introduction</p>
            </div>
            <p class="about-text"><?php echo htmlspecialchars($biography); ?></p>
        </section>

        <!-- Educational background -->
        <section class="section" id="education">
            <div class="section-heading">
                <h2>Educational Background</h2>
                <p>My academic journey</p>
            </div>
            <div class="education-list">
                <?php foreach ($education as $item): ?>
                    <article class="education-item">
                        <span class="level"><?php echo htmlspecialchars($item["level"]); ?></span>
                        <h3><?php echo htmlspecialchars($item["school"]); ?></h3>
                        <p><?php echo htmlspecialchars($item["details"]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Skills -->
        <section class="section" id="skills">
            <div class="section-heading">
                <h2>My Skills</h2>
                <p>Technologies and abilities I am developing</p>
            </div>
            <div class="skills-list">
                <?php foreach ($skills as $skill): ?>
                    <span class="skill"><?php echo htmlspecialchars($skill); ?></span>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Hobbies and interests -->
        <section class="section" id="hobbies">
            <div class="section-heading">
                <h2>Hobbies &amp; Interests</h2>
                <p>Things I enjoy doing in my free time</p>
            </div>
            <div class="hobby-grid">
                <?php foreach ($hobbies as $hobby): ?>
                    <article class="hobby-card">
                        <span class="hobby-icon" aria-hidden="true">
                            <?php echo htmlspecialchars($hobby["icon"]); ?>
                        </span>
                        <h3><?php echo htmlspecialchars($hobby["name"]); ?></h3>
                        <p><?php echo htmlspecialchars($hobby["description"]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Contact information -->
        <section class="section" id="contact">
            <div class="section-heading">
                <h2>Contact Information</h2>
                <p>Feel free to get in touch</p>
            </div>
            <div class="contact-grid">
                <div class="contact-item">
                    <strong>Email</strong>
                    <a href="mailto:<?php echo htmlspecialchars($email); ?>">
                        <?php echo htmlspecialchars($email); ?>
                    </a>
                </div>
                <div class="contact-item">
                    <strong>Phone</strong>
                    <span><?php echo htmlspecialchars($phone); ?></span>
                </div>
                <div class="contact-item">
                    <strong>Location</strong>
                    <span><?php echo htmlspecialchars($location); ?></span>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($fullName); ?>.
                All rights reserved.</p>
            <p>Student Portfolio | Designed with PHP, HTML5 &amp; CSS3</p>
        </div>
    </footer>
</body>
</html>
