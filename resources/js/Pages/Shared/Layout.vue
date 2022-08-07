<template>
    <div>
        <!-- class="fixed" -->
        <nav
            id="navbar"
            class="
                fixed
                w-full
                flex
                items-center
                justify-between
                flex-wrap
                bg-gray-900
                p-6
                z-40
                -mt-24
            "
        >
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <inertia-link
                    href="/"
                    class="font-semibold text-sm md:text-xl tracking-tight"
                    >Todo en 1</inertia-link
                >
            </div>
            <div class="block lg:hidden">
                <button
                    class="
                        flex
                        items-center
                        px-3
                        py-2
                        border
                        rounded
                        text-gray-200
                        border-gray-400
                        hover:text-white hover:border-white
                    "
                    @click="mostrar()"
                >
                    <svg
                        class="fill-current h-3 w-3"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div
                v-show="menu"
                class="w-full block flex-grow lg:flex lg:items-center lg:w-auto"
            >
                <div class="text-sm">
                    <inertia-link
                        href="/noticias"
                        class="
                            block
                            mt-4
                            lg:inline-block lg:mt-0
                            text-white
                            hover:text-white
                            mr-4
                            transition
                            duration-500
                            ease-in-out
                            transform
                            hover:-translate-y-1 hover:scale-110
                        "
                        >Noticias</inertia-link
                    >
                </div>
                <div class="text-sm">
                    <inertia-link
                        href="/radios"
                        class="
                            block
                            mt-4
                            lg:inline-block lg:mt-0
                            text-white
                            hover:text-white
                            mr-4
                            transition
                            duration-500
                            ease-in-out
                            transform
                            hover:-translate-y-1 hover:scale-110
                        "
                        >Radios</inertia-link
                    >
                </div>
                <div class="text-sm">
                    <inertia-link
                        href="/weather"
                        class="
                            block
                            mt-4
                            lg:inline-block lg:mt-0
                            text-white
                            hover:text-white
                            mr-4
                            transition
                            duration-500
                            ease-in-out
                            transform
                            hover:-translate-y-1 hover:scale-110
                        "
                        >Clima</inertia-link
                    >
                </div>
                <div class="text-sm">
                    <inertia-link
                        href="/whatsapp"
                        class="
                            block
                            mt-4
                            lg:inline-block lg:mt-0
                            text-white
                            hover:text-white
                            mr-4
                            transition
                            duration-500
                            ease-in-out
                            transform
                            hover:-translate-y-1 hover:scale-110
                        "
                        >Enviar WhatsApp</inertia-link
                    >
                </div>
                <div class="text-sm">
                    <inertia-link
                        href="/juegos"
                        class="
                            block
                            mt-4
                            lg:inline-block lg:mt-0
                            text-white
                            hover:text-white
                            mr-4
                            transition
                            duration-500
                            ease-in-out
                            transform
                            hover:-translate-y-1 hover:scale-110
                        "
                        >Juegos
                    </inertia-link>
                </div>
                <!-- <div class="text-sm ">
                    <inertia-link
                        href="/scores"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >Resultados Deportivos
                    </inertia-link>
                </div> -->
                <!-- <div class="text-sm ">
                    <inertia-link
                        href="/youtube"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >Descargar mp3 <span class="text-red-500">(Beta)</span>
                    </inertia-link>
                </div> -->
            </div>
        </nav>
        <!-- <div v-if="$page.flash.message" class="alert">
            <alert :message="$page.flash.message"></alert>
        </div> -->

        <article class="container mx-auto mt-24 mb-32">
            <slot />
        </article>

        <button
            @click="topFunction()"
            id="myBtn"
            title="Ir a arriba"
            class="
                bg-purple-300
                text-purple-800
                rounded-full
                inline-flex
                items-center
                fixed
                z-50
                bottom-0
                right-0
                mr-2
                mb-2
                outline-none
                invisible
            "
        >
            <svg
                aria-hidden="true"
                data-prefix="fas"
                data-icon="chevron-circle-up"
                class="w-10"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
            >
                <path
                    fill="currentColor"
                    d="M8 256C8 119 119 8 256 8s248 111 248 248-111 248-248 248S8 393 8 256zm231-113.9L103.5 277.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L256 226.9l101.6 101.6c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L273 142.1c-9.4-9.4-24.6-9.4-34 0z"
                />
            </svg>
        </button>
    </div>
</template>

<script>
import alert from "./Alert";
export default {
    data() {
        return {
            menu: false,
        };
    },
    components: { alert },
    mounted() {
        if (window.innerWidth >= 768) {
            this.mostrar();
        }
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            document.getElementById("myBtn").classList.remove("invisible");
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                // document.getElementById("navbar").style.top = "90px";
                if (document.getElementById("myIFrame").getAttribute("src")) {
                    document.getElementById("footer").style.bottom = "0px";
                }
            } else {
                // document.getElementById("navbar").style.top = "-50px";
                document.getElementById("footer").style.bottom = "-150px";
            }
            prevScrollpos = currentScrollPos;

            if (window.pageYOffset == 0) {
                document.getElementById("myBtn").classList.add("invisible");
            }
        };
    },
    updated() {},
    methods: {
        mostrar() {
            this.menu = !this.menu;
        },
        topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        },
    },
};
</script>
