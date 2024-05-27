<template>
    <form @submit.prevent="convert" class="space-y-6">
        <div>
            <label for="roman" class="block text-sm font-medium leading-6 text-gray-900">Enter a number or Roman numeral:</label>
            <div class="mt-2">
                <input v-model="roman" type="text" id="roman" name="roman" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div v-if="result" class="mt-4 block w-full rounded-md py-1.5 bg-indigo-100 text-center border border-indigo-600 text-indigo-600 text-2xl font-bold leading-9 tracking-tight">
                <span>{{ result }}</span>
            </div>
            <div v-if="errorMessage" class="mt-4 block w-full rounded-md py-1.5 bg-red-100 text-center border border-red-600 text-red-600 font-bold">
                <span>{{ errorMessage }}</span>
            </div>
        </div>
        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Convert
            </button>
        </div>
    </form>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

let roman = '';
const result = ref('');
const errorMessage = ref('');

async function convert() {
    errorMessage.value = '';
    try {
        const response = await axios.post('/convert', { value: roman });
        result.value = response.data.convertedValue;
    } catch (error) {
        result.value = ''
        if (error.response) {
            errorMessage.value = error.response.data.error;
        } else {
            errorMessage.value = 'An unknown error has occurred';
        }
    }
}
</script>