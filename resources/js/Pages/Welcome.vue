<template>
    <div>
        <layout>
            <div
                class="flex justify-center items-center text-xl font-mono font-bold p-1"
            >
                Compartir Todo en uno &nbsp
                <button
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    @click="share()"
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
                <hr />
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
                        <div
                            class="w-full rounded overflow-hidden shadow-lg my-4 md:w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            <div
                                class="md:flex bg-white rounded-lg p-6 items-center"
                            >
                                <svg
                                    aria-hidden="true"
                                    data-prefix="fas"
                                    data-icon="gamepad"
                                    class="h-16 w-16 md:h-24 md:w-24 mx-auto md:mx-0 md:mr-6"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M480.07 96H160a160 160 0 10114.24 272h91.52A160 160 0 10480.07 96zM248 268a12 12 0 01-12 12h-52v52a12 12 0 01-12 12h-24a12 12 0 01-12-12v-52H84a12 12 0 01-12-12v-24a12 12 0 0112-12h52v-52a12 12 0 0112-12h24a12 12 0 0112 12v52h52a12 12 0 0112 12zm216 76a40 40 0 1140-40 40 40 0 01-40 40zm64-96a40 40 0 1140-40 40 40 0 01-40 40z"
                                    />
                                </svg>
                                <div class="text-center md:text-left">
                                    <h2 class="text-lg">EmulatorJS</h2>
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
                    name: "Spotify",
                    img:
                        "https://www.scdn.co/i/_global/twitter_card-default.jpg"
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
                    name: "weatherstack",
                    img:
                        "https://ipapi.com/site_images/apilayer_icon_weatherstack.png"
                },
                {
                    name: "News API",
                    img: "https://newsapi.org/images/n-logo-border.png"
                },
                {
                    name: "WhatsApp",
                    img:
                        "https://is4-ssl.mzstatic.com/image/thumb/Purple114/v4/66/b0/a6/66b0a612-9bc9-2547-244a-48ee83151fc5/AppIcon-0-0-1x_U007emarketing-0-0-0-6-0-0-85-220.png/246x0w.png"
                },
                {
                    name: "Font Awesome",
                    img:
                        "https://www.drupal.org/files/project-images/font_awesome_logo.png"
                },
                {
                    name: "football-data.org",
                    img: "https://www.football-data.org/assets/logo.jpg"
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
    methods: {
        share() {
            window.open(
                "https://wa.me/send?text=https://todoen1.herokuapp.com"
            );
        }
    }
};
</script>

<style></style>
