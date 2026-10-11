<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modular PHP Web Portal</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 40px 20px;
            background-color: #dce1e7;
            color: #333; 
        }

        .page-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        header { 
            background-color: #2c3e50; 
            color: #fff; 
            padding: 1.5rem; 
            text-align: center; 
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px; 
        }

        nav { 
            background-color: #34495e; 
            display: flex; 
            justify-content: center; 
            padding: 0.75rem; 
            border-radius: 6px;
            margin-bottom: 25px; 
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem; 
            margin: 0 0.25rem; 
            border-radius: 4px; 
        }

        nav a:hover {
            background-color: #1abc9c; 
        }

        main { 
            padding: 10px 0; 
            margin-bottom: 25px; 
        }

        footer { 
            text-align: center; 
            padding: 1rem; 
            background-color: #2c3e50; 
            color: #fff; 
            border-radius: 0 0 8px 8px;
        }

        .form-group { 
            margin-bottom: 1.2rem; 
        }

        .form-group label { 
            display: block; 
            margin-bottom: 0.4rem; 
            font-weight: bold; 
        }

        .form-group input {
            width: 100%; 
            padding: 0.6rem; 
            box-sizing: border-box; 
            border: 1px solid #ccc; 
            border-radius: 4px;
        }

        .error {
            color: #e74c3c; 
            font-size: 0.875rem; 
            display: block; 
            margin-top: 0.3rem; 
        }

        .success {
            color: #2ecc71; 
            background: #e8f8f5; 
            padding: 1rem; 
            border-radius: 4px; 
            border: 1px solid #2ecc71; 
            margin-bottom: 1rem; 
        }

        button { 
            background-color: #3498db; 
            color: white; 
            padding: 0.7rem 1.5rem; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-size: 1rem; 
            width: 100%; 
        }

        button:hover { 
            background-color: #2980b9; 
        }

    </style>
</head>
<body>
    <div class="page-container">
        <header>
            <h1>Student Web Portal</h1>
        </header>