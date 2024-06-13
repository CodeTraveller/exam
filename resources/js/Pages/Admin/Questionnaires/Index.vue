<script setup>
import AuthenticatedLayout from '@/Layouts/Admin/AuthenticatedLayout.vue';
import { Head, Link, router, useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { defineProps } from 'vue';  // Correct way to use defineProps

const props = defineProps({
    activeQuestionnaires: {
        type: Object,
    },
});

const form = useForm({});

function changePage(url) {
    if (url) {
        router.get(url, '', {
            preserveState: true,
            replace: true
        });
    }
}
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Active Questionnaires</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <Link :href="route('admin.questionnaires.create')"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Add New
                    </Link>

                    <div class="overflow-x-auto bg-white rounded-lg shadow-md p-4">
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">
                            Email is being sent in background.</p>
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                <tr v-if="activeQuestionnaires.data.length == 0">
                                    <td colspan="3" class="py-3 px-6 text-center">No result found.</td>
                                </tr>
                                <tr v-else v-for="questionnaire in activeQuestionnaires.data" :key="questionnaire.id"
                                    class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">{{ questionnaire.id }}</td>
                                    <td class="py-3 px-6 text-left">{{ questionnaire.title }}</td>
                                    <td class="py-3 px-6 text-left">
                                        <form
                                            @submit.prevent="form.post(route('admin.questionnaires.send-email', questionnaire.id))"
                                            class="mt-6 space-y-6">

                                            <div class="flex items-center gap-4">
                                                <PrimaryButton :disabled="form.processing">Email
                                                    Students</PrimaryButton>
                                            </div>
                                        </form>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div v-if="activeQuestionnaires.data.length > 0" class="flex justify-between mt-4">
                            <button @click="changePage(activeQuestionnaires.prev_page_url)"
                                :disabled="!activeQuestionnaires.prev_page_url"
                                class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 disabled:opacity-50 disabled:cursor-not-allowed">
                                Previous
                            </button>
                            <button @click="changePage(activeQuestionnaires.next_page_url)"
                                :disabled="!activeQuestionnaires.next_page_url"
                                class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 disabled:opacity-50 disabled:cursor-not-allowed">
                                Next
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
