<template>
    <div>
        <layout>
            <div class="flex-wrap justify-center">
                <div
                    class="flex justify-center font-mono text-4xl md:text-6xl text-gray-900"
                >
                    <div class="text-center">
                        Resultados Deportivos
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
                            class="border-l-4 border-purple-500 bg-white border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto m-4"
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
                    v-if="comp"
                    class="text-base md:text-xl font-bold text-center p-2"
                >
                    <pre>  {{ comp }} |  Fecha Nº {{ fec }}</pre>
                </div>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 justify-center items-center"
                >
                    <div
                        class="flex justify-center"
                        v-for="item in scores"
                        :key="item.id"
                    >
                        <div
                            class="w-full border-l-4 border-purple-500 rounded overflow-hidden shadow-lg my-4 md:w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mx-2"
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
                            <div class="text-center font-semibold">
                                {{ item.status }}
                            </div>
                            <div class="text-center font-semibold">
                                {{ new Date(item.utcDate) }}
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div
                    v-if="tablaPos || tableScorers"
                    class="block lg:flex bg-gray-900 justify-around rounded overflow-hidden shadow-lg m-4 p-4 relative"
                >
                    <!-- tabla Pos-->
                    <div v-if="tablaPos" class="overflow-x-auto my-4 mx-2">
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
                                    <td class="border text-center px-4 py-2">
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
                    <div v-if="tableScorers" class="overflow-x-auto mt-4 mx-2">
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
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";

export default {
    data() {
        return {
            fec: "",
            comp: "",
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
            this.fec = "";
            this.scores = null;
            this.tablaPos = null;
            let eskeletor = document.getElementById("esqueleto");
            eskeletor.removeAttribute("hidden");
            this.scores = null;
            axios.get("api/scores/" + id).then(response => {
                setTimeout(() => {
                    eskeletor.setAttribute("hidden", true);
                    this.fec = response.data.filters.matchday;
                    this.comp = response.data.competition.name;
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
        }
    }
};
</script>

<style></style>
