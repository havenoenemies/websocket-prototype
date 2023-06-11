<template>
    <div>
        <div
            class="text-sm pb-4 mb-2 border-b border-gray-300"
            v-for="message in messages"
        >
            <MessageItem
                :message="message"
            />
        </div>
    </div>
</template>

<script>
import MessageItem from "@/Components/Message/MessageItem.vue";

export default {
    name: "MessageList",
    components: {MessageItem},

    props: {
        messages: {
            type: Array,
        }
    }
}
</script>

<style scoped>

</style>
