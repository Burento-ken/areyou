<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Question</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #ffcccc;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }
        .question-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        button {
            font-size: 1.5em;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }
        #yes-btn {
            background: green;
            color: white;
        }
        #no-btn {
            background: red;
            color: white;
            position: absolute;
        }
    </style>
</head>
<body>

<div class="question-box">
    <h1>Are you gay? 🏳️‍🌈</h1>
    <button id="yes-btn">Yes</button>
    <button id="no-btn">No</button>
</div>

<script>
    let noButton = document.getElementById("no-btn");
    let yesButton = document.getElementById("yes-btn");

    noButton.addEventListener("mouseover", function () {
        let x = Math.random() * (window.innerWidth - noButton.clientWidth);
        let y = Math.random() * (window.innerHeight - noButton.clientHeight);
        noButton.style.left = `${x}px`;
        noButton.style.top = `${y}px`;
    });

    yesButton.addEventListener("click", function () {
        alert("I knew it! 😆🏳️‍🌈");
        document.body.innerHTML = "<h1>Welcome to the club! 🎉🌈</h1>";
    });
</script>

</body>
</html>
