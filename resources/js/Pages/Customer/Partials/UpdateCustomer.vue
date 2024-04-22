<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import SecondaryButton from "@/Components/SecondaryButton.vue";
import DangerButton from "@/Components/DangerButton.vue";

defineProps({
    nationality: {
        type: Object,
    },
});

const form = useForm({
    name: '',
    dob: '',
    nationality: '',
    family: [
        {
            name: '',
            dob: ''
        },
    ],
});

const addFamily = () => {
    form.family.push({
        name: '',
        dob: '',
    })
}

const deleteFamily = (index) => {
    form.family.splice(index, 1);
}
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Edit Customer</h2>

            <p class="mt-1 text-sm text-gray-600">
                Edit your customers profile information and email address.
            </p>
        </header>

        <form @submit.prevent="form.post(route('customer.store'))" class="mt-6 space-y-6">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="dob" value="Tanggal Lahir" />

                <TextInput
                    id="dob"
                    type="date"
                    class="mt-1 block w-full"
                    v-model="form.dob"
                    required
                    autocomplete="dob"
                />

                <InputError class="mt-2" :message="form.errors.dob" />
            </div>

            <div>
                <InputLabel for="nationality" value="Kewarganegaraan" />

                <select v-model="form.nationality" id="countries" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>

            <div class="max-w-lg mx-auto">
                <div class="flex justify-between items-center">
                    <InputLabel for="Keluarga" value="Keluarga" />
                    <SecondaryButton @click="addFamily">Tambah Keluarga</SecondaryButton>
                </div>

                <div v-for="(family, index) in form.family" class="grid gap-6 space-x-6 my-6 md:grid-cols-3">
                    <div class="">
                        <InputLabel for="familyName" value="Name" />
                        <TextInput
                            id="familyName"
                            type="text"
                            class="mt-1 block "
                            v-model="family.name"
                            required
                            autocomplete="family-name"
                        />
                    </div>

                    <div class="">
                        <InputLabel for="familyDOB" value="DOB" />
                        <TextInput
                            id="familyDOB"
                            type="date"
                            class="mt-1 block "
                            v-model="family.dob"
                            required
                            autocomplete="family-dob"
                        />
                    </div>

                    <div class="mt-7">
                        <DangerButton @click="deleteFamily(index)">Hapus</DangerButton>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 mt-4">
                <PrimaryButton class="w-full justify-center" :disabled="form.processing">Save</PrimaryButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>
