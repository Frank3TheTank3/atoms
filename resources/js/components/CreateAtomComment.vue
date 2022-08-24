<template>
    <div class="rounded-xl bg-gray-comment p-5 flex flex-col gap-3">
        <div class="text-xl">Comment on {{ atom.name }}:</div>
        <textarea rows="8" name="" id="" class="w-full rounded-lg" />
        <div class="bg-green-500 w-1/4 self-center font-bold text-center rounded-lg hover:bg-green-200 p-3">SEND</div>
    </div>
</template>

<script setup>
defineProps({
    atom: Object,
});
</script>
