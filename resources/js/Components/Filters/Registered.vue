<script setup>
import DateRange from "../../Foundations/DateTime/DateRange";

const dateRange = defineModel();
</script>

<template>
    <h5>Registered</h5>
    <DateRange
        v-model="dateRange"
    />
</template>
<style>
</style>
