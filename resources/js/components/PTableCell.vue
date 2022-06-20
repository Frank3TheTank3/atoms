<template>
    <Link
        :href="route('atoms.show', { id: data?.id })"
        class="flex flex-col" :class="bgColor"
    >
        <div class="text-xs">{{ data?.order }}</div>
        <div class="text-xl font-black">{{ data?.symbol }}</div>
        <div class="text-xs">{{ data?.name }}</div>
    </Link>
</template>

<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    data: Object,
});

const bgColor = computed(() => ({
    'bg-atom-alkali': props.data.series === 'alkali_metals',
    'bg-atom-alkali-earth': props.data.series === 'alkaline_earth_metals',
    'bg-atom-lanthanoids': props.data.series === 'lanthanoids',
    'bg-atom-actinoids': props.data.series === 'actinoids',
    'bg-atom-transition': props.data.series === 'transition_metals',
    'bg-atom-post-transition': props.data.series === 'post-transition_metals',
    'bg-atom-metalloids': props.data.series === 'metalloids',
    'bg-atom-reactive-non': props.data.series === 'reactive_nonmetals',
    'bg-atom-noble': props.data.series === 'noble_gasses',
    'bg-atom-undef': props.data.series === null
}))
</script>
