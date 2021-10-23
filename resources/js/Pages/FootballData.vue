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
                            Tabla Posiciones</button
                        ><button
                            :class="
                                selected == 'goleadores'
                                    ? 'border-b-2 font-medium border-purple-500 text-purple-500'
                                    : ''
                            "
                            @click="selected = 'goleadores'"
                            class="text-gray-600 py-4 px-6 block hover:text-purple-500 focus:outline-none"
                        >
                            Tabla Goleadores
                        </button>
                    </nav>
                </div>
                <!-- Partidos -->
                <matches-component
                    v-show="selected == 'partidos'"
                    :competition="competition"
                    :currentMatchday="currentMatchday"
                    :matches="matches"
                ></matches-component>

                <!-- Posiciones -->
                <positions-component
                    v-show="selected == 'posiciones'"
                    :tablaPos="tablaPos"
                ></positions-component>

                <!-- Goleadores -->
                <scorers-component
                    v-show="selected == 'goleadores'"
                    :tableScorers="tableScorers"
                ></scorers-component>
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";
import MatchesComponent from "./MatchesComponent";
import PositionsComponent from "./PositionsComponent";
import ScorersComponent from "./ScorersComponent";

export default {
    data() {
        return {
            matches: null,
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
            tablaPos: null,
            tableScorers: null,
            competition: null,
            currentMatchday: null,
            selected: "partidos"
        };
    },

    components: {
        layout,
        MatchesComponent,
        PositionsComponent,
        ScorersComponent
    },

    methods: {
        setCompetition(id) {
            this.selected = "";
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
                    setTimeout(() => {
                        this.tableCompetition();
                    }, 500);
                    setTimeout(() => {
                        this.scorers();
                    }, 500);
                    this.selected = "partidos";
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
