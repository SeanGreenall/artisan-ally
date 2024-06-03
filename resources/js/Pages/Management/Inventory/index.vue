<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import axios from 'axios';
</script>
<script>
export default {
    data(){
        return {
            info: []
        }
    },
    methods:{
        getData(){
            axios.get('/InventoryController/index').then((response) => {
                this.info = response.data;
            })
        }
    },
    mounted(){
        this.getData();
    }
}
</script>

<template>
    <Head title="Inventory" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Inventory</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <v-data-table-server :items="this.info">
                    
                    </v-data-table-server>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>