<template>
    <div class="flex flex-col rounded-xl p-3 justify-between" :class="bgColor">
        <div class="text-2xl">{{ atom.order }}</div>
        <div class="self-center">
            <div class="text-8xl">{{ atom.symbol }}</div>
            <div class="text-2xl">{{ atom.name }}</div>
        </div>
        <div class="text-2xl text-white font-black self-end">{{ atom.mass }}</div>
    </div>
</template>

<script setup>
import { computed } from "vue";

const props = defineProps({
    atom: Object,
});

const bgColor = computed(() => ({
    'bg-atom-alkali': props.atom.series === 'alkali_metals',
    'bg-atom-alkali-earth': props.atom.series === 'alkaline_earth_metals',
    'bg-atom-lanthanoids': props.atom.series === 'lanthanoids',
    'bg-atom-actinoids': props.atom.series === 'actinoids',
    'bg-atom-transition': props.atom.series === 'transition_metals',
    'bg-atom-post-transition': props.atom.series === 'post-transition_metals',
    'bg-atom-metalloids': props.atom.series === 'metalloids',
    'bg-atom-reactive-non': props.atom.series === 'reactive_nonmetals',
    'bg-atom-noble': props.atom.series === 'noble_gasses',
    'bg-atom-undef': props.atom.series === null
}))
</script>
