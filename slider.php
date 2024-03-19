<?php
// Database connection variables
$host = 'localhost';
$dbname = 'hillsoft_real';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch slider content
    $stmt = $pdo->query("SELECT news_title, news_detail FROM news");
    $sliderContents = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    $sliderContents = []; // Ensure variable is initialized even if connection fails
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text-based Hero Slider</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            /* background-color: #000; Black background */
            color: #fff; /* White text color */
            margin: 0;
            padding: 20px;
        }
        .hero-slider2 {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 40px auto;
            overflow: hidden;
            border-radius: 8px;
        }
        .slide2 {
            display: none;
            padding: 20px;
            background-color: white; /* Darker background for the slide */
            text-align: center;
            height: 250px; /* Fixed height */
            overflow: hidden; /* Hide overflow content */
            position: relative;
            box-sizing: border-box;
            border: 2px solid rgb(185 180 155 / 95%);
        }
        .slide2 h2 {
            margin: 10px 0;
            font-size: 24px;
            color: #0369A3; /* Yellow color for headings */
            background-color: white;
        }
        .slide2 p {
            font-size: 16px;
            margin-bottom: 30px; /* Space for Read More button */
            color:black; /* Lighter text color */
            /* background-color: #d3cdf3; */
        }
        .read-more {
            display: none; /* Initially hidden */
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            color: #ff0; /* Yellow color for the button */
            background: none;
            border: none;
            font-size: 16px;
        }
        .prev2, .next2 {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: white; /* Yellow background for arrows */
            color: #333; /* Dark text color for arrows */
            border: none;
            font-size: 18px;
            padding: 10px 15px;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        .next2 {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev2 {
            left: 0;
        }
        .prev2:hover, .next2:hover {
            background-color: #ccc; /* Light hover color */
        }
    </style>
</head>
<body>

<div class="hero-slider2">
    <?php foreach ($sliderContents as $content): ?>
        <div class="slide2">
            <h2><?php echo htmlspecialchars($content['news_title']); ?></h2>
            <div class="content-container2">
                <p><?php echo htmlspecialchars($content['news_detail']); ?></p>
            </div>
            <button class="read-more" onclick="toggleReadMore(this)" style="display: none;">Read More</button>
        </div>
    <?php endforeach; ?>
    <button class="prev2">&#10094;</button>
    <button class="next2">&#10095;</button>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide2");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 4000); // Change slide every 4 seconds
}

document.querySelector(".prev2").addEventListener("click", function() {
    slideIndex -= 2; // Adjust because showSlides() increments
    showSlides();
});

document.querySelector(".next2").addEventListener("click", function() {
    showSlides();
});

function toggleReadMore(btn) {
    var slide = btn.parentElement;
    var content = slide.querySelector(".content-container2");
    if (content.style.maxHeight) {
        content.style.maxHeight = null;
        btn.textContent = "Read More";
    } else {
        content.style.maxHeight = content.scrollHeight + "px";
        btn.textContent = "Read Less";
    }
}

window.onload = function() {
    let slides = document.getElementsByClassName("slide2");
    Array.from(slides).forEach(function(slide) {
        let contentContainer = slide.querySelector(".content-container2");
        let readMoreBtn = slide.querySelector(".read-more");
        if (contentContainer.scrollHeight > 250) { // Use the slide height here
            readMoreBtn.style.display = "inline-block";
            contentContainer.style.maxHeight = "200px"; // Adjust based on your layout, leave space for title
        }
    });
};
</script>

</body>
</html> 
