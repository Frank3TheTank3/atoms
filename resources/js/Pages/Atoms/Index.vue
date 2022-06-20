<template>
    <MainLayout title="Atoms">
        <template #top>
            <div class="flex items-center justify-center h-screen">
                <PTable :atoms="atoms"></PTable>
            </div>
        </template>
    </MainLayout>
</template>

<script setup>
import { Head, Link, usePage } from "@inertiajs/inertia-vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import PTable from "@/components/PTable.vue";
import { computed } from "vue";

const atoms = computed(get => usePage().props.value.atoms);
</script>

<style>
</style>
