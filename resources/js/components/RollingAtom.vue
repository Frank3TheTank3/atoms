<template>
    <div
        ref="myContainer"
        id="myContainer"
        class="h-3 w-full relative bg-black"
    >
        <div
            class="rotateR w-12 h-12 absolute bottom-3"
            ref="myAnim"
            id="myAnim"
        >
            <ClipartAtomic></ClipartAtomic>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import ClipartAtomic from "@/components/icons/ClipartAtomic.vue";
const myContainer = ref(null);
const myAnim = ref(null);

let id = null;

function myMove() {
    let movingLeft = true;
    let pos = 0;
    clearInterval(id);
    id = setInterval(frame, 2);

    function frame() {
        let width = myContainer.value.clientWidth - 50;

        if (movingLeft) {
            pos++;
        }
        if (!movingLeft) {
            pos--;
        }

        if (myAnim.value != null) {
            myAnim.value.style.left = pos + "px";
        }

        if (pos >= width && movingLeft) {
            movingLeft = false;
            myAnim.value.classList.replace("rotateR", "rotateL");
        }
        if (pos <= 0 && movingLeft == false) {
            movingLeft = true;
            myAnim.value.classList.replace("rotateL", "rotateR");
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
