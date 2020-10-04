<template>
    <div>
        <layout>
            <div
                class="flex flex-wrap justify-center font-mono text-4xl md:text-6xl text-gray-900 "
            >
                Descargar
            </div>
            <hr />
            <div class="block justify-center items-center ">
                <div
                    class=" bg-white rounded overflow-hidden shadow-lg m-4 p-4"
                >
                    <form class="w-full" @submit.prevent="search()">
                        <div
                            class="flex w-full items-center border-b border-gray-900 py-2"
                        >
                            <input
                                v-model="link"
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text"
                                placeholder="Link Youtube..."
                            />
                            <button
                                class="flex-shrink-0 bg-gray-900 hover:bg-gray-700 border-gray-900 hover:border-gray-700 text-sm border-4 text-white py-1 px-2 rounded transition duration-900 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                type="submit"
                            >
                                <svg
                                    id="auxi"
                                    aria-hidden="true"
                                    data-prefix="fas"
                                    data-icon="search"
                                    class="w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                                    />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="inline-block justify-center" v-if="url">
                    <p class="w-auto flex justify-center mx-4">{{ url }}</p>
                    <a
                        class="w-auto flex justify-center bg-purple-500 hover:bg-purple-400 text-white font-bold py-2 px-4 border-b-4 border-purple-700 hover:border-purple-500 rounded  m-4 rounded-l"
                        target="_blank"
                        :href="url"
                        >Descargar</a
                    >
                </div>
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";
import axios from "axios";

export default {
    data() {
        return {
            link: "",
            url: null
        };
    },
    components: { layout },

    methods: {
        search() {
            document.getElementById("auxi").classList.add("animate-spin");
            axios
                .post("api/youtube", { link: this.link })
                .then(response => {
                    this.url = response.data;
                    document
                        .getElementById("auxi")
                        .classList.remove("animate-spin");
                })
                .catch(() => {
                    document
                        .getElementById("auxi")
                        .classList.remove("animate-spin");
                });
        }
    }
};
</script>
