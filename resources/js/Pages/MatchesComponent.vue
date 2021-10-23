<template>
    <div>
        <div
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
                    <div class="bg-purple-100 text-center font-semibold">
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
                            <span> Fecha Nº {{ item.matchday }} | </span>
                            {{ new Date(item.utcDate).toLocaleString() }}
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
    </div>
</template>

<script>
export default {
    data() {
        return {
            //
        };
    },
    props: ["competition", "currentMatchday", "matches"],
    methods: {
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
        }
    }
};
</script>
