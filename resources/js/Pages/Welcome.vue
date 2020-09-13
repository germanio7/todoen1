<template>
    <div>
        <layout>
            <div
                class="flex justify-center items-center bg-purple-600 text-white text-xl font-mono p-1"
                role="alert"
            >
                <svg
                    class="fill-current w-4 h-4 mr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                >
                    <path
                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"
                    />
                </svg>
                <p class="tracking-widest">Visitas: {{ visitas }}</p>
            </div>
            <div class="flex-1 justify-center">
                <div
                    class="text-center font-mono text-4xl md:text-6xl text-gray-900"
                >
                    Tecnologías Utilizadas
                </div>
                <div class="flex justify-center">
                    <div
                        class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center items-center "
                    >
                        <div v-for="item in tecnos" :key="item.id">
                            <div
                                class="w-full rounded overflow-hidden shadow-lg my-4 md:w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            >
                                <div
                                    class="md:flex bg-white rounded-lg p-6 items-center"
                                >
                                    <img
                                        class="h-16 w-16 md:h-24 md:w-24 mx-auto md:mx-0 md:mr-6"
                                        :src="item.img"
                                        alt="no image"
                                    />
                                    <div class="text-center md:text-left">
                                        <h2 class="text-lg">{{ item.name }}</h2>
                                    </div>
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
export default {
    data() {
        return {
            tecnos: [
                {
                    name: "Laravel",
                    img: "https://laravel.com/img/logomark.min.svg"
                },
                {
                    name: "Tailwind CSS",
                    img:
                        "https://tailwindcss.com/_next/static/media/twitter-square.18b32c43e6fa4c8ee7db66330112a331.png"
                },
                {
                    name: "VueJS",
                    img: "https://vuejs.org/images/logo.png"
                },
                {
                    name: "InertiaJS",
                    img:
                        "https://pbs.twimg.com/profile_images/1157690996823592960/TaroSwnp_400x400.jpg"
                },
                {
                    name: "Tune In",
                    img:
                        "https://lh3.googleusercontent.com/KLI43egHmMQhCvDTH-EDWDdtxxPODJk6YO56Fa5cmmiYRd5LfBAXrVZmHcRCQ5j9_rZD=s360"
                },
                {
                    name: "Here Destination Weather",
                    img:
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/HERE_logo.svg/1200px-HERE_logo.svg.png"
                },
                {
                    name: "News API",
                    img: "https://newsapi.org/images/n-logo-border.png"
                },
                {
                    name: "RetroGames",
                    img: "https://www.retrogames.cc/images/logo.png?v=20180731"
                }
            ]
        };
    },
    props: ["visitas"],
    components: { layout },
    methods: {}
};
</script>

<style></style>
