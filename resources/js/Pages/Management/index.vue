<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Management" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Management</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex flex-wrap justify-center gap-4 text-center sm:py-20">
                        <Link :href="route('inventory')" class="bg-red-500 p-4 rounded-md shadow-md w-96 h-64">
                            <div class="text-lg font-bold mb-2">Inventory Management</div>
                            <div class="text-gray-700">Content of card 1 goes here...</div>
                        </Link>
                        <div class="bg-yellow-500 p-4 rounded-md shadow-md w-96 h-64">
                            <div class="text-lg font-bold mb-2">Order Management</div>
                            <div class="text-gray-700">Content of card 2 goes here...</div>
                        </div>
                        <div class="bg-blue-500 p-4 rounded-md shadow-md w-96 h-64">
                            <div class="text-lg font-bold mb-2">Supplier Management</div>
                            <div class="text-gray-700">Content of card 3 goes here...</div>
                        </div>
                        <div class="bg-green-500 p-4 rounded-md shadow-md w-96 h-64">
                            <div class="text-lg font-bold mb-2">Reporting and Analytics</div>
                            <div class="text-gray-700">Content of card 4 goes here...</div>
                        </div>
                        <div class="bg-purple-500 p-4 rounded-md shadow-md w-96 h-64">
                            <div class="text-lg font-bold mb-2">Alerts and Notifications</div>
                            <div class="text-gray-700">Content of card 5 goes here...</div>
                        </div>
                        <div class="bg-orange-500 p-4 rounded-md shadow-md w-96 h-64">
                            <div class="text-lg font-bold mb-2">Card 6</div>
                            <div class="text-gray-700">Content of card 6 goes here...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>