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
                <a
                    target="_blank"
                    class="flex justify-center font-bold text-purple-900"
                    href="https://futbollibre.online/es"
                >
                    Ver Partidos online - Fútbol Libre</a
                >
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
                    id="subir"
                    v-if="competition"
                    class="flex justify-center m-4"
                >
                    <img
                        :src="competition.strBadge"
                        class="w-16 md:w-24 lg:w-32"
                        alt="img"
                    />
                </div>
                <div v-if="competition" class="flex justify-center mx-2 px-2">
                    <nav class="flex flex-col sm:flex-row">
                        <button
                            :class="
                                selected == 'partidos'
                                    ? 'border-b-2 font-medium border-purple-500 text-purple-500'
                                    : ''
                            "
                            @click="selected = 'partidos'"
                            class="text-gray-600 py-4 px-6 block hover:text-purple-500 focus:outline-none "
                        >
                            Partidos</button
                        ><button
                            :class="
                                selected == 'posiciones'
                                    ? 'border-b-2 font-medium border-purple-500 text-purple-500'
                                    : ''
                            "
                            @click="selected = 'posiciones'"
                            class="text-gray-600 py-4 px-6 block hover:text-purple-500 focus:outline-none"
                        >
                            Tabla Posiciones
                        </button>
                    </nav>
                </div>
                <!-- Partidos -->
                <partidos
                    v-show="selected == 'partidos'"
                    :events="events"
                    :competition="competition"
                ></partidos>

                <posiciones
                    v-show="selected == 'posiciones'"
                    :competition="competition"
                    :tablaPos="tablaPos"
                ></posiciones>
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";
import partidos from "./ScoresMatches";
import posiciones from "./ScoresTablePositions";

export default {
    data() {
        return {
            competitions: [
                {
                    id: 4480,
                    name: "UEFA Champions League"
                },
                {
                    id: 4481,
                    name: "UEFA Europa League"
                },
                {
                    id: 4501,
                    name: "Copa Libertadores"
                },
                {
                    id: 4724,
                    name: "CONMEBOL Sudamericana"
                },
                {
                    id: 4328,
                    name: "Premier League - Inglaterra"
                },
                {
                    id: 4482,
                    name: "FA Cup"
                },
                {
                    id: 4570,
                    name: "Carabao Cup"
                },
                {
                    id: 4332,
                    name: "Serie A - Italia"
                },
                {
                    id: 4506,
                    name: "Coppa Italia"
                },
                {
                    id: 4331,
                    name: "Bundesliga - Alemania"
                },
                {
                    id: 4485,
                    name: "DFB Cup"
                },
                {
                    id: 4335,
                    name: "Primera Division - España"
                },
                {
                    id: 4483,
                    name: "Copa del Rey"
                },
                {
                    id: 4334,
                    name: "Ligue 1 - Francia"
                },
                {
                    id: 4484,
                    name: "Coupe de France"
                },
                {
                    id: 4406,
                    name: "Superliga Argentina"
                },
                {
                    id: 4500,
                    name: "Copa Argentina"
                },
                {
                    id: 4616,
                    name: "Primera B Nacional"
                },
                {
                    id: 4429,
                    name: "FIFA World Cup"
                },
                {
                    id: 4387,
                    name: "NBA"
                },
                {
                    id: 4546,
                    name: "EuroLeague Basketball"
                },
                {
                    id: 4370,
                    name: "F1"
                },
                {
                    id: 4407,
                    name: "MotoGP"
                },
                {
                    id: 4551,
                    name: "Super Rugby"
                }
            ],
            events: null,
            tablaPos: null,
            tableScorers: null,
            competition: null,
            selected: "partidos"
        };
    },

    components: { layout, partidos, posiciones },

    methods: {
        setCompetition(id) {
            this.selected = "";
            this.competition = null;
            this.tablaPos = null;
            this.events = null;
            axios.get("api/competition/" + id).then(response => {
                this.competition = response.data.leagues[0];
                this.lastEvents(id);
                this.tableCompetition();
                this.selected = "partidos";
            });
        },

        lastEvents(id) {
            axios.get("api/last-events/" + id).then(response => {
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
