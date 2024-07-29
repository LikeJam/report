<script setup>
import {VTextField} from "vuetify/components";

defineEmits(['search']);

const query = defineModel();

</script>

<template>
    <v-text-field
        v-model="query"
        density="compact"
        label="Search"
        append-inner-icon="mdi-magnify"
        variant="solo"
        hide-details
        single-line
        @input="$emit('search', $event.target.value)"
    ></v-text-field>
</template>

<style scoped>

</style>
