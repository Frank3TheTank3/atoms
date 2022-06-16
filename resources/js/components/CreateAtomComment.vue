<template>
    <div class="rounded-xl bg-gray-card p-5 flex flex-col">
        <div>Comment on atom with order {{ atom.order }}:</div>
        <textarea rows="4" name="" id="" class="w-full" />
        <div class="bg-green-500 w-1/2 self-center">SEND</div>
    </div>
</template>

<script setup>
defineProps({
    atom: Object,
});
</script>
