<template>
    <div
        class="
            flex flex-col
            bg-atom-undef
            rounded-xl
            text-xl
            items-center
            justify-center
            p-3
            font-bold
            gap-3
        "
    >
        <div class="flex flex-col items-center">
            <div>Melting point</div>
            <div class="text-2xl">{{ atom.melting_point }} K</div>
        </div>
        <div class="flex flex-col items-center">
            <div>Boiling point</div>
            <div class="text-2xl">{{ atom.boiling_point }} K</div>
        </div>
        <div class="flex flex-col items-center">
            <div>Discovered</div>
            <div class="text-2xl">{{ atom.discovered }}</div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    atom: Object,
});
</script>
