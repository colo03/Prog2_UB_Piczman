let img;
let playerXCor = 600;
let playerYCor = 550;
let playerWidth = 40;
let playerHeight = 40;
let difficulty = 5;
let limit = 30;
let score = 0;
let baddies = [];
let isCollided = false;
let moveLeft = false;
let moveRight = false;
const moveSpeed = 5; // Velocidad de movimiento
let gameStarted = false; // Para controlar la pantalla de inicio
let showInstructions = false; // Variable para controlar la visualización de las instrucciones

function preload() {
    img = loadImage("bg.png");
}

function setup() {
    createCanvas(1280, 720);
    initBaddies(-100, width + 20, -250, -80, difficulty);
}

function draw() {
    if (!gameStarted) {
        showStartScreen(); // Mostrar pantalla de inicio
        return;
    }

    if (!isCollided) {
        image(img, 0, 0); // Usar la imagen en lugar del fondo
        drawPlayer();

        if (moveLeft && playerXCor > 0) {
            playerXCor -= moveSpeed;
        }
        if (moveRight && playerXCor < width - playerWidth) {
            playerXCor += moveSpeed;
        }

        moveBaddies();
        if (score > limit && score < limit + 2) {
            initBaddies(-100, width + 20, -260, -80, difficulty);
            difficulty += 5; // Aumenta la dificultad
            limit += 30;
        }
    } else {
        showGameOverScreen(); // Mostrar pantalla de "Perdiste"
    }
}

function keyPressed() {
    if (!gameStarted) {
        if (showInstructions) {
            showInstructions = false; // Ocultar instrucciones si ya están visibles
        } else {
            gameStarted = true; // Iniciar el juego
            isCollided = false; // Reiniciar colisión
            score = 0; // Reiniciar puntaje
            difficulty = 10; // Reiniciar dificultad
            initBaddies(-100, width + 20, -250, -80, difficulty); // Reiniciar obstáculos
            return;
        }
    }

    if (isCollided) {
        gameStarted = false; // Volver al estado de inicio
        return;
    }

    if (key === 'a' || key === 'A') {
        moveLeft = true;
    }
    if (key === 'd' || key === 'D') {
        moveRight = true;
    }
}

function keyReleased() {
    if (key === 'a' || key === 'A') {
        moveLeft = false;
    }
    if (key === 'd' || key === 'D') {
        moveRight = false;
    }
}

function mousePressed() {
    // Verifica si el mouse está sobre el botón "Cómo jugar"
    if (!gameStarted && mouseX >= width / 2 - 100 && mouseX <= width / 2 + 100 &&
        mouseY >= height / 2 + 20 && mouseY <= height / 2 + 70) {
        showInstructions = !showInstructions; // Alternar la visualización de las instrucciones
    }
}

function initBaddies(xMin, xMax, yMin, yMax, num) {
    baddies = [];
    for (let i = 0; i < num; i++) {
        let x = random(xMin, xMax);
        let y = random(yMin, yMax);
        let diameter = 30; //Ajuste del diametro del enemigo
        baddies[i] = new Baddie(x, y, diameter);
    }
}

function moveBaddies() {
    for (let i = 0; i < baddies.length; i++) {
        if (baddies[i].yCor > height) {
            baddies[i].yCor = -10;
        }
        baddies[i].display();
        baddies[i].drop(random(5,23));

        // Calcula la distancia entre el centro de la pelotita y el jugador
        let baddieCenterX = baddies[i].xCor;
        let baddieCenterY = baddies[i].yCor;
        let playerCenterX = playerXCor + playerWidth / 2;
        let playerCenterY = playerYCor + playerHeight / 2;

        // Radio de la pelotita
        let baddieRadius = baddies[i].diameter / 2;
        // Dimensiones del jugador
        let playerWidthHalf = playerWidth / 2;
        let playerHeightHalf = playerHeight / 2;

        // Verifica si hay colisión
        let conditionX = abs(baddieCenterX - playerCenterX) < (baddieRadius + playerWidthHalf);
        let conditionY = abs(baddieCenterY - playerCenterY) < (baddieRadius + playerHeightHalf);

        if (conditionX && conditionY) {
            isCollided = true; // Colisión detectada
        }
    }

    score += 0.1;

    // Configuración para el texto
    noStroke(); // Asegurarse de que el texto no tenga borde
    fill(0, 102, 153); // Color del texto
    textSize(25);
    textAlign(LEFT, TOP);
    text("Puntaje: " + int(score), 10, 40);
}

function drawPlayer() {
    stroke(204, 132, 0);
    strokeWeight(4);
    fill(204, 102, 0);
    rect(playerXCor, playerYCor, playerWidth, playerHeight, 7);
}

function showStartScreen() {
    background(img); // Fondo del juego
    fill(0);
    textSize(50);
    textAlign(CENTER, CENTER);
    text("Esquivar los obstáculos", width / 2, height / 2 - 50); // Título

    // Botón "Cómo jugar"
    textSize(30);
    fill(100); // Color del botón
    rect(width / 2 - 100, height / 2 + 20, 200, 50, 10); // Dibujar el botón
    fill(255); // Color del texto
    text("Cómo jugar", width / 2, height / 2 + 45); // Texto del botón

    // Mostrar instrucciones si está activado
    if (showInstructions) {
        textSize(20);
        fill(0);
        text("Te mueves con A y D", width / 2, height / 2 + 100); // Instrucciones
    }

    // Mensaje para iniciar el juego
    textSize(25);
    text("Presiona cualquier tecla para jugar", width / 2, height / 2 + 150);
}

function showGameOverScreen() {
    noStroke(); // Asegurar que el texto no tenga borde
    fill(255, 0, 0);
    textSize(50);
    textAlign(CENTER, CENTER);
    text("Perdiste", width / 2, height / 2);
    textSize(25);
    text("Puntaje: " + int(score), width / 2, height / 2 + 50);
    text("Presiona cualquier tecla para reiniciar", width / 2, height / 2 + 100);
}

// Clase Enemigo
class Baddie {
    constructor(xVal, yVal, diameterVal) {
        this.xCor = xVal;
        this.yCor = yVal;
        this.diameter = diameterVal;
    }

    drop(speed) {
        this.yCor += speed;
    }

    display() {
        stroke(255, 102, 204); // Borde rosa
        strokeWeight(2);
        fill(0, 102, 255); // Azul
        ellipse(this.xCor, this.yCor, this.diameter, this.diameter); // Pelotita
    }
}
