<template>
    <div class="rounded-xl bg-stone-400">mass: {{ atom.mass }}</div>
</template>

<script setup>
defineProps({
    atom: Object,
});
</script>
