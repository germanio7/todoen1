<template>
    <div>
        <layout>
            <div class="flex-1 justify-center">
                <section class="mx-auto">
                    <div class="container px-5 mx-auto lg:px-24">
                        <div
                            class="
                                flex flex-col
                                w-full
                                mb-6
                                text-left
                                lg:text-center
                            "
                        >
                            <h1
                                class="
                                    text-2xl text-center
                                    font-semibold
                                    text-blue-800
                                    title-font
                                "
                            >
                                Tecnologías
                                <br class="md:hidden" />
                                Utilizadas
                            </h1>
                        </div>
                        <hr />

                        <br />
                        <div class="flex flex-wrap">
                            <div v-for="item in tecnos" :key="item.id">
                                <div
                                    @click="setRadio(item)"
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
                                    <img
                                        :src="
                                            item.img
                                                ? item.img
                                                : './noimage.png'
                                        "
                                        class="h-16"
                                        alt=""
                                    />
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
                                        {{ item.name }}
                                    </p>
                                </div>
                            </div>
                            <div
                                @click="setRadio(item)"
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
                                <svg
                                    aria-hidden="true"
                                    data-prefix="fas"
                                    data-icon="gamepad"
                                    class="h-16"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M480.07 96H160a160 160 0 10114.24 272h91.52A160 160 0 10480.07 96zM248 268a12 12 0 01-12 12h-52v52a12 12 0 01-12 12h-24a12 12 0 01-12-12v-52H84a12 12 0 01-12-12v-24a12 12 0 0112-12h52v-52a12 12 0 0112-12h24a12 12 0 0112 12v52h52a12 12 0 0112 12zm216 76a40 40 0 1140-40 40 40 0 01-40 40zm64-96a40 40 0 1140-40 40 40 0 01-40 40z"
                                    />
                                </svg>
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
                                    EmulatorJS
                                </p>
                            </div>
                        </div>
                        <br />
                    </div>
                </section>
                <hr />

                <p class="text-center text-gray-500 text-sm mt-4">
                    &copy;2022
                    <a target="_blank" href="https://github.com/germanio7"
                        >Github</a
                    >
                    |
                    <a
                        target="_blank"
                        class="badge-base__link LI-simple-link"
                        href="https://ar.linkedin.com/in/germanio7?trk=profile-badge"
                        >Linkedin</a
                    >
                </p>
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
                    img: "https://laravel.com/img/logomark.min.svg",
                },
                {
                    name: "Tailwind CSS",
                    img: "https://cdn.worldvectorlogo.com/logos/tailwindcss.svg",
                },
                {
                    name: "VueJS",
                    img: "https://vuejs.org/images/logo.png",
                },
                {
                    name: "InertiaJS",
                    img: "https://pbs.twimg.com/profile_images/1157690996823592960/TaroSwnp_400x400.jpg",
                },
                {
                    name: "Here Destination Weather",
                    img: "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/HERE_logo.svg/1200px-HERE_logo.svg.png",
                },
                {
                    name: "News API",
                    img: "https://newsapi.org/images/n-logo-border.png",
                },
                // {
                //     name: "The Sports DB",
                //     img:
                //         "https://www.thesportsdb.com/images/logo_new-medium.png"
                // },
                // {
                //     name: "Football Data",
                //     img: "https://www.football-data.org/assets/logo.jpg"
                // },
                {
                    name: "RetroGames",
                    img: "https://www.retrogames.cc/images/logo.png?v=20180731",
                },
            ],
        };
    },
    props: ["visitas"],
    components: { layout },
    methods: {
        sendWhatsapp() {
            window.open(
                "https://wa.me/send?text=https://todoen1.herokuapp.com"
            );
        },

        sendTwitter() {
            window.open(
                "https://twitter.com/intent/tweet?url=https://todoen1.herokuapp.com"
            );
        },

        sendFacebook() {
            window.open(
                "https://www.facebook.com/sharer/sharer.php?u=https://todoen1.herokuapp.com"
            );
        },
    },
};
</script>
