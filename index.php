<?php

$test = "blah";

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random Website</title>
</head>
<body>
    <div data-game-container class="game-container">
        <div
            data-player
            class="player"
            style="top: 150px; left: 150px;"
        >
            <div class="icon"></div>
        </div>
    </div>
    <script>
      let mouse = {x: 100, y: 100};
      const gameContainer = document.querySelector('[data-game-container]');
      gameContainer.addEventListener('mousemove', function (e) {
        return mouse = {
          x: e.clientX - gameContainer.offsetLeft,
          y: e.clientY - gameContainer.offsetTop,
        };
      })

      const player = document.querySelector('[data-player]');

      const gameLoop = function() {
        console.log(mouse);

        player.style.top = mouse.y + 'px';
        player.style.left = mouse.x + 'px';

        window.requestAnimationFrame(gameLoop);
      }
      window.requestAnimationFrame(gameLoop);
    </script>
</body>
</html>
