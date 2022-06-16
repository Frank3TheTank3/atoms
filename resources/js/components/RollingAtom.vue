<template>
    <div id="myContainer" class="h-3 w-full relative bg-black">
        <div class="rotateR w-12 h-12 absolute bottom-3" id="myAnim">
            <ClipartAtomic></ClipartAtomic>
        </div>
    </div>
</template>

<script setup>
import ClipartAtomic from "@/components/icons/ClipartAtomic.vue";

let id = null;

function myMove() {
    let movingLeft = true;
    let pos = 0;
    clearInterval(id);
    id = setInterval(frame, 2);

    function frame() {
        let width = document.getElementById("myContainer").clientWidth - 50;
        let elem = document.getElementById("myAnim");

        if (movingLeft) {
            pos++;
        }

        if (!movingLeft) {
            pos--;
        }

        elem.style.left = pos + "px";

        if (pos >= width && movingLeft) {
            movingLeft = false;
            elem.classList.replace("rotateR", "rotateL");
        }

        if (pos <= 0 && movingLeft == false) {
            movingLeft = true;
            elem.classList.replace("rotateL", "rotateR");
        }
    }
}

myMove();
</script>

<style scoped>
.rotateR {
    animation: rotationR 2s linear infinite;
}

.rotateL {
    animation: rotationL 2s linear infinite;
}

@keyframes rotationR {
    from {
        transform: rotateZ(0deg);
    }
    to {
        transform: rotateZ(360deg);
    }
}

@keyframes rotationL {
    from {
        transform: rotateZ(360deg);
    }
    to {
        transform: rotateZ(0deg);
    }
}
</style>
