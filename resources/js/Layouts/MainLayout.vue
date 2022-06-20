<template>
    <BaseLayout :title="title">
        <template #main>
            <div class="bg-image-header min-h-screen">
                <slot name="top" />
            </div>
            <div class="bg-gray-main">
                <slot name="bottom" />
            </div>
        </template>
    </BaseLayout>
</template>

<script setup>
import BaseLayout from "@/Layouts/BaseLayout.vue";

defineProps({
    title : String
});
</script>
