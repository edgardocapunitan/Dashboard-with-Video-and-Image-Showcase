<!DOCTYPE html>
<html>
<head>
  <title>Video and Image Showcase</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(90deg,  black, grey, black);
    }

    .media-showcase {
      max-width: 800px;
      margin: 0 auto;
      background-color: rgba(255, 255, 255, 0.7); 
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      text-align: center;
      transition: box-shadow 0.3s; 
    }

    .media-showcase:focus-within {
      box-shadow: 0 0 15px rgba(255, 0, 0, 0.7); 
    }

    .media-showcase:hover {
      box-shadow: 0 0 15px rgba(255, 255, 0, 0.7); /* Adjust glow color and spread radius as needed */
    }

    .media-showcase h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .media-container {
      position: relative; /* Needed for absolute positioning */
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .media-item {
      position: relative;
      max-width: 400px;
      text-align: center;
      margin-bottom: 20px;
      flex-grow: 1;
      transition: box-shadow 0.3s; 
    }

    .media-item:hover {
      box-shadow: 0 0 15px rgba(255, 0, 0, 0.9); /* Adjust glow color and spread radius as needed */
    }

    .media-item img {
      max-width: 100%;
      height: 200px; /* Set the height to your desired value */
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
      transition: box-shadow 0.3s; 
    }

    .navigation-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      font-size: 18px;
      cursor: pointer;
      z-index: 1;
    }

    .prev-button {
      left: 10px;
    }

    .next-button {
      right: 10px;
    }

    .form-button {
      text-align: center;
      margin-top: 20px;
    }

    .form-button button {
      background-color: black; 
      color: white;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      cursor: pointer;
    }

    .form-button button:hover {
      background-color: grey;
    }

    .video-container {
      max-width: 400px;
      margin: 20px auto;
      transition: box-shadow 0.3s; 
    }

    .video-item video {
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
      transition: box-shadow 0.3s; 
    }

    .video-container:hover,
    .video-item:hover {
      box-shadow: 0 0 15px rgba(255, 0, 0, 0.9); /* Adjust glow color and spread radius as needed */
    }
  </style>
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php"); 
    exit();
}
$username = $_SESSION['username'];
?>
 
<div class="media-showcase" tabindex="0"> 
    <h2>Welcome <?php echo $username; ?> to My Dashboard <br><br>Video and Image Showcase</h2>
    <div class="media-container">
      <button class="navigation-button prev-button" onclick="moveSlide(-1)">◄</button>
      <div class="media-item">
        <img src="iu.jpg" alt="Image 1" title="iu.jpg">
      </div>
      <div class="media-item">
        <img src="iu1.jpeg" alt="Image 2" title="iu1.jpeg">
      </div>
      <div class="media-item">
        <img src="iu2.png" alt="Image 3" title="iu2.png">
      </div>
      <div class="media-item">
        <img src="iu3.jpg" alt="Image 4" title="iu3.jpg">
      </div>
      <div class="media-item">
        <img src="iu4.png" alt="Image 5" title="iu4.png">
      </div>
      <button class="navigation-button next-button" onclick="moveSlide(1)">►</button>
    </div>

    <div class="video-container">
      <div class="video-item">
        <video controls>
          <source src="iu.mp4" type="video/mp4">
        </video>
      </div>
    </div>

    <div class="form-button">
      <button onclick="goBackToForm1()">Login Again</button>
      <a href="audio.php">
        <button>Go to Audio Page</button>
      </a>
    </div>
</div>

<script>
    let currentSlide = 0;
    const mediaItems = document.querySelectorAll('.media-item');

    function moveSlide(direction) {
      currentSlide += direction;
      if (currentSlide < 0) {
        currentSlide = mediaItems.length - 1;
      } else if (currentSlide >= mediaItems.length) {
        currentSlide = 0;
      }
      updateDisplay();
    }

    function updateDisplay() {
      mediaItems.forEach((item, index) => {
        if (index === currentSlide) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }

    updateDisplay();

    function goBackToForm1() {
      //login ka ulet
      window.location.href = "index.php";
    }
</script>
</body>
</html>
