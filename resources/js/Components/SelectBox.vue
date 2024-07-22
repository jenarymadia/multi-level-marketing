<script setup>
import { onMounted, ref } from 'vue';

// Define the props and emits for the component
defineProps({
    modelValue: String,
    options: {
        type: Array,
        required: true,
    },
});

defineEmits(['update:modelValue']);

const select = ref(null);

// Autofocus logic for the select box
onMounted(() => {
    if (select.value.hasAttribute('autofocus')) {
        select.value.focus();
    }
});

// Expose the focus method to the parent component
defineExpose({ focus: () => select.value.focus() });
</script>

<template>
    <select
        ref="select"
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        :value="modelValue"
        @change="$emit('update:modelValue', $event.target.value)"
    >
        <option v-for="option in options" :key="option.id" :value="option.id">
            {{ option.name }}
        </option>
    </select>
</template>
