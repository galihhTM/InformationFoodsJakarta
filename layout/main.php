<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f46736535b.js" crossorigin="anonymous"></script>
    <title>Makanan Hits di Jakarta 2024</title>
    
</head>

<body>

    <?php include 'header.php'; ?>
    <?php include 'section.php'; ?>
    <?php include 'footer.php'; ?>

    <div class="popup" id="popup">
        <div class="popup-content">
            <button class="close-btn" onclick="closePopup()">X</button>
            <img id="popup-image" src=" " alt="Popup Image">
            <div class="popup-title"><h2 id="popup-title"></h2> </div>
            <div class="popup-text"><p id="popup-description"></p></div>
        </div>
    </div>
    

    <script src="script.js"></script>

</body>

</html>