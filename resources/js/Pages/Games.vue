<template>
    <div>
        <layout>
            <div
                class="flex justify-center font-mono text-4xl md:text-6xl text-gray-900"
            >
                Juegos
            </div>
            <div class="flex-wrap md:flex justify-center px-6 pt-4 pb-2">
                <span
                    v-for="item in games"
                    :key="item.id"
                    @click="setGame(item.url)"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2"
                    >#{{ item.game }}</span
                >
            </div>
            <div class="flex justify-center">
                <iframe
                    id="juego"
                    src=""
                    width="800"
                    height="500"
                    frameborder="no"
                    allowfullscreen="true"
                    webkitallowfullscreen="true"
                    mozallowfullscreen="true"
                    scrolling="no"
                ></iframe>
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";
export default {
    data() {
        return {
            games: [
                {
                    game: "Mortal Kombat 3",
                    url:
                        "https://www.retrogames.cc/embed/29633-mortal-kombat-3-usa.html"
                },
                {
                    game: "Super Mario Bros.",
                    url:
                        "https://www.retrogames.cc/embed/16843-super-mario-bros-japan-usa.html"
                }
            ]
        };
    },
    components: { layout },
    methods: {
        setGame(game) {
            let aux = document.getElementById("juego");
            aux.setAttribute("src", game);
        }
    }
};
</script>
<style></style>
