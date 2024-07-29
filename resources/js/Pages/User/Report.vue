<script setup>
import Layout from "../../Layouts/Layout";
import {VRow, VCol, VDataTable, VBtn, VContainer} from "vuetify/components";
import FiltersCard from "../../Components/FiltersCard";
import SearchForm from "../../Components/SearchForm";
import {onMounted, ref} from "vue";
import { userApi } from "../../api/user.api";
import { filterApi } from "../../api/filter.api";

const users          = ref([]);
const filters        = ref([]);
const appliedFilters = ref([]);
const searchQuery    = defineModel('searchQuery');
const filtersQuery   = defineModel('filtersQuery');

onMounted(() => {
    userApi.query({})
        .then(function (response) {
            users.value = response.data;
        });
    filterApi.filters()
        .then(function (response) {
            filters.value        = response.data.filters;
            appliedFilters.value = response.data.appliedFilters;
        });
});

function applyQuery() {
    userApi.query({search: searchQuery.value, filters: filtersQuery.value})
        .then((response) => {users.value = response.data});
}

</script>

<template>
    <Layout>
        <div class="container">
            <v-container fluid>
                <v-row>
                    <v-col cols="12" md="3">
                        <v-row>
                            <v-col>
                                <FiltersCard
                                    v-model="filtersQuery"
                                    :filters="filters"
                                    :appliedFilters="appliedFilters"
                                    @apply="applyQuery"
                                />
                            </v-col>
                        </v-row>
                    </v-col>
                    <v-col cols="12" md="9">
                        <v-row>
                            <v-col cols="12" md="4" offset="6">
                                <SearchForm
                                    v-model="searchQuery"
                                    @search="applyQuery"
                                ></SearchForm>
                            </v-col>
                            <v-col cols="12" md="2">
                                <v-btn
                                    color="success"
                                    @click=""
                                >
                                    Export
                                </v-btn>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-data-table
                                :items="users"
                            ></v-data-table>
                        </v-row>
                    </v-col>
                </v-row>
            </v-container>
        </div>
    </Layout>
</template>

<style scoped>
.container {
    max-width: 1400px;
    width: 100%;
    border-radius: 5px;
    background-color: #f1f1f1;;
}
</style>
