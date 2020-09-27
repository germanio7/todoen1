<template>
    <div>
        <layout>
            <div class="flex-wrap justify-center">
                <div
                    class="flex justify-center font-mono text-4xl md:text-6xl text-gray-900"
                >
                    <div class="text-center">
                        Resultados Fútbol
                    </div>
                </div>
                <hr />
                <div class="flex-wrap md:flex justify-center px-6 pt-4 pb-2">
                    <span
                        @click="setScores(2021)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Premier League</span
                    >
                    <span
                        @click="setScores(2002)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Bundesliga</span
                    >
                    <span
                        @click="setScores(2014)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Primera Division</span
                    >
                    <span
                        @click="setScores(2015)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Ligue 1</span
                    >
                    <span
                        @click="setScores(2019)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Serie A</span
                    >
                    <span
                        @click="setScores(2001)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#UEFA Champions League</span
                    >
                </div>
                <hr />
                <div id="esqueleto" hidden>
                    <div class="grid gap-6 grid-cols-1 md:grid-cols-2 m-2">
                        <div
                            v-for="item in 9"
                            class="border bg-white border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto m-4"
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
                                        <div
                                            class="h-4 bg-gray-400 rounded"
                                        ></div>
                                        <div
                                            class="h-4 bg-gray-400 rounded w-5/6"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Partidos -->
                <div
                    class="grid grid-cols-1 md:grid-cols-2 justify-center items-center"
                >
                    <div
                        class="flex justify-center"
                        v-for="item in scores"
                        :key="item.id"
                    >
                        <div
                            @click="showModal(item)"
                            class="w-full border-l-4 border-purple-500 cursor-pointer rounded overflow-hidden shadow-lg my-4 md:w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mx-2"
                        >
                            <div
                                class="flex justify-between bg-white rounded-lg p-6 items-center"
                            >
                                <div class="text-left">
                                    <h2 class="text-base">
                                        {{ item.homeTeam.name }}
                                    </h2>
                                </div>
                                <b>
                                    {{ item.score.fullTime.homeTeam }}
                                </b>
                                <div class="text-center">
                                    <b>-</b>
                                </div>
                                <b>{{ item.score.fullTime.awayTeam }} </b>
                                <div class="text-right">
                                    <h2 class="text-base">
                                        {{ item.awayTeam.name }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <!-- tabla Pos-->
                <div
                    v-if="tablaPos"
                    class="flex justify-center overflow-x-auto my-4 mx-2"
                >
                    <table class="table-auto bg-white">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Pos</th>
                                <th class="px-4 py-2">Equipo</th>
                                <th class="px-4 py-2">J</th>
                                <th class="px-4 py-2">G</th>
                                <th class="px-4 py-2">E</th>
                                <th class="px-4 py-2">P</th>
                                <th class="px-4 py-2">Puntos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in tablaPos" :key="item.id">
                                <td class="border px-4 py-2">
                                    {{ item.position }}
                                </td>
                                <td class="flex border px-4 py-2">
                                    <img
                                        class="w-8 pr-2"
                                        :src="item.team.crestUrl"
                                        alt=""
                                    />
                                    <span class="">
                                        {{ item.team.name }}
                                    </span>
                                </td>
                                <td class="border px-4 py-2">
                                    {{ item.playedGames }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ item.won }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ item.draw }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ item.lost }}
                                </td>
                                <td class="border text-center px-4 py-2">
                                    {{ item.points }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr />
                <!-- goleadores -->
                <div
                    v-if="tableScorers"
                    class="flex justify-center overflow-x-auto mt-4 mx-2"
                >
                    <table class="table-auto bg-white">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Jugador</th>
                                <th class="px-4 py-2">Equipo</th>
                                <th class="px-4 py-2">Goles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in tableScorers" :key="item.id">
                                <td class="border px-4 py-2">
                                    {{ item.player.name }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ item.team.name }}
                                </td>
                                <td class="border text-center px-4 py-2">
                                    {{ item.numberOfGoals }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </layout>

        <!-- modal -->
        <div
            v-if="match"
            id="modalMatch"
            class="fixed z-10 inset-0 overflow-y-auto"
        >
            <div
                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
            >
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span
                    class="hidden sm:inline-block sm:align-middle sm:h-screen"
                ></span
                >&#8203;
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog"
                    aria-modal="true"
                    aria-labelledby="modal-headline"
                >
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div
                                class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"
                            >
                                <h3
                                    class="text-lg leading-6 font-medium text-gray-900"
                                    id="modal-headline"
                                >
                                    {{ match.head2head.homeTeam.name }} -
                                    {{ match.head2head.awayTeam.name }}
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm leading-5 text-gray-500">
                                        {{ match.match.score }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                    >
                        <span
                            class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto"
                        >
                            <button
                                @click="closeModal()"
                                type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                            >
                                Cerrar
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import layout from "./Shared/Layout";

export default {
    data() {
        return {
            scores: {},
            match: null,
            tablaPos: null,
            tableScorers: null
        };
    },

    components: { layout },

    // beforeMount() {
    //     this.setScores();
    // },

    methods: {
        setScores(id) {
            this.scores = null;
            this.tablaPos = null;
            let eskeletor = document.getElementById("esqueleto");
            eskeletor.removeAttribute("hidden");
            this.scores = null;
            axios.get("api/scores/" + id).then(response => {
                setTimeout(() => {
                    eskeletor.setAttribute("hidden", true);
                    this.scores = response.data.matches;
                }, 500);
            });
            this.standings(id);
            this.scorers(id);
        },

        imagen(id) {
            axios.get("api/teams/" + id).then(response => {
                return response.data;
            });
        },

        showModal(item) {
            axios.get("api/match/" + item.id).then(response => {
                this.match = response.data;
            });
        },

        standings(id) {
            axios
                .get("api/standings/" + id)
                .then(response => {
                    this.tablaPos = response.data;
                })
                .catch(() => {
                    console.log("No se cargó correctamente");
                });
        },

        scorers(id) {
            axios
                .get("api/scorers/" + id)
                .then(response => {
                    this.tableScorers = response.data;
                })
                .catch(() => {
                    console.log("No se cargó correctamente");
                });
        },

        closeModal() {
            this.match = null;
        }
    }
};
</script>

<style></style>
