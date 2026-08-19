<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top left, #1c3a2e, #0b1f18 70%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background: #12271e;
            border: 1px solid rgba(183, 228, 199, 0.2);
            border-radius: 20px;
            padding: 46px;
            max-width: 560px;
            width: 100%;
            box-shadow: 0 12px 40px rgba(0,0,0,0.5);
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: "";
            position: absolute;
            top: -70px;
            right: -70px;
            width: 180px;
            height: 180px;
            background: radial-gradient(circle, rgba(183,228,199,0.15), transparent 70%);
            border-radius: 50%;
        }
        .nav {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        .nav a {
            text-decoration: none;
            padding: 9px 22px;
            border-radius: 999px;
            font-weight: 500;
            font-size: 13.5px;
            letter-spacing: 0.3px;
            color: #b7e4c7;
            border: 1px solid rgba(183, 228, 199, 0.35);
            transition: 0.25s;
        }
        .nav a:hover, .nav a.active {
            background: #b7e4c7;
            color: #0b1f18;
            border-color: #b7e4c7;
        }
        .badge {
            display: inline-block;
            background: rgba(212, 175, 106, 0.15);
            color: #d4af6a;
            font-weight: 600;
            font-size: 12px;
            letter-spacing: 0.5px;
            padding: 7px 16px;
            border-radius: 999px;
            margin-bottom: 24px;
            border: 1px solid rgba(212, 175, 106, 0.3);
            position: relative;
            z-index: 1;
        }
        h1 {
            font-family: 'Playfair Display', serif;
            color: #e8f5e9;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 14px;
            position: relative;
            z-index: 1;
        }
        .description {
            color: #8fb5a0;
            font-size: 13.5px;
            line-height: 1.7;
            margin-bottom: 22px;
            position: relative;
            z-index: 1;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 13px 0;
            border-bottom: 1px solid rgba(183, 228, 199, 0.12);
            font-size: 14px;
            position: relative;
            z-index: 1;
            gap: 16px;
        }
        .info-row:last-child { border-bottom: none; }
        .label {
            color: #b7e4c7;
            font-weight: 600;
            white-space: nowrap;
        }
        .value {
            color: #d9ede0;
            text-align: right;
        }
        .social-section {
            margin-top: 24px;
            padding-top: 22px;
            border-top: 1px solid rgba(183, 228, 199, 0.15);
            position: relative;
            z-index: 1;
        }
        .social-title {
            color: #b7e4c7;
            font-size: 12.5px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }
        .social-links {
            display: flex;
            gap: 12px;
        }
        .social-links a {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            padding: 9px 16px;
            border-radius: 999px;
            border: 1px solid rgba(183, 228, 199, 0.3);
            color: #d9ede0;
            font-size: 13px;
            font-weight: 500;
            transition: 0.25s;
        }
        .social-links a:hover {
            background: rgba(183, 228, 199, 0.12);
            border-color: #b7e4c7;
        }
        .social-links svg {
            width: 16px;
            height: 16px;
            fill: #b7e4c7;
        }
    </style>
</head>
<body>
    <div class="card">
        <nav class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>" class="active">Student Profile</a>
        </nav>
        <span class="badge">✓ Access Granted — Welcome!</span>
        <h1>Student Information</h1>
        <p class="description"><?= $description; ?></p>

        <div class="info-row"><span class="label">Student ID</span><span class="value"><?= $student_id; ?></span></div>
        <div class="info-row"><span class="label">Name</span><span class="value"><?= $name; ?></span></div>
        <div class="info-row"><span class="label">Course</span><span class="value"><?= $course; ?></span></div>
        <div class="info-row"><span class="label">Year Level</span><span class="value"><?= $year; ?></span></div>
        <div class="info-row"><span class="label">Section</span><span class="value"><?= $section; ?></span></div>
        <div class="info-row"><span class="label">Email</span><span class="value"><?= $email; ?></span></div>
        <div class="info-row"><span class="label">Address</span><span class="value"><?= $address; ?></span></div>
        <div class="info-row"><span class="label">Contact</span><span class="value"><?= $contact; ?></span></div>
        <div class="info-row"><span class="label">Skills</span><span class="value"><?= $skills; ?></span></div>
        <div class="info-row"><span class="label">Hobbies</span><span class="value"><?= $hobbies; ?></span></div>

        <div class="social-section">
            <div class="social-title">Connect with me</div>
            <div class="social-links">
                <a href="<?= $facebook; ?>" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"/></svg>
                    Facebook
                </a>
                <a href="<?= $instagram; ?>" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24"><path d="M12 2c2.7 0 3.1 0 4.1.1 1 0 1.7.2 2.3.4.6.3 1.1.6 1.6 1.1.5.5.8 1 1.1 1.6.2.6.4 1.3.4 2.3.1 1 .1 1.4.1 4.1s0 3.1-.1 4.1c0 1-.2 1.7-.4 2.3-.3.6-.6 1.1-1.1 1.6-.5.5-1 .8-1.6 1.1-.6.2-1.3.4-2.3.4-1 .1-1.4.1-4.1.1s-3.1 0-4.1-.1c-1 0-1.7-.2-2.3-.4-.6-.3-1.1-.6-1.6-1.1-.5-.5-.8-1-1.1-1.6-.2-.6-.4-1.3-.4-2.3C2 15.1 2 14.7 2 12s0-3.1.1-4.1c0-1 .2-1.7.4-2.3.3-.6.6-1.1 1.1-1.6.5-.5 1-.8 1.6-1.1.6-.2 1.3-.4 2.3-.4C8.9 2 9.3 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 8.2a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4zm5.2-8.4a1.2 1.2 0 1 1 0-2.4 1.2 1.2 0 0 1 0 2.4z"/></svg>
                    Instagram
                </a>
            </div>
        </div>
    </div>
</body>
</html>