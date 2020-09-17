<template>
    <div>
        <layout>
            <div class="flex justify-center">
                <div class="grid grid-cols-2 justify-center items-center">
                    <div v-for="item in scores" :key="item.id">
                        <div
                            class="w-full rounded overflow-hidden shadow-lg my-4 md:w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
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
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";

export default {
    data() {
        return {
            scores: {}
        };
    },

    components: { layout },

    beforeMount() {
        this.setScores();
    },

    methods: {
        setScores() {
            axios.get("api/scores").then(response => {
                this.scores = response.data.matches;
            });
        },

        imagen(id) {
            axios.get("api/teams/" + id).then(response => {
                return response.data;
            });
        }
    }
};
</script>

<style></style>
