<template>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Roman Numeral Converter</h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <NumeralConverter />
    </div>
</template>

<script>
    import NumeralConverter from "@/Shared/NumeralConverter.vue";

    export default {
        components: { NumeralConverter }
    };
</script>