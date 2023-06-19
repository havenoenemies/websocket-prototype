<template>
    <div class="text-sm pb-4 mb-2 border-b border-gray-300">
        <div v-if="user === this.$page.props.auth.user.id" class="flex flex-row-reverse space-x-2 space-x-reverse">
            <MessageTextItem :body="body"/>
        </div>

        <div v-else class="flex space-x-2">
            <MessageTextItem :body="body"/>
        </div>

        <div class="text-right">
            <TimeLabel :time="time"/>
        </div>
    </div>
</template>

<script>
import TimeLabel from "@/Components/TimeLabel.vue";
import MessageTextItem from "@/Components/Message/MessageTextItem.vue";

export default {
    name: "MessageListItem",
    components: {MessageTextItem,  TimeLabel},

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
