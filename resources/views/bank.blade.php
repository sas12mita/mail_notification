<!DOCTYPE html>
<html>
<head>
    <title>Bank Account Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h2 {
            text-align: center;
            color: #4f46e5;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border 0.3s ease;
        }

        input:focus {
            border-color: #4f46e5;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Submit Bank Account</h2>

    <form action="{{ route('bank-accounts.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

        <div>
            <label>Full Name:</label>
            <input type="text" name="full_name" required>
        </div>

        <div>
            <label>Bank Name:</label>
            <input type="text" name="bank_name" required>
        </div>

        <div>
            <label>Branch Name:</label>
            <input type="text" name="branch_name" required>
        </div>

        <button type="submit">Submit Bank Account</button>
    </form>
</div>

</body>
</html>
