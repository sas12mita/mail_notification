<!DOCTYPE html>
<html>
<head>
    <title>Broker Account Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h2 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 18px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #2563eb;
            outline: none;
        }

        button {
            width: 100%;
            background-color: #2563eb;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Submit Broker Account</h2>

    <form action="{{ route('broker-accounts.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

        <div>
            <label>Full Name:</label>
            <input type="text" name="full_name" required>
        </div>

        <div>
            <label>BOID Number:</label>
            <input type="text" name="boid_no" required>
        </div>

        <div>
            <label>Source of Investment:</label>
            <input type="text" name="source_of_investment" required>
        </div>

        <button type="submit">Submit Broker Account</button>
    </form>
</div>

</body>
</html>
