<template>
    <div>
        <layout>
            <div
                class="grid grid-cols-1 md:grid-cols-2 rounded-lg justify-center bg-gradient-to-r from-purple-700 to-purple-300 text-center py-4 lg:px-4 mx-2"
            >
                <div
                    class="p-2 bg-green-800 rounded-lg justify-around items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex m-1"
                    role="alert"
                >
                    <span
                        class="flex items-center rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3"
                        >Dólar
                        <svg
                            aria-hidden="true"
                            data-prefix="fas"
                            data-icon="dollar-sign"
                            class="w-3 mx-1"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 288 512"
                        >
                            <path
                                fill="currentColor"
                                d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"
                            />
                        </svg>
                        Oficial</span
                    >
                    <div class="grid grid-cols-1 justify-center">
                        <span
                            class="flex justify-center font-semibold mr-2 text-center flex-auto mb-1"
                            >Compra $ {{ dolarOficial.compra }} - Venta $
                            {{ dolarOficial.venta }}</span
                        >
                    </div>
                </div>
                <div
                    class="p-2 bg-blue-800 rounded-lg justify-around items-center text-blue-100 leading-none lg:rounded-full flex lg:inline-flex m-1"
                    role="alert"
                >
                    <span
                        class="flex items-center rounded-full bg-blue-500 uppercase px-2 py-1 text-xs font-bold mr-3"
                        >Dólar
                        <svg
                            aria-hidden="true"
                            data-prefix="fas"
                            data-icon="dollar-sign"
                            class="w-3 mx-1"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 288 512"
                        >
                            <path
                                fill="currentColor"
                                d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"
                            />
                        </svg>
                        Blue</span
                    >
                    <div class="grid grid-cols-1 justify-center">
                        <span
                            class="flex justify-center font-semibold mr-2 text-center flex-auto mb-1"
                            >Compra $ {{ dolarBlue.compra }} - Venta $
                            {{ dolarBlue.venta }}</span
                        >
                    </div>
                </div>
            </div>
            <div
                class="flex justify-center font-mono text-4xl md:text-6xl text-gray-900"
            >
                Noticias
            </div>
            <hr />
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
            <hr />
            <div id="esqueleto" hidden>
                <div
                    class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-2"
                >
                    <div
                        v-for="item in 9"
                        class="border-l-4 border-purple-500 bg-white border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto m-4"
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
                        class="max-w-sm flex flex-col flex-1 border-b-4 border-purple-500 rounded bg-white overflow-hidden shadow-lg m-2 p-2 h-full "
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
                        <div
                            class="flex flex-col flex-1 justify-between items-center"
                        >
                            <div class="px-6 pt-4 pb-2">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                    >{{ item.source.name }}</span
                                >
                            </div>
                            <div class="flex justify-center">
                                <div class="px-6 pt-4 pb-2">
                                    <button
                                        @click="sendFacebook(item.url)"
                                        class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            data-prefix="fab"
                                            data-icon="facebook"
                                            class="w-8 text-blue-700"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                        >
                                            <path
                                                fill="currentColor"
                                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                                            />
                                        </svg>
                                    </button>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <button
                                        @click="sendTwitter(item.url)"
                                        class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            data-prefix="fab"
                                            data-icon="twitter-square"
                                            class="w-8 text-blue-400"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512"
                                        >
                                            <path
                                                fill="currentColor"
                                                d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 01-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"
                                            />
                                        </svg>
                                    </button>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <button
                                        class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                        @click="sendWhatsapp(item.url)"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            data-prefix="fab"
                                            data-icon="whatsapp-square"
                                            class="w-8 text-green-400"
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
            news: null,
            dolarOficial: {},
            dolarBlue: {}
        };
    },
    components: { layout },
    mounted() {
        this.setNews();
        this.setDolarOficial();
        this.setDolarBlue();
    },
    methods: {
        setNews() {
            let eskeletor = document.getElementById("esqueleto");
            eskeletor.removeAttribute("hidden");
            axios.get("api/news").then(response => {
                eskeletor.setAttribute("hidden", true);
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

        sendWhatsapp(url) {
            window.open("https://wa.me/send?text=" + url);
        },

        sendTwitter(url) {
            window.open("https://twitter.com/intent/tweet?url=" + url);
        },

        sendFacebook(url) {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + url);
        },

        setDolarOficial() {
            axios.get("api/dolar-oficial").then(response => {
                this.dolarOficial = response.data;
            });
        },

        setDolarBlue() {
            axios.get("api/dolar-blue").then(response => {
                this.dolarBlue = response.data;
            });
        }
    }
};
</script>

<style></style>
