<script setup>
import ProfilePicture from "@/Components/Message/ProfilePicture.vue";

defineProps({
    body: {
        type: String,
    },
});
</script>

<template>
    <ProfilePicture />

    <div class="pt-2">
        {{ body }}
    </div>
</template>
