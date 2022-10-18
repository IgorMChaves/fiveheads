<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import axios from 'axios';
</script>

<template >
    <AppLayout title="Comunidade">
        <template #header class="font-semibold text-xl text-gray-800 leading-tight bg-[#3B4A52]">
            <div class=" flex m-auto bg-[#3B4A52]">
                <ul class="flex justify-between m-auto p-1 list-none">
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Ação</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Comedia</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Slice of life</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Terror</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Sci - fi</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Mais</a>
                    </li>
                </ul>
            </div>
        </template>

        <div class="py-12 bg-[#0E181D]">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex"
                    style="min-height: 400px; max-height: 400px; ">

                    <!-- lista de usuarios-->
                    <div class="w-3/12 bg-[#23353E] border-r border-black overflow-y-scroll">
                        <ul>
                            <li v-for="user in users" :key="user.id"
                                @click="() => {loadMessages(user.id)}"
                                :class="(userActive && userActive.id == user.id) ? 'bg-gray-200 bg-opacity-50' : '' "
                                class="p-6 text-lg text-white  leading-7 front-semibold border-b border-gray-200 hover:bg-gray-50 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">{{ user.name }}</p>
                                <span class="ml-2 w-2 h-2 bg-blue-800 rounded-full"></span>
                            </li>
                        </ul>
                    </div>
                    <!-- box mensagens-->
                    <div class="w-9/12 flex flex-col justify-between">

                        <!-- box mensagens-->

                        <div class="w-full p-6 flex flex-col overflow-y-scroll bg-[#23353E]">
                            <div class="w-full mb-3t message "
                                 v-for="message in messages" :key="message.id"
                                :class="(message.from == $page.props.auth.user.id) ? 'text-righ' : '' "
                                >
                                <p
                                    class="inline-block p-2 rounded-lg messageFromMe text-white"
                                    :class="(message.from == $page.props.auth.user.id) ? 'messageFromMe' : 'messageToMe' "
                                    style="max-width: 75%;">
                                    {{message.content}}
                                </p>
                                <span class="block mt-1 text-xxs text-gray-400">{{message.created_at | formatDate}}
                                </span>
                            </div>
                        </div>

                      <!-- formulário-->

                        <div v-if="userActive" class="w-full bg-[#23353E] p-6 border-t border-[#23353E] ">
                            <form v-on:submit.prevent="sendMessage">
                                <div class="flex items-center border-b border-gray-500 py-2">
                                    <input v-model="message" type="text" placeholder="Digite..."
                                        class="focus:shadow-none placeholder-shown:border-gray-500 text-white flex-1 rounded-lg border-none px-4 py-2 text-sm bg-[#23353E] ">
                                    <button type="submit"
                                        class="flex-shrink-0 bg-gray-500 hover:bg-gray-800 border-gray-500 hover:border-gray-800 text-sm border-4 text-white py-1 px-2 rounded">
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>

</template>

<script>

export default {

    components: {
        AppLayout,
    },
    data() {
        return {
            users: [],
            messages: [],
            userActive: null,
            message:null
        }
    },
    methods: {
        scrollToBottom:function (){
          if (this.messages.length){
             document.querySelectorAll('.message:last-child')[0].scrollIntoView()
          }
        },
        loadMessages: async function (userId) {

          axios.get(`api/users/${userId}`).then(response => {
            this.userActive = response.data.user
          })

          await axios.get(`api/messages/${userId}`).then(response => {
                this.messages = response.data.messages
          })

          this.scrollToBottom()
        },
        sendMessage: async function (){

          await axios.post('api/messages/store', {
              'content':this.message,
              'to':this.userActive.id
          }).then(response=>{

            this.messages.push({
              'from': 1,
              'to':this.userActive.id,
              'content': this.message,
              'created_at': new Date().toISOString(),
              'updated_at': new Date().toISOString(),
            })

            this.message = ''
          })
            this.scrollToBottom()
        },
    },
    mounted() {
        axios.get('api/users')
            .then(response => {
                this.users = response.data.users
            })
    },
}
</script>

<style>
.messageFromMe {
    @apply bg-slate-100 bg-opacity-25;
}

.messageToMe {
    @apply bg-slate-500 bg-opacity-25;
}
</style>
