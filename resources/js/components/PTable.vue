<template>
    <div class="ptable grid gap-1">
        <PTableCell :data="data[1]" />
        <PTableCell :data="data[2]" class="start-18"/>

        <PTableCell :data="data[3]" />
        <PTableCell :data="data[4]" />
        <PTableCell :data="data[5]" class="start-13"/>
        <PTableCell :data="data[5 + index]" v-for="index in 5" :key="index" />

        <PTableCell :data="data[11]" />
        <PTableCell :data="data[12]" />
        <PTableCell :data="data[13]" class="start-13"/>
        <PTableCell :data="data[13 + index]" v-for="index in 5" :key="index" />


        <PTableCell :data="data[18 + index]" v-for="index in 18" :key="index" />
        <PTableCell :data="data[36 + index]" v-for="index in 18" :key="index" />

        <PTableCell :data="data[55]" />
        <PTableCell :data="data[56]" />
        <PTableCell :data="data[72]" class="start-4"/>
        <PTableCell :data="data[72 + index]" v-for="index in 14" :key="index" />

        <PTableCell :data="data[87]" />
        <PTableCell :data="data[88]" />
        <PTableCell :data="data[104]" class="start-4"/>
        <PTableCell :data="data[104 + index]" v-for="index in 14" :key="index" />

        <div class="h-8" v-for="index in 18" :key="index"></div>

        <PTableCell :data="data[57]" class="start-4"/>
        <PTableCell :data="data[57 + index]" v-for="index in 14" :key="index" />

        <PTableCell :data="data[89]" class="start-4"/>
        <PTableCell :data="data[89 + index]" v-for="index in 14" :key="index" />

        <div class="bg-blue-500 spacer"></div>
    </div>
</template>

<script setup>
import PTableCell from '@/components/PTableCell.vue';

let data = {};
for (let i = 1; i < 119; i++) {
    data[i] = {
        id: i,
        order: i,
        symbol: "S",
        name: "Name"
    };
}
console.log(data);

</script>

<style>
.ptable {
    grid-template-columns: repeat(18, 56px);
    width: calc(18 * 60px - 4px);
}

.start-4 {
    grid-column-start: 4;
}

.start-13 {
    grid-column-start: 13;
}

.start-18 {
    grid-column-start: 18;
}

.row-jump {
    grid-row-start: 9;
}

.spacer {
    grid-row-start: 6;
    grid-column-start: 3;
    grid-row-end: 11;
    grid-column-end: 4;
}
</style>
