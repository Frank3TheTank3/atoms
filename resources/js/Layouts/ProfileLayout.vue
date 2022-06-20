<template>
    <BaseLayout :title="title">
        <template #main>
            <div class="bg-black py-20">
                <slot />
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
