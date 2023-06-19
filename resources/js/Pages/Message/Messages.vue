<template>
    <AuthenticatedLayout>
        <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-1/2 mx-auto py-6">
                    <h1 class="mb-4 text-center">Enter your message</h1>

                    <div class="mb-12">
                        <form @submit.prevent="store">
                            <div>
                                <TextInput
                                    id="body"
                                    type="text"
                                    class="mt-1 block w-full mb-2 w-full rounded-lg border border-gray-400"
                                    placeholder="Message..."
                                    v-model="body"
                                    autocomplete="off"
                                    required
                                    autofocus
                                />
                            </div>

                            <div class="text-right">
                                <BaseButton>
                                    Send
                                </BaseButton>
                            </div>
                        </form>
                    </div>

                    <div v-if="messages.length > 0" class="mb-4">
                        <MessageList :messages="messages" />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MessageList from "@/Components/Message/MessageList.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import BaseButton from "@/Components/BaseButton.vue";
import TextInput from "@/Components/TextInput.vue";

export default {
    name: "Messages",
    components: {TextInput, BaseButton, PrimaryButton, MessageList, AuthenticatedLayout},

    props: {
        messages: {
            type: Array,
        }
    },

    data() {
        return {
            body: '',
        }
    },

    created() {
      window.Echo.channel('store_message')
      .listen('.store_message', res => {
          this.messages.unshift(res.message)
      })
    },

    methods: {
        store() {
            axios.post('/messages', {body: this.body, user_id: this.$page.props.auth.user.id})
            .then(res => {
                this.messages.unshift(res.data)
                this.body = ''
            })
        }
    }
}
</script>

<style scoped>

</style>
