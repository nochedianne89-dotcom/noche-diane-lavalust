<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
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
            max-width: 560px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(120, 190, 150, 0.18);
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
            background: #b7e4c7;
            border-radius: 50%;
            opacity: 0.5;
        }
        .nav {
            display: flex;
            gap: 10px;
            margin-bottom: 18px;
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
        .badge {
            display: inline-block;
            background: #ffe8d6;
            color: #d97a4d;
            font-weight: 600;
            font-size: 13px;
            padding: 7px 16px;
            border-radius: 999px;
            margin-bottom: 22px;
            position: relative;
            z-index: 1;
        }
        h1 {
            color: #3a6351;
            font-size: 24px;
            margin-bottom: 14px;
            position: relative;
            z-index: 1;
        }
        .description {
            color: #6b7d73;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #eaf2ec;
            font-size: 14.5px;
            position: relative;
            z-index: 1;
            gap: 16px;
        }
        .info-row:last-child { border-bottom: none; }
        .label {
            color: #6faf8a;
            font-weight: 600;
            white-space: nowrap;
        }
        .value {
            color: #3a4a42;
            text-align: right;
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
        <div class="info-row"><span class="label">Hobbies</span><span class="value"><?= $hobbies; ?></span></div>
    </div>
</body>
</html>