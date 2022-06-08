<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed sm:flex justify-end top-0 w-full">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-white underline">
                Dashboard
            </Link>

            <template v-else>
                <div class="w-full flex bg-slate-600 ">
                    <div class="text-white">Logo</div>
                    <Link :href="route('login')" class="text-sm text-yellow-300 underline">
                        Log in
                    </Link>

                    <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-yellow-300 underline">
                        Register
                    </Link>
                </div>
            </template>
        </div>

        <div class="max-w-6xl mx-auto mt-20 sm:px-6 lg:px-8">
            content
        </div>

        <div class="bg-slate-700 w-full text-yellow-300 mt-auto">
            footer
        </div>
    </div>
</template>

<style scoped>
</style>
