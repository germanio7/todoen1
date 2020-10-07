<template>
    <div>
        <layout>
            <div
                class="flex flex-wrap justify-center font-mono text-4xl md:text-6xl text-gray-900 "
            >
                Descargar mp3
            </div>
            <hr />
            <div class="block justify-center items-center ">
                <div
                    class=" bg-white rounded overflow-hidden shadow-lg m-4 p-4"
                >
                    <form class="w-full" @submit.prevent="search()">
                        <div
                            class="flex w-full items-center border-b border-gray-900 py-2"
                        >
                            <input
                                v-model="link"
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text"
                                placeholder="Ingrese Link o ID del Video Youtube..."
                            />
                            <button
                                class="flex-shrink-0 bg-gray-900 hover:bg-gray-700 border-gray-900 hover:border-gray-700 text-sm border-4 text-white py-1 px-2 rounded transition duration-900 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                type="submit"
                            >
                                <svg
                                    id="auxi"
                                    aria-hidden="true"
                                    data-prefix="fas"
                                    data-icon="search"
                                    class="w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                                    />
                                </svg>
                            </button>
                        </div>
                        <pre>Sólo videos sin licencia...</pre>
                    </form>
                </div>
                <div class="flex justify-center mt-8">
                    <svg
                        id="loading"
                        aria-hidden="true"
                        data-prefix="fas"
                        data-icon="spinner"
                        class="animate-spin text-purple-500 w-16 hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                    >
                        <path
                            fill="currentColor"
                            d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"
                        />
                    </svg>
                </div>
                <div class="flex justify-center mt-8">
                    <svg
                        id="success"
                        aria-hidden="true"
                        data-prefix="far"
                        data-icon="check-circle"
                        class="animate-ping text-green-500 w-16 hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                    >
                        <path
                            fill="currentColor"
                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"
                        />
                    </svg>
                </div>
                <div class="flex justify-center mt-8">
                    <svg
                        id="error"
                        aria-hidden="true"
                        data-prefix="fas"
                        data-icon="exclamation-circle"
                        class="animate-ping text-red-500 w-16 hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                    >
                        <path
                            fill="currentColor"
                            d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"
                        />
                    </svg>
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
            link: "",
            url: null
        };
    },
    components: { layout },

    methods: {
        search() {
            document.getElementById("success").classList.add("hidden");
            document.getElementById("error").classList.add("hidden");
            if (this.link.length >= 11) {
                document.getElementById("loading").classList.remove("hidden");
                axios
                    .post(
                        "api/youtube",
                        { link: this.link },
                        { responseType: "blob" }
                    )
                    .then(response => {
                        if (response.data.size > 0) {
                            const url = window.URL.createObjectURL(
                                new Blob([response.data])
                            );
                            const link = document.createElement("a");
                            link.href = url;
                            link.setAttribute(
                                "download",
                                "audio" + Date.now() + ".mp3"
                            );
                            document.body.appendChild(link);
                            link.click();
                            document
                                .getElementById("success")
                                .classList.remove("hidden");
                            document
                                .getElementById("loading")
                                .classList.add("hidden");
                        } else {
                            document
                                .getElementById("loading")
                                .classList.add("hidden");
                            document
                                .getElementById("error")
                                .classList.remove("hidden");
                        }
                    })
                    .catch(() => {
                        document
                            .getElementById("loading")
                            .classList.add("hidden");
                        document
                            .getElementById("error")
                            .classList.remove("hidden");
                    });
            }
        }
    }
};
</script>
