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
                        <div class="flex justify-between items-center">
                            <div class="px-6 pt-4 pb-2">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                    >{{ item.source.name }}</span
                                >
                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <button
                                    @click="sendWhatsapp(item.title, item.url)"
                                >
                                    <svg
                                        aria-hidden="true"
                                        data-prefix="fab"
                                        data-icon="whatsapp-square"
                                        class="w-6 text-green-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512"
                                    >
                                        <path
                                            fill="currentColor"
                                            d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"
                                        />
                                    </svg>
                                </button>
                            </div>
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
        },
        sendWhatsapp(title, url) {
            window.open("https://api.whatsapp.com/send?text=" + url);
        }
    }
};
</script>

<style></style>
