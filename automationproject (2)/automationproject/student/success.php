<DOCTYPE html>
<html>
<head>
  <title>REQUEST</title>
  <style>
    .container {
      position: relative;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: Arial, sans-serif;
    }

    .loader {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      position: relative;
      perspective: 800px;
      transform-style: preserve-3d;
      animation: rotate 4s infinite linear;
    }

    .loader .bar {
      position: absolute;
      width: 10px;
      height: 60px;
      background-color: #ff0000;
      transform-origin: center bottom;
      bottom: 20px;
      animation: move 1.5s infinite ease-in-out alternate;
    }

    .loader .bar:nth-child(1) {
      left: 0;
      animation-delay: 0s;
    }

    .loader .bar:nth-child(2) {
      left: 20px;
      animation-delay: 0.2s;
    }

    .loader .bar:nth-child(3) {
      left: 40px;
      animation-delay: 0.4s;
    }

    .loader .bar:nth-child(4) {
      left: 60px;
      animation-delay: 0.6s;
    }

    .loader .bar:nth-child(5) {
      left: 80px;
      animation-delay: 0.8s;
    }

    @keyframes rotate {
      0% {
        transform: rotateY(0deg);
      }
      100% {
        transform: rotateY(360deg);
      }
    }

    @keyframes move {
      0% {
        height: 60px;
      }
      50% {
        height: 20px;
      }
      100% {
        height: 60px;
      }
    }
    .box {
      position:relative;
      width:50%;
      margin-top:1%;
      margin-left:20%;
      padding: 45px; /* Adds some padding inside the box */
      border: 1px solid black;
      border-radius: 1em; /* Sets a solid red border */
      background-color: lightgreen; /* Sets a yellow background color */
      color: black; /* Sets the text color */
      font-size: 20px; /* Sets the font size */
      font-weight: bold; /* Sets the font weight */
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      top:90px;
      left:20px;
      align-items:center;
      text-align:center;
      justify-content:center; /* Adds a box shadow */

    }
    .box1 {
      position:relative;
      width:50%;
      margin-top:1%;
      margin-left:20%;
      padding: 45px; /* Adds some padding inside the box */
      border: 1px solid black;
      border-radius: 1em; /* Sets a solid red border */
      background-color: maroon; /* Sets a yellow background color */
      color: white; /* Sets the text color */
      font-size: 20px; /* Sets the font size */
      font-weight: bold; /* Sets the font weight */
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      top:90px;
      left:20px;
      align-items:center;
      text-align:center;
      justify-content:center; /* Adds a box shadow */

    }
    .back-link {
    display: inline-block;
    padding: 9px 18px;
    margin: 4px;
    font-size: 10px;
    background-color:white;
    color:black;
    border:black;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    position: relative;
    transition: all 0.1 ease;
  }
  .back-link:hover{
    background-color:black;
    color:white;
  }
  </style>
</head>
<body>
  <a href="../index.php" class="back-link">BACK</a>
  <div class='box'>Your Certificate Request is Under Process. Login with your USN and use USN as a Password to see the Status of your Request.<br></div>
  </body>
</html>