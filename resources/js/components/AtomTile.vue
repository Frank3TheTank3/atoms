<template>
    <div class="rounded-xl bg-lime-400">Atom: {{ atom.name }}</div>
</template>

<script setup>
defineProps({
    atom: Object,
});
</script>
