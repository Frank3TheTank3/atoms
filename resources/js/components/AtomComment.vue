<template>
    <div class="rounded-xl bg-gray-card w-5/6 h-16">
        <div>{{ comment.user_id }}</div>
        <div>{{ comment.content }}</div>
    </div>
</template>

<script setup>
defineProps({
    comment : Object
});
</script>
