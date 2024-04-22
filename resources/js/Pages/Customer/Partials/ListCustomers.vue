<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DOB
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Test
                    </th>
                    <td class="px-6 py-4">
                        10/05/2000
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4 text-right">
                        <Link :href="route('customer.edit')" class="font-medium text-blue-600 hover:underline">Edit</Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
