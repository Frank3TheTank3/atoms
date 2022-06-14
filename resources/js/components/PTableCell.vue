<template>
    <Link :href="route('atoms.show', { id: data?.id })" class="flex flex-col w-14 h-14 bg-red-400">
    <div class="text-xs">{{ data?.order }}</div>
    <div class="text-sm">{{ data?.symbol }}</div>
    <div class="text-xs">{{ data?.name }}</div>
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    data: Object
});
</script>
