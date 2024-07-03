<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay with Bitcoin</title>
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
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
        h1 {
            font-family: 'Nosifer', cursive;
            color: red;
            margin-bottom: 20px;
        }
        .qr-code {
            margin: 20px 0;
        }
        .btc-address {
            background-color: #444;
            padding: 10px;
            border-radius: 5px;
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btc-address span {
            margin-right: 10px;
            user-select: all;
        }
        .copy-button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff0050;
            color: #fff;
            cursor: pointer;
        }
        .confirmation-section {
            margin-top: 20px;
        }
        .confirmation-section input {
            padding: 10px;
            width: 70%;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .confirmation-section button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff0050;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pay with Bitcoin</h1>
        <div class="qr-code">
            <img src="your-qr-code-image-url.png" alt="Bitcoin QR Code" width="200">
        </div>
        <div class="btc-address">
            <span id="btc-address">193s9w7A3iarmte7MHJeSuQt3S9HyDNeHo</span>
            <button class="copy-button" onclick="copyAddress()">Copy Address</button>
        </div>
        <div class="confirmation-section">
            <input type="text" id="binance-id" placeholder="Enter your Binance ID">
            <button onclick="confirmPayment()">Confirm</button>
        </div>
    </div>

    <script>
        function copyAddress() {
            const btcAddress = document.getElementById('btc-address').innerText;
            navigator.clipboard.writeText(btcAddress).then(() => {
                alert('Bitcoin address copied to clipboard');
            }).catch(err => {
                console.error('Error copying address: ', err);
                alert('Failed to copy address. Please try again.');
            });
        }

        function confirmPayment() {
            const binanceId = document.getElementById('binance-id').value;
            if (binanceId) {
                window.location.href = 'cong.php';
            } else {
                alert('Please enter your Binance ID.');
            }
        }
    </script>
</body>
</html>
