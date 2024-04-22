<script setup>

import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ListCustomers from "@/Pages/Customer/Partials/ListCustomers.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>

<template>
    <Head title="Customer" />
    <GuestLayout>
        <PrimaryButton class="my-8">Create</PrimaryButton>
        <ListCustomers />
    </GuestLayout>
</template>

<style scoped>

</style>
