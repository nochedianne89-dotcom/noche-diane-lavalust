<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top left, #2a1c3d, #14101d 70%);
            min-height: 100vh;
            padding: 50px 20px;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            background: #1e1730;
            border: 1px solid rgba(200, 172, 240, 0.2);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.5);
            position: relative;
            overflow: hidden;
        }
        .container::before {
            content: "";
            position: absolute;
            top: -70px;
            right: -70px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(200,172,240,0.15), transparent 70%);
            border-radius: 50%;
        }
        h1 {
            font-family: 'Playfair Display', serif;
            color: #f0e8fb;
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 8px;
            position: relative;
            z-index: 1;
        }
        p.subtitle {
            color: #a999c2;
            font-size: 14px;
            margin-bottom: 28px;
            position: relative;
            z-index: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            position: relative;
            z-index: 1;
        }
        thead th {
            text-align: left;
            padding: 12px 16px;
            font-size: 12.5px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: #d3b8f5;
            border-bottom: 1px solid rgba(200, 172, 240, 0.25);
        }
        tbody td {
            padding: 14px 16px;
            font-size: 14px;
            color: #e5dcf3;
            border-bottom: 1px solid rgba(200, 172, 240, 0.1);
        }
        tbody tr:hover {
            background: rgba(200, 172, 240, 0.06);
        }
        tbody tr:last-child td {
            border-bottom: none;
        }
        .id-cell {
            color: #b48ee0;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Management</h1>
        <p class="subtitle">Records retrieved dynamically from the <code>users</code> table.</p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td class="id-cell"><?= $user['id']; ?></td>
                    <td><?= $user['firstname']; ?></td>
                    <td><?= $user['lastname']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['username']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>