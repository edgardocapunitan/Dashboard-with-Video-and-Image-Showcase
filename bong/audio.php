<!DOCTYPE html>
<html>
<head>
  <title>Audio Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(90deg, grey, black, grey);
      text-align: center;
    }

    .audio-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: rgba(255, 255, 255, 0.5); 
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: box-shadow 0.3s; /* Adding transition for smoother effect */
    }

    .audio-container:hover {
      box-shadow: 0 0 15px rgba(255, 255, 0, 0.9); /* Glow effect on hover */
    }

    .audio-container h2 {
      margin-bottom: 20px;
    }

    .audio-player {
      text-align: center;
    }

    audio {
      width: 100%;
      transition: box-shadow 0.3s; /* Adding transition for smoother effect */
    }

    audio:hover {
      box-shadow: 0 0 15px rgba(255, 0, 0, 0.9); /* Glow effect on hover */
    }

    .form-button {
      text-align: center;
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

    .media-item video {
      max-width: 50%;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.9);
      transition: box-shadow 0.3s; /* Adding transition for smoother effect */
    }

    .media-item video:hover {
      box-shadow: 0 0 15px rgba(255, 255, 0, 0.9); /* Glow effect on hover */
    }
  </style>
</head>
<body>
<br>
  <div class="audio-container">
    <?php
      // Welcome message
      echo "<h2 style='font-family: Verdana, sans-serif;'>Welcome to My Music Showcase <br><br>NewJeans and Blackpink</h2>";
    ?>
    <br>
    <div class="audio-player">
      <h2>NewJeans - 'Ditto' </h2>
      <audio controls>
        <source src="ditto.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <h2>NewJeans - 'OMG' </h2>
      <audio controls>
        <source src="omg.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <h2>NewJeans - 'Hypeboy' </h2>
      <audio controls>
        <source src="hypeboy.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <h2>NewJeans - 'SuperShy' </h2>
      <audio controls>
        <source src="supershy.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <p><b>Black Pink - 'Lovesick Girl' </b></p>
    </div>
    <div class="media-item">
      <video controls>
        <source src="lovesickgirl.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <br>
    <br>
    <div class="form-button">
      <button onclick="goBackToForm2()">Video and Image Showcase</button>
      <a href="About.php"> 
        <button>About HTML and CSS </button>
      </a>
    </div>
  </div>

  <script>
    function goBackToForm2() {
      //go back to dashboard
      window.location.href = "dashboard.php";
    }
  </script>
</body>
</html>
