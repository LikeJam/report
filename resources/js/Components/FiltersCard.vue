<script setup>
import * as FilterComponents from './Filters';
import {ref} from "vue";

const props = defineProps({
    filters: Array,
    appliedFilters: Array,
});

const emit     = defineEmits(['apply']);
const canApply = ref(false);

const model = defineModel();

const clearFilters = () => {
}
</script>

<template>
    <v-card>
        <v-toolbar density="compact" color="white">
            <v-toolbar-title>Filters</v-toolbar-title>
            <v-menu location="bottom" :close-on-content-click="false">
                <template v-slot:activator="{ props }">
                    <v-btn
                        color="primary"
                        icon
                        v-bind="props"
                    >
                        <v-icon>mdi-filter</v-icon>
                    </v-btn>
                </template>
                <v-card class="mx-auto pa-0" max-width="300px">
                    <v-list density="compact">
                        <v-list-subheader>ADD FILTER</v-list-subheader>
                        <v-list-item v-for="filter in props.filters">
                            <v-checkbox :label="filter.label" />
                        </v-list-item>
                    </v-list>
                </v-card>
            </v-menu>
        </v-toolbar>
        <v-card-item v-for="filter in props.appliedFilters">
            <component
                :is="FilterComponents[filter]"
                v-model="model"
            />
        </v-card-item>
        <v-card-item>
            <v-container>
                <v-row align="center" justify="left">
                    <v-col cols="auto">
                        <v-btn
                            color="info"
                            :disabled="!canApply"
                            @click="emit('apply')"
                        >
                            Apply
                        </v-btn>
                    </v-col>
                    <v-col cols="auto">
                        <v-btn @click="clearFilters">Clear</v-btn>
                    </v-col>
                </v-row>
            </v-container>
        </v-card-item>
    </v-card>
</template>
