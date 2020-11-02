<template>
    <div>
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
                    <div class="bg-purple-100 text-center font-semibold">
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
                        <p>
                            <a
                                class="text-blue-500 text-center cursor-pointer break-words font-mono text-xs pt-4 no-underline hover:underline"
                                target="_blank"
                                :href="item.strVideo"
                                >{{ item.strVideo }}</a
                            >
                        </p>
                        <p>
                            <button
                                class="font-bold text-purple-900"
                                v-if="competition.strSport == 'Motorsport'"
                                @click="
                                    showModal = true;
                                    auxEvent = item.idEvent;
                                "
                            >
                                Ver Más...
                            </button>
                        </p>
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

        <modal
            :eventoid="auxEvent"
            @cerrar-modal="cerrar"
            v-show="showModal"
        ></modal>
    </div>
</template>

<script>
import modal from "./ScoresModal";

export default {
    data() {
        return {
            showModal: false,
            auxEvent: null
        };
    },
    props: ["events", "competition"],
    components: { modal },
    methods: {
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

        cerrar() {
            this.showModal = false;
        }
    }
};
</script>
