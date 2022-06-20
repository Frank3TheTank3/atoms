<template>
    <div class="flex rounded-xl bg-gray-comment w-5/6 p-3">
        <div class="flex flex-col w-64 gap-2">
            <div
                class="
                    flex
                    items-center
                    justify-center
                    h-12
                    w-12
                    rounded-full
                    bg-white
                    text-4xl
                    font-black
                "
            >
                <div>{{ comment.name.charAt(0).toUpperCase() }}</div>
            </div>
            <div class="text-xl font-semibold">{{ comment.name }}</div>
        </div>
        <div class="bg-white w-full rounded-xl p-3">{{ comment.content }}</div>
    </div>
</template>

<script setup>
defineProps({
    comment: Object,
});
</script>
