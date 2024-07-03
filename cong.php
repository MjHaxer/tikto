<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations</title>
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            position: relative;
            z-index: 10;
        }
        h1 {
            font-family: 'Nosifer', cursive;
            color: red;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 20px;
            font-size: 16px;
        }
        .email-section {
            margin-top: 20px;
        }
        .email-section input {
            padding: 10px;
            width: 70%;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
            box-sizing: border-box;
        }
        .email-section button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff0050;
            color: #fff;
            cursor: pointer;
        }
        .party-bomb {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('party-bomb.gif');
            background-size: cover;
            top: 0;
            left: 0;
            opacity: 0.7;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="party-bomb"></div>
    <div class="container">
        <h1>Congratulations!</h1>
        <p>We will contact you at your email once your order is complete in 20 to 30 minutes.</p>
        <div class="email-section">
            <input type="email" id="email" placeholder="Enter your email">
            <button onclick="sendEmail()">Send</button>
        </div>
    </div>

    <script>
        function sendEmail() {
            const email = document.getElementById('email').value;
            if (email) {
                // Replace 'your-telegram-bot-url' with your actual bot URL
                fetch('your-telegram-bot-url', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ email: email })
                })
                .then(response => {
                    if (response.ok) {
                        alert('Email sent successfully!');
                    } else {
                        alert('Failed to send email. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to send email. Please try again.');
                });
            } else {
                alert('Please enter your email.');
            }
        }
    </script>
</body>
</html>
