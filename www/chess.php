<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/chess_styles.css">
    <title>Chess Game</title>
</head>
<body>
    <div id="header">
        <h1>Chess Game</h1>
    </div>
    <div class="container-center">
        <div class="container-center">
            <div class="container">
                <div id="info-black">
                    <div class="player">
                        <span class="player-name-black">Black</span>
                    </div>
                    <div class="container-row">
                        <div id="white-pawn-icon" class="icon"></div>
                        <div id="white-knight-icon" class="icon"></div>
                        <div id="white-bishop-icon" class="icon"></div>
                        <div id="white-rook-icon" class="icon"></div>
                        <div id="white-queen-icon" class="icon"></div>
                        <div id="black-plus" class="icon">
                            <span class="count"></span>
                        </div>
                    </div>
                </div>
                <div id="board">
                
                </div>
                <div id="info-white">
                    <div class="player">
                        <span class="player-name-white">White</span>
                    </div>
                    <div class="container-row">
                        <div id="black-pawn-icon" class="icon"></div>
                        <div id="black-knight-icon" class="icon"></div>
                        <div id="black-bishop-icon" class="icon"></div>
                        <div id="black-rook-icon" class="icon"></div>
                        <div id="black-queen-icon" class="icon"></div>
                        <div id="white-plus" class="icon">
                            <span class="count"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="history" class="container">
                <div class="turn">
                    <div class="paddign-right">
                    </div>
                    <div class="padding-right">
                    </div>
                </div>
            </div>
            </div>
    </div>
    <script src="assets/js/chess_script.js"></script>
</body>
</html>