<script setup>
defineProps({
    time: {
        type: String,
    },
});
</script>

<template>
    <p class="text-gray-400">{{ time }}</p>
</template>
