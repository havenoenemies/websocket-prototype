<template>
    <div>
        <div
            class="text-right"
            v-if="message.user_id === this.$page.props.auth.user.id"
        >
            <div class="flex flex-row-reverse space-x-2 space-x-reverse">
                <ProfilePicture />

                <div class="font-medium pt-2">
                    {{ message.body }}
                </div>
            </div>
        </div>

        <div v-else>
            <div class="flex space-x-2">
                <ProfilePicture />

                <div class="font-medium pt-2">
                    {{ message.body }}
                </div>
            </div>
        </div>

        <p class="text-right text-gray-400">{{ message.time }}</p>
    </div>
</template>

<script>
import ProfilePicture from "@/Components/Message/ProfilePicture.vue";

export default {
    name: "MessageItem",
    components: {ProfilePicture},

    props: {
        message: {
            type: Array,
            required: true
        },
    }
}
</script>

<style scoped>

</style>
