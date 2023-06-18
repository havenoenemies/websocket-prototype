<template>
    <h1 class="text-center mb-4">Messages</h1>

    <MessageListItem
        v-for="message in messages"
        :key="message.id"
        :body="message.body"
        :time="message.time"
        :user="message.user_id"
    />
</template>

<script>
import MessageListItem from "@/Components/Message/MessageListItem.vue";

export default {
    name: "MessageList",
    components: {MessageListItem},

    props: {
        messages: {
            type: Array,
        }
    }
}
</script>

<style scoped>

</style>
