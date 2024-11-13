<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

    

        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-base font-semibold text-gray-900">Update your student profile</h3>

                <form class="mt-2 py-6" @submit.prevent="submit">
                    <!-- Name Field -->
                    <div class="w-full sm:max-w-xs">
                        <InputLabel for="name" value="Name" />
                        <TextInput
                            id="name"
                            v-model="form.name"
                            type="text"
                            class="mt-1 block w-full"
                            autocomplete="name"
                        />
                        <InputError :message="form.errors.name" class="mt-2" />
                    </div>

                    <!-- Class Field -->
                    <div class="w-full sm:max-w-xs mt-4">
                        <InputLabel for="class" value="Class" />
                        <TextInput
                            id="class"
                            v-model="form.class"
                            type="text"
                            class="mt-1 block w-full"
                            autocomplete="class"
                        />
                        <InputError :message="form.errors.class" class="mt-2" />
                    </div>

                    <!-- Email Field -->
                    <div class="w-full sm:max-w-xs mt-4">
                        <InputLabel for="email" value="Email" />
                        <TextInput
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="mt-1 block w-full"
                            autocomplete="email"
                        />
                        <InputError :message="form.errors.email" class="mt-2" />
                    </div>

                    <!-- Grade Field -->
                    <div class="w-full sm:max-w-xs mt-4">
                        <InputLabel for="grade" value="Grade" />
                        <TextInput
                            id="grade"
                            v-model="form.grade"
                            type="text"
                            class="mt-1 block w-full"
                            autocomplete="grade"
                        />
                        <InputError :message="form.errors.grade" class="mt-2" />
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="mt-3 inline-flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:ml-3 sm:mt-0 sm:w-auto">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';

// Get the page properties and define props
const props = defineProps({
    student: Object,
});

// Initialize form with student data
const form = useForm({
    name: props.student.name,
    class: props.student.class,
    email: props.student.email,
    grade: props.student.grade,
});

// Define the submit function to update student data
const submit = () => {
    form.put(route('student.update', props.student.id));
};
</script>
