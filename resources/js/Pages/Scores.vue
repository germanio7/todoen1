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
                        @click="setCompetition(4328)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Premier League</span
                    >
                    <span
                        @click="setCompetition(4482)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#FA Cup</span
                    >
                    <span
                        @click="setCompetition(4570)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Carabao Cup</span
                    >
                    <span
                        @click="setCompetition(4331)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Bundesliga</span
                    >
                    <span
                        @click="setCompetition(4485)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#DFB Cup</span
                    >
                    <span
                        @click="setCompetition(4335)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#La Liga Santander</span
                    >
                    <span
                        @click="setCompetition(4483)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Copa del Rey</span
                    >
                    <span
                        @click="setCompetition(4334)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Ligue 1</span
                    >
                    <span
                        @click="setCompetition(4484)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Coupe de France</span
                    >
                    <span
                        @click="setCompetition(4332)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Serie A</span
                    >
                    <span
                        @click="setCompetition(4506)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Coppa Italia</span
                    >
                    <span
                        @click="setCompetition(4406)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Superliga Argentina</span
                    >
                    <span
                        @click="setCompetition(4500)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Copa Argentina</span
                    >
                    <span
                        @click="setCompetition(4616)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Nacional B</span
                    >
                    <span
                        @click="setCompetition(4480)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#UEFA Champions League</span
                    >
                    <span
                        @click="setCompetition(4481)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#UEFA Europa League</span
                    >
                    <span
                        @click="setCompetition(4501)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Copa Libertadores</span
                    >
                    <span
                        @click="setCompetition(4724)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#CONMEBOL Sudamericana</span
                    >
                    <span
                        @click="setCompetition(4429)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#FIFA World Cup</span
                    >
                    <span
                        @click="setCompetition(4387)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#NBA</span
                    >
                    <span
                        @click="setCompetition(4546)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#EuroLeague Basketball</span
                    >
                    <span
                        @click="setCompetition(4734)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#LNB</span
                    >
                    <span
                        @click="setCompetition(4370)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#F1</span
                    >
                    <span
                        @click="setCompetition(4407)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#MotoGP</span
                    >
                    <span
                        @click="setCompetition(4409)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#World Rally Championship</span
                    >
                    <span
                        @click="setCompetition(4464)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#ATP</span
                    >
                    <span
                        @click="setCompetition(4443)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#UFC</span
                    >
                    <span
                        @click="setCompetition(4551)"
                        class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >#Super Rugby</span
                    >
                </div>
                <hr />
                <div
                    id="subir"
                    v-if="competition"
                    class="flex justify-center m-4"
                >
                    <img :src="competition.strBadge" class="w-32" alt="img" />
                </div>
                <!-- Partidos -->
                <div
                    v-if="events"
                    class="grid grid-cols-1 md:grid-cols-2 justify-center items-center"
                >
                    <div
                        class="flex justify-center"
                        v-for="item in events"
                        :key="item.id"
                    >
                        <div
                            class="w-full border-l-4 rounded-lg border-purple-500 overflow-hidden shadow-lg my-4 md:w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mx-2"
                        >
                            <div
                                v-if="
                                    competition.strSport == 'Tennis' ||
                                        competition.strSport == 'Motorsport' ||
                                        competition.strSport == 'Fighting'
                                "
                                class="text-center text-base bg-white  p-6"
                            >
                                {{ item.strEvent }}
                            </div>

                            <div
                                v-else
                                class="flex justify-between bg-white  p-6 items-center"
                            >
                                <div class="text-left">
                                    <h2 class="text-base">
                                        {{ item.strHomeTeam }}
                                    </h2>
                                </div>
                                <b>
                                    {{ item.intHomeScore }}
                                </b>
                                <div class="text-center">
                                    <b>-</b>
                                </div>
                                <b>{{ item.intAwayScore }} </b>
                                <div class="text-right">
                                    <h2 class="text-base">
                                        {{ item.strAwayTeam }}
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="bg-purple-100 text-center font-semibold"
                            >
                                <p v-if="item.strStatus == 'Match Finished'">
                                    Finalizado
                                </p>
                                <p v-if="item.strStatus == 'Halftime'">
                                    Medio Tiempo
                                </p>
                                <p>
                                    <span v-if="item.strSport == 'Soccer'">
                                        Round Nº {{ item.intRound }} |
                                    </span>
                                    {{ item.dateEvent }}
                                </p>
                                <a
                                    class="text-blue-500 text-center cursor-pointer break-words font-mono text-xs pt-4 no-underline hover:underline"
                                    target="_blank"
                                    :href="item.strVideo"
                                    >{{ item.strVideo }}</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="competition" class="flex justify-center">
                    <button
                        @click="lastEvents(competition.idLeague)"
                        class="bg-purple-500 w-auto hover:bg-purple-400 text-white font-bold py-2 px-4 border-b-4 border-purple-700 hover:border-purple-500 rounded  m-4 rounded-l"
                    >
                        Últimos eventos
                    </button>
                    <button
                        @click="nextEvents(competition.idLeague)"
                        class="bg-purple-500 w-auto hover:bg-purple-400 text-white font-bold py-2 px-4 border-b-4 border-purple-700 hover:border-purple-500 rounded  m-4 rounded-r"
                    >
                        Próximos eventos
                    </button>
                </div>
                <div v-if="competition" class="flex justify-center m-4">
                    <img :src="competition.strBanner" class="w-1/2" />
                </div>

                <div
                    v-if="
                        tablaPos &&
                            competition.idCup != 1 &&
                            competition.strSport == 'Soccer'
                    "
                    class="flex justify-center bg-gray-900 rounded overflow-hidden shadow-lg m-4 p-4 relative"
                >
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
                                <tr v-for="(value, key, index) in tablaPos">
                                    <td class="border text-center px-4 py-2">
                                        {{ key + 1 }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ value.name }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ value.played }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ value.win }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ value.draw }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ value.loss }}
                                    </td>
                                    <td class="border text-center px-4 py-2">
                                        {{ value.total }}
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
            events: null,
            tablaPos: null,
            tableScorers: null,
            competition: null
        };
    },

    components: { layout },

    methods: {
        setCompetition(id) {
            this.competition = null;
            this.tablaPos = null;
            this.events = null;
            axios.get("api/competition/" + id).then(response => {
                this.competition = response.data.leagues[0];
                this.tableCompetition();
            });
            this.lastEvents(id);
        },

        lastEvents(id) {
            axios.get("api/last-events/" + id).then(response => {
                this.events = response.data.events;
                this.scrolltoview();
            });
        },

        nextEvents(id) {
            axios.get("api/next-events/" + id).then(response => {
                this.events = response.data.events;
                this.scrolltoview();
            });
        },

        scrolltoview() {
            let aux = document.getElementById("subir");
            aux.scrollIntoView();
        },

        tableCompetition() {
            axios
                .post("api/table-competition", {
                    id: this.competition.idLeague,
                    season: this.competition.strCurrentSeason
                })
                .then(response => {
                    this.tablaPos = response.data.table;
                });
        }
    }
};
</script>
