<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fdf6ec, #eaf7ee);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background: #ffffff;
            border-radius: 24px;
            padding: 44px;
            max-width: 480px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(120, 190, 150, 0.18);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: "";
            position: absolute;
            top: -60px;
            right: -60px;
            width: 160px;
            height: 160px;
            background: #ffd8be;
            border-radius: 50%;
            opacity: 0.5;
        }
        .card::after {
            content: "";
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 130px;
            height: 130px;
            background: #b7e4c7;
            border-radius: 50%;
            opacity: 0.5;
        }
        .nav {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-bottom: 28px;
            position: relative;
            z-index: 1;
        }
        .nav a {
            text-decoration: none;
            padding: 9px 20px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 14px;
            color: #4c8064;
            border: 1.5px solid #b7e4c7;
            transition: 0.25s;
        }
        .nav a:hover, .nav a.active {
            background: #95d5b2;
            color: #ffffff;
            border-color: #95d5b2;
        }
        h1 {
            color: #3a6351;
            font-size: 26px;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }
        p.subtitle {
            color: #7d9e8f;
            font-size: 14.5px;
            line-height: 1.7;
            position: relative;
            z-index: 1;
        }
        .accent-tag {
            display: inline-block;
            background: #ffe8d6;
            color: #d97a4d;
            font-size: 12.5px;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 999px;
            margin-top: 18px;
            position: relative;
            z-index: 1;
        }
        .student-footer {
            margin-top: 20px;
            padding-top: 18px;
            border-top: 1px solid #eaf2ec;
            position: relative;
            z-index: 1;
        }
        .student-footer .student-name {
            color: #3a6351;
            font-weight: 600;
            font-size: 15px;
        }
        .student-footer .student-email {
            color: #7d9e8f;
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
        <span class="accent-tag">Web Systems & Technologies</span>

        <div class="student-footer">
            <div class="student-name">Diane Noche</div>
            <div class="student-email">diane.noche@gmail.com</div>
        </div>
    </div>
</body>
</html>