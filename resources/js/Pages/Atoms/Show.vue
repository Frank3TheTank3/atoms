<template>
    <AppLayout title="Welcome">
        <template #top>
            <div class="relative top-72 left-24 w-72 flex">
                <div class="w-36 h-36 rounded-xl bg-lime-400">Atom</div>
                <div class="w-36 h-36 rounded-xl bg-stone-400">GET STARTED</div>
            </div>
        </template>

        <template #bottom>
            <div class="flex flex-col items-center pb-24 gap-8 pt-8">
                <div class="flex w-5/6 gap-5">
                    <div class="rounded-xl bg-gray-card h-48 w-2/3">
                        Some data
                    </div>
                    <div class="rounded-xl bg-gray-card h-48 w-1/3">
                        Some pics
                    </div>
                </div>
                <div class="rounded-xl bg-gray-card w-5/6 h-16"></div>
                <div class="rounded-xl bg-gray-card w-5/6 h-16"></div>
                <div class="rounded-xl bg-gray-card w-5/6 h-16"></div>
                <div class="rounded-xl bg-gray-card w-5/6 h-48 p-5 flex flex-col">
                    <div>Comment:</div>
                    <textarea rows="4" name="" id="" class="w-full" />
                    <div class="bg-green-500 w-1/2 self-center">SEND</div>
                </div>
            </div>
        </template>
    </AppLayout>
</template>

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<style>
</style>
