<script setup>
import { ref } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Input from '@/Components/TextInput.vue';
import Label from '@/Components/InputLabel.vue';
import Button from '@/Components/PrimaryButton.vue';
import Checkbox from '@/Components/Checkbox.vue';
import Radio from '@/Components/RadioInput.vue';
import ValidationErrors from '@/Components/InputError.vue';
import InputError from '@/Components/InputError.vue';

const form = useForm({
    email: '',
    password: '',
});

defineProps({
    questionnaireStudentUrl: {
        type: Object,
    },
    questionnaire: {
        type: Object,
    },
    questionnaireQuestions: {
        type: Object,
    },
    student: {
        type: Object,
    },
});

const submit = () => {
    form.post(route('admin.login'));
};
</script>

<template>
    <GuestLayout>

        <Head title="Questionnaire" />

        <form @submit.prevent="submit">

            <div v-for="questionnaireQuestion in questionnaireQuestions.data" :key="questionnaireQuestion.id">
                <p>{{ questionnaireQuestion.question.question }}</p>

                <div v-for="option in questionnaireQuestion.question.options" :key="questionnaireQuestion.id"></div>
                <Label for="question-{{ option.id }}" value="{{option.option_title}}" />
                <Radio id="question-{{ option.id }}" :value="option.id" class="mt-1 block w-full"
                    v-model="form.questionnaire" :key="questionnaireQuestion.id" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Button class="ml-4" :processing="processing">
                    Login
                </Button>
            </div>
        </form>
    </GuestLayout>
</template>
