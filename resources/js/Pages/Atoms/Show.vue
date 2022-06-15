<template>
    <MainLayout :title="atom.name">
        <template #top>
            <div class="flex items-center justify-start h-screen ml-72">
                <div class="flex gap-8">
                    <AtomTile :atom="atom" class="w-64 h-64"></AtomTile>
                    <AtomInfo :atom="atom" class="w-64 h-64"></AtomInfo>
                </div>
            </div>
        </template>
        <template #bottom>
            <MiniGame :atom="atom" :minigame="minigame"></MiniGame>
            <div class="flex flex-col items-center pb-24 gap-8 pt-8">
                <div class="flex w-5/6 gap-5">
                    <AtomFacts :facts="facts" class="w-2/3"></AtomFacts>
                    <AtomImages :images="images" class="w-1/3"></AtomImages>
                </div>
                <AtomComment
                    v-for="comment in comments"
                    :key="comment"
                    :comment="comment"
                ></AtomComment>
                <CreateAtomComment
                    :atom="atom"
                    class="w-5/6 h-48 p-5"
                ></CreateAtomComment>
            </div>
        </template>
    </MainLayout>
</template>

<script setup>
import { Head, Link, usePage } from "@inertiajs/inertia-vue3";
import { computed } from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import AtomFacts from "@/components/AtomFacts.vue";
import AtomImages from "@/components/AtomImages.vue";
import AtomComment from "@/components/AtomComment.vue";
import AtomTile from "@/components/AtomTile.vue";
import AtomInfo from "@/components/AtomInfo.vue";
import CreateAtomComment from "@/components/CreateAtomComment.vue";
import MiniGame from "@/components/MiniGame.vue";

const atom = computed((get) => usePage().props.value.atom);
const facts = computed((get) => usePage().props.value.facts);
const images = computed((get) => usePage().props.value.images);
const comments = computed((get) => usePage().props.value.comments);
const minigame = computed(get => usePage().props.value.minigame);
</script>

<style>
</style>
