<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
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
            max-width: 480px;
            width: 100%;
            box-shadow: 0 12px 40px rgba(0,0,0,0.5);
            text-align: center;
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
            justify-content: center;
            margin-bottom: 30px;
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
        h1 {
            font-family: 'Playfair Display', serif;
            color: #e8f5e9;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 14px;
            position: relative;
            z-index: 1;
        }
        p.subtitle {
            color: #8fb5a0;
            font-size: 14px;
            line-height: 1.7;
            position: relative;
            z-index: 1;
        }
        .accent-tag {
            display: inline-block;
            background: rgba(212, 175, 106, 0.15);
            color: #d4af6a;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            padding: 6px 16px;
            border-radius: 999px;
            margin-top: 18px;
            border: 1px solid rgba(212, 175, 106, 0.3);
            position: relative;
            z-index: 1;
        }
        .student-footer {
            margin-top: 22px;
            padding-top: 20px;
            border-top: 1px solid rgba(183, 228, 199, 0.15);
            position: relative;
            z-index: 1;
        }
        .student-footer .student-name {
            color: #e8f5e9;
            font-weight: 600;
            font-size: 15px;
        }
        .student-footer .student-email {
            color: #8fb5a0;
            font-size: 13px;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <div class="card">
        <nav class="nav">
            <a href="<?= site_url('student'); ?>" class="active">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </nav>
        <h1>Welcome to My Student Page</h1>
        <p class="subtitle">This is the home page. Click "Student Profile" above to view my information.</p>
        <span class="accent-tag">Web Systems & Technologies 2</span>

        <div class="student-footer">
            <div class="student-name">Diane Noche</div>
            <div class="student-email">diane.noche@gmail.com</div>
        </div>
    </div>
</body>
</html>