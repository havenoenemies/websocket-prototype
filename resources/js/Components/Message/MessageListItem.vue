<template>
    <div class="text-sm pb-4 mb-2 border-b border-gray-300">
        <div v-if="user === this.$page.props.auth.user.id" class="flex flex-row-reverse space-x-2 space-x-reverse">
            <AuthedMessageItem :body="body"/>
        </div>

        <div v-else class="flex space-x-2">
            <GuestMessageItem :body="body"/>
        </div>

        <div class="text-right">
            <TimeLabel :time="time"/>
        </div>
    </div>
</template>

<script>
import ProfilePicture from "@/Components/Message/ProfilePicture.vue";
import TimeLabel from "@/Components/TimeLabel.vue";
import GuestMessageItem from "@/Components/Message/GuestMessageItem.vue";
import AuthedMessageItem from "@/Components/Message/AuthedMessageItem.vue";

export default {
    name: "MessageListItem",
    components: {AuthedMessageItem, GuestMessageItem, TimeLabel, ProfilePicture},

    props: {
        body: {
            type: String,
            required: true
        },
        time: {
            type: String,
            required: true,
        },
        user: {
            type: Number,
        }
    }
}
</script>
