<template>
    <div class="rounded-xl bg-gray-card h-48">
        Got {{ Object.keys(facts).length }} facts
    </div>
</template>

<script setup>
defineProps({
    facts: Object
});
</script>
