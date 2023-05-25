<template>
    <div class="w-1/2 mx-auto py-6">
        <h1 class="mb-4 text-center">Enter your message</h1>

        <div>
            <div class="mb-12">
                <form>
                    <div>
                        <input
                            v-model="body"
                            type="text"
                            class="mb-2 w-full rounded-lg border border-gray-400"
                            placeholder="Message..."
                        >
                    </div>

                    <div class="text-right">
                        <button
                            @click.prevent="store"
                            class="bg-blue-600 hover:bg-sky-500 text-white py-2 px-4 rounded-lg"
                            type="submit"
                        >
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div v-if="messages.length > 0" class="mb-4">
            <h1 class="text-center mb-4">Messages</h1>

            <div>
                <div class="text-sm pb-4 mb-2 border-b border-gray-300" v-for="message in messages">
                    <p
                        class="text-right"
                        v-if="message.user_id === this.$page.props.auth.user.id"
                    >
                        {{ message.body }}
                    </p>
                    <p v-else>
                        {{ message.body }}
                    </p>
                    <p class="text-right text-gray-400">{{ message.time }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


export default {
    name: "Messages",

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
