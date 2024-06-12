<script setup>
import { ref } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Input from '@/Components/TextInput.vue';
import Label from '@/Components/InputLabel.vue';
import Button from '@/Components/PrimaryButton.vue';
import ValidationErrors from '@/Components/InputError.vue';

const form = useForm({
    email: '',
    password: '',
});

const submit = () => {
    form.post(route('admin.login'));
};
</script>

<template>
    <GuestLayout>

        <Head title="Admin Login" />

        <ValidationErrors :errors="errors" />

        <form @submit.prevent="submit">
            <div>
                <Label for="email" value="Email" />
                <Input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
            </div>

            <div class="mt-4">
                <Label for="password" value="Password" />
                <Input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                    autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Button class="ml-4" :processing="processing">
                    Login
                </Button>
            </div>
        </form>
    </GuestLayout>
</template>
