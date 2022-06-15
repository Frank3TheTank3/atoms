<template>
    <Link
        :href="route('atoms.show', { id: data?.id })"
        class="flex flex-col bg-red-400"
    >
        <div class="text-xs">{{ data?.order }}</div>
        <div class="text-xl font-black">{{ data?.symbol }}</div>
        <div class="text-xs">{{ data?.name }}</div>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    data: Object,
});
</script>
