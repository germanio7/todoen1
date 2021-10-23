<template>
    <div>
        <layout>
            <div class="rounded overflow-hidden shadow-lg p-2">
                <div class="flex justify-center items-center">
                    <form class="w-full max-w-lg" @submit.prevent="sendData">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="text-gray-900 font-bold text-xl m-2">
                                Crear Usuario
                            </div>
                            <div class="w-full px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name"
                                >
                                    Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    v-model="name"
                                    type="text"
                                    placeholder="Name"
                                />
                                <p
                                    v-if="$page.errors.name"
                                    class="text-red-500 text-xs italic"
                                >
                                    {{ $page.errors.name[0] }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name"
                                >
                                    Email
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    v-model="email"
                                    type="email"
                                    placeholder="Email"
                                />
                                <p
                                    v-if="$page.errors.email"
                                    class="text-red-500 text-xs italic"
                                >
                                    {{ $page.errors.email[0] }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password"
                                >
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    v-model="password"
                                    type="password"
                                    placeholder="******************"
                                />
                                <p
                                    v-if="$page.errors.password"
                                    class="text-red-500 text-xs italic"
                                >
                                    {{ $page.errors.password[0] }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password"
                                >
                                    Avatar
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    @change="uploadFile()"
                                    type="file"
                                    ref="file"
                                    accept="image/*"
                                />
                                <p
                                    v-if="$page.errors.file"
                                    class="text-red-500 text-xs italic"
                                >
                                    {{ $page.errors.file[0] }}
                                </p>
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button
                                    v-bind:class="{
                                        'cursor-not-allowed': allowed
                                    }"
                                    class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                    type="submit"
                                >
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "../Shared/Layout";
export default {
    data() {
        return {
            email: "",
            name: "",
            password: "",
            file: "",
            allowed: false
        };
    },
    components: { layout },
    methods: {
        sendData() {
            this.allowed = !this.allowed;
            var form = new FormData();
            form.append("email", this.email);
            form.append("name", this.name);
            form.append("password", this.password);
            form.append("file", this.file);
            this.$inertia.post("/users", form);
        },
        uploadFile() {
            this.file = this.$refs.file.files[0];
        }
    }
};
</script>
