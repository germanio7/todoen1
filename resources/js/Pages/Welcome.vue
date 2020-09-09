<template>
    <div>
        <layout>
            <div
                class="text-center font-mono text-4xl md:text-6xl text-teal-700"
            >
                Tecnologías Utilizadas
            </div>
            <div
                class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center items-center"
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
                }
            ]
        };
    },
    components: { layout },
    methods: {}
};
</script>

<style></style>
