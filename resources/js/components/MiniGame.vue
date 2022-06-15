<template>
    <h1>Canvas Physics Test with Atommass {{ atom.mass }}</h1>
    <h2 id="targetdistance"></h2>
    <canvas
        @click="startGame"
        width="1536"
        height="600"
        ref="canvasmini"
    ></canvas>
</template>


<script setup>
const props = defineProps({
    atom: Object,
    minigame: Object,
});

import { useForm } from "@inertiajs/inertia-vue3";
import ClipartCannon from "@/../images/cannon.png";
import ClipartTarget from "@/../images/target.png";
import ClipartJungle from "@/../images/mountains.png";

import { ref, onMounted } from "vue";
let angle = -(Math.PI / 4);
const canvasmini = ref(null);
let isAnimating = false;
let hasStarted = false;

// let score = props.minigame.score;
let score = 0;
const form = useForm({ user_id: props.minigame, score: score });

function startGame() {
    if (hasStarted == false) {
        loadGame();
        hasStarted = true;
    }
}

// onMounted(animate);

function loadGame() {
    const ctx = canvasmini.value.getContext("2d");
    isAnimating = true;
    class Atom {
        constructor(angle, x, y) {
            this.radius = 15;
            this.mass = props.atom.mass;
            this.angle = angle;
            this.x = x;
            this.y = y;
            this.k = 900;
            this.v = Math.log(this.k * Math.sqrt(1 / this.mass) + 1);
            this.dx = Math.cos(angle) * this.v;
            this.dy = Math.sin(angle) * this.v;
            this.gravity = 0.05;
            this.elastic = 0.5;
            this.touchedFloor = false;
            this.touchedTarget = false;
            this.stoppedMoving = false;
        }

        move() {
            if (this.y + this.gravity < 580) {
                this.dy += this.gravity;
            }

            this.x += this.dx;
            this.y += this.dy;

            if (this.touchedFloor && this.dx == 0) {
                isAnimating = false;
                console.log(this.x);
            }
        }

        draw() {
            ctx.fillStyle = "black";
            ctx.beginPath();
            ctx.arc(this.x + 20, this.y + 5, this.radius, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    class Target {
        constructor(x, y) {
            this.x = x;
            this.y = y;
        }

        stand() {
            ctx.beginPath();
            ctx.moveTo(this.x, this.y);

            ctx.lineTo(this.x + 15, this.y - 50);
            ctx.lineTo(this.x + 30, this.y);
            ctx.lineWidth = 5;
            ctx.strokeStyle = "grey";
            ctx.stroke();
        }

        draw() {
            this.stand();
            ctx.save();
            ctx.drawImage(targetBody, this.x - 25, this.y - 100, 80, 80);
        }
    }

    class Catapult {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.topX = x - 100;
            this.topY = y - 75;
        }

        draw() {
            ctx.drawImage(catapultBody, this.topX, this.topY, 200, 150);
        }
    }

    canvasmini.value.style.width = "1536px";
    canvasmini.value.style.height = "600px";

    let canShoot = true;
    let canvasWallWidth = 1536 - 20;

    let min = Math.ceil(200);
    let max = Math.floor(canvasWallWidth - 20);
    let randomPos = Math.floor(Math.random() * (max - min + 1)) + min;
    document.getElementById("targetdistance").innerHTML = randomPos;
    let target = new Target(randomPos, 580);
    let catapult = new Catapult(150, 580);

    let atoms = [];

    let catapultBody = new Image();
    catapultBody.src = ClipartCannon;

    let targetBody = new Image();
    targetBody.src = ClipartTarget;

    let background = new Image();
    background.src = ClipartJungle;

    animate();

    function drawBorder() {
        ctx.fillStyle = "#666666";
        ctx.fillRect(0, 0, canvasmini.value.width, canvasmini.value.height);
        ctx.drawImage(
            background,
            5,
            5,
            canvasmini.value.width - 10,
            canvasmini.value.height - 10
        );
    }

    function particleHitsTarget(particle) {
        if (
            particle.x + particle.radius > randomPos - 5 &&
            particle.x - particle.radius < randomPos + 5 &&
            particle.y + particle.radius > 540 &&
            particle.y - particle.radius < 560
        ) {
            console.log("Hit!");
            if (particle.touchedTarget == false) {
                console.log("Target hit!");
                particle.touchedTarget = true;
                score++;
                //form.submit();
            }
        }
    }

    function particleHitsWall(particle) {
        if (
            particle.x + particle.radius > canvasWallWidth ||
            particle.x - particle.radius < 20 ||
            particle.y + particle.radius > 580 ||
            particle.y - particle.radius < 20
        ) {
            particle.touchedFloor = true;

            particle.dy = Math.floor(particle.dy * particle.elastic);
            particle.dx = Math.floor(particle.dx * particle.elastic);

            if (particle.x + particle.radius > canvasWallWidth) {
                particle.x = canvasWallWidth - particle.radius;
                particle.dx *= -1;
            } else if (particle.x + particle.radius < 20) {
                particle.x = 20 + particle.radius;
                particle.dx *= -1;
            } else if (particle.y + particle.radius > 580) {
                particle.y = 580 - particle.radius;
                particle.dy *= -1;
            } else if (particle.y + particle.radius < 20) {
                particle.y = 20 + particle.radius;
                particle.dy *= -1;
            }
        }
    }

    canvasmini.value.addEventListener("click", (e) => {
        if (canShoot) {
            atoms.push(new Atom(angle, catapult.x + 50, catapult.topY));
            canShoot = false;
            setTimeout(() => {
                canShoot = true;
            }, 1000);
        }
    });

    function animate() {
        if (isAnimating) {
            requestAnimationFrame(animate);

            drawBorder();
            catapult.draw();

            target.draw();

            atoms.forEach((particle) => {
                particle.move();
                particleHitsWall(particle);
                particleHitsTarget(particle);
                particle.draw(ctx);
            });
        }
    }

    animate();
}

// OUTTAKES:

//this.wheels();
//ctx.save();
//this.rotateTop();
// wheels() {
//     ctx.beginPath();
//     ctx.moveTo(this.x, this.y);

//     ctx.arc(this.x - 50, this.y - 20, 25, 0, 2 * Math.PI, false);
//     ctx.fillStyle = "black";
//     ctx.fill();
//     ctx.lineWidth = 5;
//     ctx.strokeStyle = "grey";
//     ctx.stroke();
// }

/*
    rotateTop(){
        if(mousePos) {
            angle = Math.atan2(mousePos.y -
                (this.y-50), mousePos.x -
                    (this.x));
                    ctx.translate((this.x),(this.y));
                    ctx.rotate(angle);
                    ctx.translate(-(this.x),-(this.y));
        }
    }
    */

//let mousePos = null;

// ctx.clearRect(0, 0, canvasmini.value.width, canvasmini.value.height);
/*
canvas.addEventListener("mousemove", e=>{

    mousePos = {
        x: e.clientX - canvas.offsetLeft,
        y: e.clientY - canvas.offsetTop

    }
})
*/

// function drawBackground() {
//     ctx.drawImage(background, 0, 0, canvasmini.value.width, canvasmini.value.height);
// }

//     function renderImages() {
//         if (--imgCount > 0) {
//             return;
//         }
// animate();
//     }

//https://www.youtube.com/watch?v=Zdicf60eNzA
//https://www.pngwing.com/en/free-png-tmjgw
</script>


