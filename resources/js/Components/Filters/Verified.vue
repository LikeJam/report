<script setup>
import DateField from "../../Foundations/DateTime/DateField.vue";
import {reactive, ref, watch} from "vue";

const modelValue      = defineProps(['modelValue']);
const emit            = defineEmits(['update:modelValue']);
const filters = reactive({
    verified: {
        from: '',
        to: '',
    }
});

watch(
    filters,
    () => {
        emit('update:modelValue', filters)
    },
    { deep: true }
);

</script>

<template>
    <h5>Verified</h5>
    <v-container>
        <v-row dense>
            <v-col>
                <DateField
                    label="from"
                    v-model="filters.verified.from"
                    color="default"
                ></DateField>
            </v-col>
            <v-col>
                <DateField
                    label="to"
                    v-model="filters.verified.to"
                    color="default"
                ></DateField>
            </v-col>
        </v-row>
    </v-container>
</template>

<style scoped>

</style>
