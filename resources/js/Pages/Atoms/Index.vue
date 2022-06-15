<template>
    <AppLayout title="Welcome">
        <template #top>
            <div class="flex items-center justify-center h-screen">
                <PTable :atoms="atoms"></PTable>
            </div>
        </template>
    </AppLayout>
</template>

<script setup>
import { Head, Link, usePage } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import PTable from "@/components/PTable.vue";
import { computed } from "vue";

const atoms = computed(get => usePage().props.value.atoms);
</script>

<style>
</style>
