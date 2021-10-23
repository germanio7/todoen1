<template>
    <div>
        <layout>
            <div class="flex flex-col w-full mb-2 text-left lg:text-center">
                <h1
                    class=" text-2xl text-center font-semibold text-blue-800 title-font"
                >
                    Clima
                </h1>
            </div>
            <hr />
            <div class="flex justify-center items-center ">
                <div
                    class="flex-wrap bg-white rounded overflow-hidden shadow-lg m-4 p-4"
                >
                    <form
                        class="w-full max-w-sm"
                        @submit.prevent="searchCity()"
                    >
                        <div
                            class="flex w-full items-center border-b border-gray-900 py-2"
                        >
                            <input
                                v-model="city"
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text"
                                placeholder="Ingresar cuidad..."
                                @keydown="limpiar()"
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
                    </form>

                    <ul
                        v-if="city"
                        class="max-w-sm absolute bg-gray-200 z-10 -ml-4"
                    >
                        <div
                            class="max-w-sm"
                            v-for="item in res"
                            :key="item.id"
                        >
                            <li
                                class="cursor-pointer p-2"
                                @click="
                                    selected = item.observation[0];
                                    res = null;
                                    city = '';
                                    latitude = selected.latitude;
                                    longitude = selected.longitude;
                                    sevenDays();
                                "
                            >
                                <pre class="truncate"
                                    >{{ item.city }}, {{ item.state }}, {{
                                        item.country
                                    }}</pre
                                >
                            </li>
                            <hr />
                        </div>
                    </ul>
                </div>
            </div>
            <hr />
            <div
                id="animacion"
                v-if="selected || resAux"
                class="flex-wrap justify-center rounded overflow-hidden  m-4 p-4 relative"
            >
                <div class="block lg:flex justify-center">
                    <div v-if="resAux">
                        <card-weather-aux :res="resAux"></card-weather-aux>
                    </div>
                    <div v-if="selected">
                        <card-weather
                            :res="selected"
                            :days="days"
                        ></card-weather>
                    </div>
                </div>
            </div>

            <hr />
            <p class="text-center text-gray-500 text-sm mt-4">
                &copy;2021
                <a target="_blank" href="https://github.com/germanio7"
                    >Germanio7</a
                >
            </p>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";
import CardWeather from "./CardWeather";
import CardWeatherAux from "./CardWeatherAux";
import axios from "axios";

export default {
    data() {
        return {
            city: "villa angela",
            api_key: process.env.MIX_HERE_WEATHER,
            selected: null,
            res: null,
            resAux: null,
            days: null,
            latitude: -27.57383,
            longitude: -60.71526,
            image: null
        };
    },
    components: { layout, CardWeather, CardWeatherAux },

    mounted() {
        this.defaultCity();
    },

    methods: {
        auxiliar() {
            document.getElementById("auxi").classList.add("animate-spin");
            axios.post("api/auxiliar", { city: this.city }).then(response => {
                this.resAux = response.data;

                document
                    .getElementById("auxi")
                    .classList.remove("animate-spin");
            });
        },
        defaultCity() {
            document.getElementById("auxi").classList.add("animate-spin");
            axios
                .post("api/default-city", { city: this.city })
                .then(response => {
                    this.selected =
                        response.data.observations.location[0].observation[0];
                    this.latitude =
                        response.data.observations.location[0].latitude;
                    this.longitude =
                        response.data.observations.location[0].longitude;
                    this.sevenDays();
                    document
                        .getElementById("auxi")
                        .classList.remove("animate-spin");
                })
                .catch(() => {
                    console.log("Hubo un problema...");
                    this.auxiliar();
                });
        },
        searchCity() {
            document.getElementById("auxi").classList.add("animate-spin");
            axios
                .post("api/search-city", { city: this.city })
                .then(response => {
                    this.res = response.data.observations.location;
                    this.resAux = null;
                    document
                        .getElementById("auxi")
                        .classList.remove("animate-spin");
                })
                .catch(() => {
                    this.auxiliar();
                });
        },
        sevenDays() {
            axios
                .post("api/seven-days", {
                    latitude: this.selected.latitude,
                    longitude: this.selected.longitude
                })
                .then(response => {
                    this.days =
                        response.data.dailyForecasts.forecastLocation.forecast;
                });
        },
        limpiar() {
            this.res = null;
            this.resAux = null;
        }
    }
};
</script>
