<script setup>
import {VCombobox, VChip} from "vuetify/components";
import {ref} from "vue";

defineProps(['items'])

const chips = ref([]);

function remove(item) {
    this.chips.splice(this.chips.indexOf((item), 1));
}
</script>

<template>
    <v-combobox
        v-model="chips"
        :items="items"
        label="Email type"
        variant="outlined"
        density="compact"
        chips
        clearable
        multiple
    >
    </v-combobox>
</template>

<style scoped>

</style>
