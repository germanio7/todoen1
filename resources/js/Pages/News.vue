<template>
    <div>
        <div
            class="
                grid grid-cols-1
                md:grid-cols-2
                rounded-lg
                justify-center
                text-center
                py-4
                lg:px-4
                mx-2
            "
        >
            <div
                class="
                    p-2
                    bg-green-800
                    rounded-lg
                    justify-around
                    items-center
                    text-green-100
                    leading-none
                    lg:rounded-full
                    flex
                    lg:inline-flex
                    m-1
                "
                role="alert"
            >
                <span
                    class="
                        flex
                        items-center
                        rounded-full
                        bg-green-500
                        uppercase
                        px-2
                        py-1
                        text-xs
                        font-bold
                        mr-3
                    "
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
                        class="
                            flex
                            justify-center
                            font-semibold
                            mr-2
                            text-center
                            flex-auto
                            mb-1
                        "
                        >Compra $ {{ dolarOficial.compra }} - Venta $
                        {{ dolarOficial.venta }}</span
                    >
                </div>
            </div>
            <div
                class="
                    p-2
                    bg-blue-800
                    rounded-lg
                    justify-around
                    items-center
                    text-blue-100
                    leading-none
                    lg:rounded-full
                    flex
                    lg:inline-flex
                    m-1
                "
                role="alert"
            >
                <span
                    class="
                        flex
                        items-center
                        rounded-full
                        bg-blue-500
                        uppercase
                        px-2
                        py-1
                        text-xs
                        font-bold
                        mr-3
                    "
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
                        class="
                            flex
                            justify-center
                            font-semibold
                            mr-2
                            text-center
                            flex-auto
                            mb-1
                        "
                        >Compra $ {{ dolarBlue.compra }} - Venta $
                        {{ dolarBlue.venta }}</span
                    >
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full mb-2 text-left lg:text-center">
            <h1
                class="
                    text-2xl text-center
                    font-semibold
                    text-blue-800
                    title-font
                "
            >
                Noticias
            </h1>
        </div>
        <hr />

        <div class="flex flex-wrap justify-center pt-4 pb-2">
            <div
                @click="categoryNews('business')"
                class="
                    cursor-pointer
                    hover:bg-gray-700
                    inline-flex
                    items-center
                    px-4
                    py-3
                    mb-2
                    mr-2
                    transition-colors
                    duration-200
                    ease-in
                    bg-gray-500
                    rounded-sm
                    shadow
                "
            >
                <p
                    class="
                        font-body
                        ml-2
                        text-sm
                        leading-none
                        text-white
                        capitalize
                    "
                >
                    #negocios
                </p>
            </div>
            <div
                @click="categoryNews('entertainment')"
                class="
                    cursor-pointer
                    hover:bg-gray-700
                    inline-flex
                    items-center
                    px-4
                    py-3
                    mb-2
                    mr-2
                    transition-colors
                    duration-200
                    ease-in
                    bg-gray-500
                    rounded-sm
                    shadow
                "
            >
                <p
                    class="
                        font-body
                        ml-2
                        text-sm
                        leading-none
                        text-white
                        capitalize
                    "
                >
                    #entretenimiento
                </p>
            </div>
            <div
                @click="categoryNews('general')"
                class="
                    cursor-pointer
                    hover:bg-gray-700
                    inline-flex
                    items-center
                    px-4
                    py-3
                    mb-2
                    mr-2
                    transition-colors
                    duration-200
                    ease-in
                    bg-gray-500
                    rounded-sm
                    shadow
                "
            >
                <p
                    class="
                        font-body
                        ml-2
                        text-sm
                        leading-none
                        text-white
                        capitalize
                    "
                >
                    #general
                </p>
            </div>
            <div
                @click="categoryNews('health')"
                class="
                    cursor-pointer
                    hover:bg-gray-700
                    inline-flex
                    items-center
                    px-4
                    py-3
                    mb-2
                    mr-2
                    transition-colors
                    duration-200
                    ease-in
                    bg-gray-500
                    rounded-sm
                    shadow
                "
            >
                <p
                    class="
                        font-body
                        ml-2
                        text-sm
                        leading-none
                        text-white
                        capitalize
                    "
                >
                    #salud
                </p>
            </div>
            <div
                @click="categoryNews('science')"
                class="
                    cursor-pointer
                    hover:bg-gray-700
                    inline-flex
                    items-center
                    px-4
                    py-3
                    mb-2
                    mr-2
                    transition-colors
                    duration-200
                    ease-in
                    bg-gray-500
                    rounded-sm
                    shadow
                "
            >
                <p
                    class="
                        font-body
                        ml-2
                        text-sm
                        leading-none
                        text-white
                        capitalize
                    "
                >
                    #ciencia
                </p>
            </div>
            <div
                @click="categoryNews('sports')"
                class="
                    cursor-pointer
                    hover:bg-gray-700
                    inline-flex
                    items-center
                    px-4
                    py-3
                    mb-2
                    mr-2
                    transition-colors
                    duration-200
                    ease-in
                    bg-gray-500
                    rounded-sm
                    shadow
                "
            >
                <p
                    class="
                        font-body
                        ml-2
                        text-sm
                        leading-none
                        text-white
                        capitalize
                    "
                >
                    #deportes
                </p>
            </div>
            <div
                @click="categoryNews('technology')"
                class="
                    cursor-pointer
                    hover:bg-gray-700
                    inline-flex
                    items-center
                    px-4
                    py-3
                    mb-2
                    mr-2
                    transition-colors
                    duration-200
                    ease-in
                    bg-gray-500
                    rounded-sm
                    shadow
                "
            >
                <p
                    class="
                        font-body
                        ml-2
                        text-sm
                        leading-none
                        text-white
                        capitalize
                    "
                >
                    #tecnología
                </p>
            </div>
        </div>

        <hr />
        <br />
        <ul
            class="
                lg:gap-16
                sm:gap-8
                grid grid-cols-1
                md:grid-cols-2
                lg:grid-cols-3
                col-span-10 col-start-2
                gap-6
            "
        >
            <div v-for="item in news" :key="item.id" class="container px-2">
                <li
                    class="
                        card
                        pb-8
                        md:pb-2
                        group
                        col-span-12
                        sm:col-span-6
                        lg:col-span-4
                        group-link-underline
                    "
                >
                    <a
                        :href="item.url"
                        aria-label="TastyIgniter: Open Source Restaurant Software"
                        target="_blank"
                    >
                        <img
                            :src="
                                item.urlToImage
                                    ? item.urlToImage
                                    : './noimage.png'
                            "
                            class="
                                w-full
                                mb-4
                                rounded-lg
                                shadow-none
                                transition transition-shadow
                                duration-500
                                ease-in-out
                                group-hover:shadow-lg
                            "
                            alt=""
                        />
                        <div class="flex items-center mb-3">
                            <span
                                class="
                                    inline-flex
                                    items-center
                                    px-3
                                    py-0.5
                                    rounded-full
                                    text-xs
                                    font-bold
                                    leading-5
                                    text-white
                                    font-display
                                    mr-2
                                    capitalize
                                    bg-brand-500
                                "
                                style="background-color: #4662b2"
                            >
                                {{ item.source.name }}
                            </span>
                            <p
                                class="
                                    font-display
                                    text-xs
                                    font-normal
                                    opacity-75
                                    text-black
                                "
                            >
                                {{ new Date(item.publishedAt).toDateString() }}
                            </p>
                        </div>
                        <p
                            class="
                                font-display
                                max-w-sm
                                text-2xl
                                font-bold
                                leading-tight
                            "
                        >
                            <span
                                class="
                                    link link-underline link-underline-black
                                    text-black
                                "
                            >
                                {{ item.title }}
                            </span>
                        </p>
                    </a>
                </li>
            </div>
        </ul>

        <div id="esqueleto" hidden>
            <h3 class="text-center">Cargando...</h3>
        </div>
        <br />
        <hr />

        <p class="text-center text-gray-500 text-sm mt-4">
            &copy;2022
            <a target="_blank" href="https://github.com/germanio7">Github</a>
            |
            <a
                target="_blank"
                class="badge-base__link LI-simple-link"
                href="https://ar.linkedin.com/in/germanio7?trk=profile-badge"
                >Linkedin</a
            >
        </p>
    </div>
</template>

<script>
import Layout from "./Shared/Layout";
import axios from "axios";
export default {
    layout: Layout,

    data() {
        return {
            news: null,
            dolarOficial: {},
            dolarBlue: {},
        };
    },

    mounted() {
        this.setNews();
        this.setDolarOficial();
        this.setDolarBlue();
    },
    methods: {
        setNews() {
            let eskeletor = document.getElementById("esqueleto");
            eskeletor.removeAttribute("hidden");
            axios.get("api/news").then((response) => {
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
                    category: category,
                })
                .then((response) => {
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
            axios.get("api/dolar-oficial").then((response) => {
                this.dolarOficial = response.data;
            });
        },

        setDolarBlue() {
            axios.get("api/dolar-blue").then((response) => {
                this.dolarBlue = response.data;
            });
        },
    },
};
</script>

<style></style>
