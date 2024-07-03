<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find TikTok Account</title>
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
        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-bar input {
            padding: 10px;
            width: 70%;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .search-bar button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff0050;
            color: #fff;
            cursor: pointer;
        }
        .account-info {
            display: none;
            margin-top: 20px;
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
        }
        .account-info img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .account-info h2 {
            margin: 10px 0;
        }
        .account-info p {
            color: #bbb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Search Your TikTok Account</h1>
        <div class="search-bar">
            <input type="text" id="tiktok-username" placeholder="Enter your TikTok username" onkeydown="handleEnter(event)">
            <button onclick="redirectToPay()">Go</button>
        </div>
        <div class="account-info" id="account-info">
            <img id="profile-pic" src="" alt="Profile Picture">
            <h2 id="username"></h2>
            <p id="bio"></p>
        </div>
    </div>

    <script>
        async function searchTikTokAccount() {
            const username = document.getElementById('tiktok-username').value;
            if (username) {
                const apiKey = '1109279431mshd5b18fbbd79c25fp15e1fbjsnb5db739515ed'; // Replace with your RapidAPI key
                const url = `https://tiktok-scraper2.p.rapidapi.com/user/info?username=${username}`;

                const options = {
                    method: 'GET',
                    headers: {
                        'X-RapidAPI-Key': apiKey,
                        'X-RapidAPI-Host': 'tiktok-scraper2.p.rapidapi.com'
                    }
                };

                try {
                    const response = await fetch(url, options);
                    const data = await response.json();

                    if (data.user) {
                        // Display account info
                        document.getElementById('profile-pic').src = data.user.avatarLarger;
                        document.getElementById('username').innerText = "@" + data.user.uniqueId;
                        document.getElementById('bio').innerText = data.user.signature;
                        document.getElementById('account-info').style.display = 'block';
                    } else {
                        alert('User not found. Please check the username and try again.');
                    }
                } catch (error) {
                    console.error('Error fetching TikTok account info:', error);
                    alert('An error occurred while fetching the account info. Please try again later.');
                }
            } else {
                alert('Please enter a TikTok username.');
            }
        }

        function handleEnter(event) {
            if (event.key === 'Enter') {
                redirectToPay();
            }
        }

        function redirectToPay() {
            searchTikTokAccount().then(() => {
                window.location.href = 'pay.php';
            });
        }
    </script>
</body>
</html>
