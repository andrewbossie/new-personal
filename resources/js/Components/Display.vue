<template>
    <p>
        {{ displayData }}
    </p>
</template>
<script setup>
import { ref } from 'vue';

const props = defineProps(['data']);

const displayData = ref(props.data);

console.log(displayData);

</script>