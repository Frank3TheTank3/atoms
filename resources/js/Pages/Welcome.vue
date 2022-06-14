<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import RollingAtom from "@/components/RollingAtom.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <AppLayout title="Welcome">
        <template #top>
            <div class="relative top-72 left-24 w-72">
                <div class="text-yellow">
                    Welcome to Atoms An interactive online experience
                </div>
                <Link :href="route('atoms.index')" class="h20 w-36 bg-green-submit rounded-lg">
                    GET STARTED
                </Link>
            </div>
        </template>

        <template #bottom>
        <RollingAtom class=""></RollingAtom>
            <div class="flex flex-col items-center text-white pb-24">
                <div class="grid grid-cols-2 w-4/5 gap-8 m-8">
                    <div class="bg-gray-card rounded-xl p-5">
                        Read about the enviroments the Atoms are found in
                    </div>
                    <div class="bg-gray-card rounded-xl p-5">
                        Learn about Atoms and play with them
                    </div>
                    <div class="bg-gray-card rounded-xl p-5">
                        Comment on your favorite Atoms
                    </div>
                    <div class="bg-gray-card rounded-xl p-5">
                        Reigister and win great prizes
                    </div>
                </div>
                <div class="flex justify-start items-center w-full">
                    <div class="h-36 w-36 bg-blue-400">IMG</div>
                    <div class="bg-gray-card rounded-xl p-5">
                        Get a feeling for how atoms interact with the world we
                        live in
                    </div>
                </div>
                <div class="flex justify-end items-center w-full">
                    <div class="bg-gray-card rounded-xl p-5">
                        Discover new phenomena that you never seen before
                    </div>
                    <div class="h-36 w-36 bg-blue-400">IMG</div>
                </div>
            </div>
        </template>
    </AppLayout>
</template>

<style scoped>
</style>
