<template>
    <form @submit.prevent="convert">
        <label for="roman">Enter a number or Roman numeral:</label>
        <input v-model="roman" type="text" id="roman" name="roman" required>
        <button type="submit">Convert</button>
    </form>
    <div v-if="result">{{ result }}</div>
    <div v-if="errorMessage">{{ errorMessage }}</div>
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
        if (error.response) {
            errorMessage.value = error.response.data.error;
        } else {
            errorMessage.value = 'An unknown error has occurred';
        }
    }
}
</script>