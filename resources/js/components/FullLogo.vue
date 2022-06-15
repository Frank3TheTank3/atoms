<template>
    <Link href="/" class="flex items-center">
        <AppLogo class="w-16 h-16"></AppLogo>
        <div class="text-yellow">Atoms</div>
    </Link>
</template>

<script setup>
import AppLogo from "@/components/icons/Logo.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>
