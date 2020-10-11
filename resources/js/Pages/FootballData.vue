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
                    <div v-for="item in competitions" :key="item.id">
                        <span
                            @click="setCompetition(item.id)"
                            class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            >#{{ item.name }}</span
                        >
                    </div>
                </div>
                <hr />
                <div
                    v-if="competition"
                    class="text-center font-mono text-2xl md:text-xl text-gray-900"
                >
                    {{ competition.name }}
                </div>
                <!-- Partidos -->
                <div
                    v-if="matches"
                    class="grid grid-cols-1 md:grid-cols-2 justify-center items-center"
                >
                    <div
                        class="flex justify-center"
                        v-for="item in matches"
                        :key="item.id"
                    >
                        <div
                            class="w-full border-l-4 rounded-lg border-purple-500 overflow-hidden shadow-lg my-4 md:w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mx-2"
                        >
                            <div
                                class="flex justify-between bg-white  p-6 items-center"
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
                            <div
                                class="bg-purple-100 text-center font-semibold"
                            >
                                <p v-if="item.status == 'FINISHED'">
                                    Finalizado
                                </p>
                                <p v-if="item.status == 'POSTPONED'">
                                    Aplazado
                                </p>
                                <p v-if="item.status == 'CANCELED'">
                                    Cancelado
                                </p>
                                <p v-if="item.status == 'SUSPENDED'">
                                    Suspendido
                                </p>
                                <p v-if="item.status == 'IN_PLAY'">
                                    En juego
                                </p>
                                <p v-if="item.status == 'PAUSED'">
                                    En pausa
                                </p>
                                <p v-if="item.status == 'AWARDED'">
                                    Awarded
                                </p>
                                <p v-if="item.status == 'SCHEDULED'">
                                    Programado
                                </p>
                                <p>
                                    <span>
                                        Fecha Nº {{ item.matchday }} |
                                    </span>
                                    {{
                                        new Date(item.utcDate).toLocaleString()
                                    }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="competition" class="flex justify-center mx-2 px-2">
                    <button
                        @click="lastRound()"
                        class="bg-purple-500 w-auto hover:bg-purple-400 text-white font-bold py-2 px-4 border-b-4 border-purple-700 hover:border-purple-500 rounded m-4 rounded-l"
                    >
                        Fecha Anterior
                    </button>
                    <button
                        @click="currentRound()"
                        class="bg-purple-500 w-auto hover:bg-purple-400 text-white font-bold py-2 px-4 border-b-4 border-purple-700 hover:border-purple-500 rounded m-4 rounded-l"
                    >
                        Fecha En Curso
                    </button>
                    <button
                        @click="nextRound()"
                        class="bg-purple-500 w-auto hover:bg-purple-400 text-white font-bold py-2 px-4 border-b-4 border-purple-700 hover:border-purple-500 rounded m-4 rounded-r"
                    >
                        Próxima Fecha
                    </button>
                </div>
                <div
                    v-if="tablaPos"
                    class="grid grid-cols-1 lg:grid-cols-2 bg-gray-900 rounded overflow-hidden shadow-lg m-4 p-4 relative"
                >
                    <div v-for="posiciones in tablaPos" :key="posiciones.id">
                        <!-- tabla Pos-->
                        <div class="overflow-x-auto my-4 mx-2">
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
                                    <tr
                                        v-for="item in posiciones.table"
                                        :key="item.id"
                                    >
                                        <td class="border px-4 py-2">
                                            {{ item.position }}
                                        </td>
                                        <td class="border px-4 py-2">
                                            {{ item.team.name }}
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
                                        <td
                                            class="border text-center px-4 py-2"
                                        >
                                            {{ item.points }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

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
            competitions: [
                {
                    id: 2001,
                    name: "UEFA Champions League"
                },
                {
                    id: 2021,
                    name: "Premier League - Inglaterra"
                },
                {
                    id: 2019,
                    name: "Serie A - Italia"
                },
                {
                    id: 2002,
                    name: "Bundesliga - Alemania"
                },
                {
                    id: 2014,
                    name: "Primera Division - España"
                },
                {
                    id: 2015,
                    name: "Ligue 1 - Francia"
                },
                {
                    id: 2003,
                    name: "Eredivisie - Holanda"
                },
                {
                    id: 2017,
                    name: "Primeira Liga - Portugal"
                },
                {
                    id: 2013,
                    name: "Série A - Brasil"
                },
                {
                    id: 2016,
                    name: "Championship - Inglaterra"
                },
                {
                    id: 2018,
                    name: "European-Cup of Nations"
                }
            ],
            matches: null,
            tablaPos: null,
            tableScorers: null,
            competition: null,
            currentMatchday: null
        };
    },

    components: { layout },

    methods: {
        setCompetition(id) {
            this.matches = null;
            this.tablaPos = null;
            this.tableScorers = null;
            this.competition = null;
            this.currentMatchday = null;
            axios
                .get("api/scores/" + id)
                .then(response => {
                    this.competition = response.data.competition;
                    this.matches = response.data.matches;
                    this.currentMatchday = response.data.filters.matchday;
                    this.tableCompetition();
                    this.scorers();
                })
                .catch(() => {
                    console.log("Ha ocurrido un error..-");
                });
        },

        lastRound() {
            axios
                .post("api/partidos", {
                    id: this.competition.id,
                    round: Number(this.currentMatchday) - 1
                })
                .then(response => {
                    this.matches = response.data.matches;
                })
                .catch(() => {
                    console.log("Ha ocurrido un error..-");
                });
        },

        currentRound() {
            axios
                .post("api/partidos", {
                    id: this.competition.id,
                    round: this.currentMatchday
                })
                .then(response => {
                    this.matches = response.data.matches;
                })
                .catch(() => {
                    console.log("Ha ocurrido un error..-");
                });
        },

        nextRound() {
            axios
                .post("api/partidos", {
                    id: this.competition.id,
                    round: Number(this.currentMatchday) + 1
                })
                .then(response => {
                    this.matches = response.data.matches;
                })
                .catch(() => {
                    console.log("Ha ocurrido un error..-");
                });
        },

        tableCompetition() {
            axios
                .get("api/standings/" + this.competition.id)
                .then(response => {
                    this.tablaPos = response.data;
                })
                .catch(() => {
                    console.log("Ha ocurrido un error..-");
                });
        },

        scorers(id) {
            axios
                .get("api/scorers/" + this.competition.id)
                .then(response => {
                    this.tableScorers = response.data;
                })
                .catch(() => {
                    console.log("Ha ocurrido un error..-");
                });
        }
    }
};
</script>
