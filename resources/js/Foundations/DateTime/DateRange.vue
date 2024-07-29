<script setup>

import DateField from "./DateField";
import { watch } from "vue";

const emit     = defineEmits(['update:modelValue']);

defineProps({
    modelValue: {
        type: Array
    },
    from: fromDate,
    to: toDate,
});

watch(filters, () => {
    emit('update:modelValue', filters)
});
</script>

<template>
    <v-container>
        <v-row dense>
            <v-col>
                <DateField
                    label="from"
                    v-model="fromDate"
                    color="default"
                ></DateField>
            </v-col>
            <v-col>
                <DateField
                    label="to"
                    v-model="toDate"
                    color="default"
                ></DateField>
            </v-col>
        </v-row>
    </v-container>
</template>

<style scoped>

</style>
