<template>
    <div>
        <layout>
            <div
                class="flex justify-center font-mono text-4xl md:text-6xl text-gray-900"
            >
                Noticias
            </div>
            <div class="flex-wrap md:flex justify-center px-6 pt-4 pb-2">
                <span
                    @click="categoryNews('business')"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >#negocios</span
                >
                <span
                    @click="categoryNews('entertainment')"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >#entretenimiento</span
                >
                <span
                    @click="categoryNews('general')"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >#general</span
                >
                <span
                    @click="categoryNews('health')"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >#salud</span
                >
                <span
                    @click="categoryNews('science')"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >#ciencia</span
                >
                <span
                    @click="categoryNews('sports')"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >#deportes</span
                >
                <span
                    @click="categoryNews('technology')"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >#tecnología</span
                >
            </div>
            <div id="esqueleto" hidden>
                <div
                    class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-2"
                >
                    <div
                        v-for="item in 9"
                        class="border bg-white border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto m-4"
                    >
                        <div class="animate-pulse flex space-x-4 ">
                            <div
                                class="rounded-full bg-gray-400 h-12 w-12"
                            ></div>
                            <div class="flex-1 space-y-4 py-1">
                                <div
                                    class="h-4 bg-gray-400 rounded w-3/4"
                                ></div>
                                <div class="space-y-2">
                                    <div class="h-4 bg-gray-400 rounded"></div>
                                    <div
                                        class="h-4 bg-gray-400 rounded w-5/6"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
                <div v-for="item in news" :key="item.id">
                    <div
                        class="max-w-sm rounded bg-white overflow-hidden shadow-lg m-2 p-2 h-full "
                    >
                        <img
                            class="w-full transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            :src="item.urlToImage"
                            alt="No Image"
                        />
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">
                                {{ item.title }}
                            </div>
                            <p class="text-gray-700 text-base">
                                {{ item.description }}
                            </p>
                            <a
                                class="text-blue-500 break-words font-mono text-xs pt-4 no-underline hover:underline"
                                target="_blank"
                                :href="item.url"
                                >{{ item.url }}</a
                            >
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >{{ item.source.name }}</span
                            >
                        </div>
                    </div>
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
            news: null
        };
    },
    components: { layout },
    beforeMount() {
        this.setNews();
    },
    methods: {
        setNews() {
            axios.get("api/news").then(response => {
                this.news = response.data.articles;
            });
        },
        categoryNews(category) {
            let eskeletor = document.getElementById("esqueleto");
            eskeletor.removeAttribute("hidden");
            this.news = null;
            axios
                .post("api/newsCategory", {
                    category: category
                })
                .then(response => {
                    setTimeout(() => {
                        eskeletor.setAttribute("hidden", true);
                        this.news = response.data.articles;
                    }, 1500);
                });
        }
    }
};
</script>

<style></style>
