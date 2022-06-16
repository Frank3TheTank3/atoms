<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import RollingAtom from "@/components/RollingAtom.vue";
// import ClipartBooks from "@/components/icons/ClipartBooks.vue";
import ClipartCatapult from "@/components/icons/ClipartCatapult.vue";
import ClipartRadioactive from "@/components/icons/ClipartRadioactive.vue";
import ClipartAtomic from "@/components/icons/ClipartAtomic.vue";
import ClipartAtomlady from "@/components/icons/ClipartAtomlady.vue";
import ClipartStars from "@/components/icons/ClipartStars.vue";

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
                <div class="flex justify-start items-center p-24 h-screen">
                    <div class="flex flex-col items-center">
                        <div class="text-yellow text-3xl">Welcome to Atoms</div>
                        <div class="text-yellow text-3xl">
                            An interactive online experience
                        </div>
                        <Link
                            :href="route('atoms.index')"
                            class="h20 w-36 bg-green-submit rounded-lg text-center p-3 mt-4 font-bold hover:bg-green-200 hover:scale-110 ease-in duration-300"
                        >
                            GET STARTED
                        </Link>
                    </div>
                </div>
        </template>

        <template #bottom>
            <RollingAtom class=""></RollingAtom>
            <div class="flex flex-col items-center text-white pb-24">
                <div class="grid grid-cols-2 w-4/5 gap-8 m-8">
                    <div class="flex items-center gap-5 bg-gray-card rounded-xl p-5">
                        <!-- <ClipartBooks></ClipartBooks> -->
                        Read about the enviroments the Atoms are found in
                    </div>
                    <div class="flex items-center gap-5 bg-gray-card rounded-xl p-5">
                        <ClipartCatapult class="h-24 w-24"></ClipartCatapult>
                        Learn about Atoms and play with them
                    </div>
                    <div class="flex items-center gap-5 bg-gray-card rounded-xl p-5">
                        <ClipartRadioactive class="h-24 w-24"></ClipartRadioactive>
                        Comment on your favorite Atoms
                    </div>
                    <div class="flex items-center gap-5 bg-gray-card rounded-xl p-5">
                        <ClipartAtomic class="h-24 w-24"></ClipartAtomic>
                        Reigister and win great prizes
                    </div>
                </div>
                <div class="flex justify-start items-center gap-5 w-full ml-20">
                    <ClipartAtomlady class="h-36 w-36"></ClipartAtomlady>
                    <div class="bg-gray-card rounded-xl p-5">
                        Get a feeling for how atoms interact with the world we
                        live in
                    </div>
                </div>
                <div class="flex justify-end items-center gap-5 w-full mr-20">
                    <div class="bg-gray-card rounded-xl p-5">
                        Discover new phenomena that you never seen before
                    </div>
                    <ClipartStars class="h-36 w-36"></ClipartStars>
                </div>
            </div>
        </template>
    </AppLayout>
</template>

<style scoped>
</style>
