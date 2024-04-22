<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import UpdateCustomer from "@/Pages/Customer/Partials/UpdateCustomer.vue";
import DeleteCustomer from "@/Pages/Customer/Partials/DeleteCustomer.vue";
</script>

<template>
    <Head title="Profile" />

    <GuestLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateCustomer class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteCustomer class="max-w-xl" />
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
