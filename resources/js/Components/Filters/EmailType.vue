<script setup>

import Chips from "../../Foundations/ComboBox/Chips.vue";
</script>

<template>
    <h5>Email types</h5>
    <v-container>
        <v-row>
            <v-col class="pa-0">
                <Chips :items="['example.org', 'example.net']" />
            </v-col>
        </v-row>
    </v-container>
</template>

<style scoped>

</style>
