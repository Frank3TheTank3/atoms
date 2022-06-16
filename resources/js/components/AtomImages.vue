<template>
    <div class="rounded-xl bg-gray-card h-48">
        Got {{ Object.keys(images).length }} pics
    </div>
</template>

<script setup>
defineProps({
    images: Object,
});
</script>
