<template>
    <div>
        <!-- class="fixed" -->
        <nav
            id="navbar"
            class="fixed w-full flex items-center justify-between flex-wrap bg-gray-900 p-6 z-40 -mt-24"
        >
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <svg
                    aria-hidden="true"
                    data-prefix="fas"
                    data-icon="broadcast-tower"
                    class="w-8 pr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 512"
                >
                    <path
                        fill="currentColor"
                        d="M150.94 192h33.73c11.01 0 18.61-10.83 14.86-21.18-4.93-13.58-7.55-27.98-7.55-42.82s2.62-29.24 7.55-42.82C203.29 74.83 195.68 64 184.67 64h-33.73c-7.01 0-13.46 4.49-15.41 11.23C130.64 92.21 128 109.88 128 128c0 18.12 2.64 35.79 7.54 52.76 1.94 6.74 8.39 11.24 15.4 11.24zM89.92 23.34C95.56 12.72 87.97 0 75.96 0H40.63c-6.27 0-12.14 3.59-14.74 9.31C9.4 45.54 0 85.65 0 128c0 24.75 3.12 68.33 26.69 118.86 2.62 5.63 8.42 9.14 14.61 9.14h34.84c12.02 0 19.61-12.74 13.95-23.37-49.78-93.32-16.71-178.15-.17-209.29zM614.06 9.29C611.46 3.58 605.6 0 599.33 0h-35.42c-11.98 0-19.66 12.66-14.02 23.25 18.27 34.29 48.42 119.42.28 209.23-5.72 10.68 1.8 23.52 13.91 23.52h35.23c6.27 0 12.13-3.58 14.73-9.29C630.57 210.48 640 170.36 640 128s-9.42-82.48-25.94-118.71zM489.06 64h-33.73c-11.01 0-18.61 10.83-14.86 21.18 4.93 13.58 7.55 27.98 7.55 42.82s-2.62 29.24-7.55 42.82c-3.76 10.35 3.85 21.18 14.86 21.18h33.73c7.02 0 13.46-4.49 15.41-11.24 4.9-16.97 7.53-34.64 7.53-52.76 0-18.12-2.64-35.79-7.54-52.76-1.94-6.75-8.39-11.24-15.4-11.24zm-116.3 100.12c7.05-10.29 11.2-22.71 11.2-36.12 0-35.35-28.63-64-63.96-64-35.32 0-63.96 28.65-63.96 64 0 13.41 4.15 25.83 11.2 36.12l-130.5 313.41c-3.4 8.15.46 17.52 8.61 20.92l29.51 12.31c8.15 3.4 17.52-.46 20.91-8.61L244.96 384h150.07l49.2 118.15c3.4 8.16 12.76 12.01 20.91 8.61l29.51-12.31c8.15-3.4 12-12.77 8.61-20.92l-130.5-313.41zM271.62 320L320 203.81 368.38 320h-96.76z"
                    />
                </svg>
                <svg
                    aria-hidden="true"
                    data-prefix="fas"
                    data-icon="newspaper"
                    class="w-6 md:w-8 pr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512"
                >
                    <path
                        fill="currentColor"
                        d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 01-8-8V144h16v248a8 8 0 01-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z"
                    />
                </svg>
                <inertia-link
                    href="/"
                    class="font-semibold text-sm md:text-xl tracking-tight"
                    >Todo en uno</inertia-link
                >
                <svg
                    aria-hidden="true"
                    data-prefix="fas"
                    data-icon="cloud-sun"
                    class="w-6 md:w-8 pl-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 512"
                >
                    <path
                        fill="currentColor"
                        d="M575.2 325.7c.2-1.9.8-3.7.8-5.6 0-35.3-28.7-64-64-64-12.6 0-24.2 3.8-34.1 10-17.6-38.8-56.5-66-101.9-66-61.8 0-112 50.1-112 112 0 3 .7 5.8.9 8.7-49.6 3.7-88.9 44.7-88.9 95.3 0 53 43 96 96 96h272c53 0 96-43 96-96 0-42.1-27.2-77.4-64.8-90.4zm-430.4-22.6c-43.7-43.7-43.7-114.7 0-158.3 43.7-43.7 114.7-43.7 158.4 0 9.7 9.7 16.9 20.9 22.3 32.7 9.8-3.7 20.1-6 30.7-7.5L386 81.1c4-11.9-7.3-23.1-19.2-19.2L279 91.2 237.5 8.4C232-2.8 216-2.8 210.4 8.4L169 91.2 81.1 61.9C69.3 58 58 69.3 61.9 81.1l29.3 87.8-82.8 41.5c-11.2 5.6-11.2 21.5 0 27.1l82.8 41.4-29.3 87.8c-4 11.9 7.3 23.1 19.2 19.2l76.1-25.3c6.1-12.4 14-23.7 23.6-33.5-13.1-5.4-25.4-13.4-36-24zm-4.8-79.2c0 40.8 29.3 74.8 67.9 82.3 8-4.7 16.3-8.8 25.2-11.7 5.4-44.3 31-82.5 67.4-105C287.3 160.4 258 140 224 140c-46.3 0-84 37.6-84 83.9z"
                    />
                </svg>
                <svg
                    aria-hidden="true"
                    data-prefix="fas"
                    data-icon="gamepad"
                    class="w-8 pl-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 512"
                >
                    <path
                        fill="currentColor"
                        d="M480.07 96H160a160 160 0 10114.24 272h91.52A160 160 0 10480.07 96zM248 268a12 12 0 01-12 12h-52v52a12 12 0 01-12 12h-24a12 12 0 01-12-12v-52H84a12 12 0 01-12-12v-24a12 12 0 0112-12h52v-52a12 12 0 0112-12h24a12 12 0 0112 12v52h52a12 12 0 0112 12zm216 76a40 40 0 1140-40 40 40 0 01-40 40zm64-96a40 40 0 1140-40 40 40 0 01-40 40z"
                    />
                </svg>
            </div>
            <div class="block lg:hidden">
                <button
                    class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white"
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
                <div class="text-sm ">
                    <inertia-link
                        href="/radios"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >Radios</inertia-link
                    >
                </div>
                <div class="text-sm ">
                    <inertia-link
                        href="/noticias"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >Noticias</inertia-link
                    >
                </div>
                <div class="text-sm ">
                    <inertia-link
                        href="/weather"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >Clima</inertia-link
                    >
                </div>
                <div class="text-sm ">
                    <inertia-link
                        href="/juegos"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >Juegos
                    </inertia-link>
                </div>
                <div class="text-sm ">
                    <inertia-link
                        href="/info"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >Acerca de</inertia-link
                    >
                </div>
                <!-- <div>
                    <inertia-link
                        href="/users/create"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0"
                        >Create</inertia-link
                    >
                </div> -->
            </div>
        </nav>
        <!-- <div v-if="$page.flash.message" class="alert">
            <alert :message="$page.flash.message"></alert>
        </div> -->

        <article class="container mx-auto mt-24 mb-32">
            <slot />
        </article>
    </div>
</template>

<script>
import alert from "./Alert";
export default {
    data() {
        return {
            menu: false
        };
    },
    components: { alert },
    mounted() {
        if (window.innerWidth >= 768) {
            this.mostrar();
        }
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "90px";
                if (document.getElementById("myIFrame").getAttribute("src")) {
                    document.getElementById("footer").style.bottom = "0px";
                }
            } else {
                document.getElementById("navbar").style.top = "-50px";
                document.getElementById("footer").style.bottom = "-150px";
            }
            prevScrollpos = currentScrollPos;
        };
    },
    updated() {},
    methods: {
        mostrar() {
            this.menu = !this.menu;
        }
    }
};
</script>
