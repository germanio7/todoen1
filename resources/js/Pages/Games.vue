<template>
    <div>
        <layout>
            <div
                class="flex justify-center font-mono text-4xl md:text-6xl text-gray-900"
            >
                Juegos
            </div>
            <div class="hidden lg:flex justify-center">
                <div class="inline-block relative w-64">
                    <select
                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    >
                        <option disabled selected>Seleccionar juego</option>
                        <option
                            v-for="item in games"
                            :key="item.id"
                            @click="setGame(item.url)"
                            >{{ item.game }}</option
                        >
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                    >
                        <svg
                            class="fill-current h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex-wrap lg:hidden justify-center px-6 pt-4 pb-2">
                <span
                    v-for="item in games"
                    :key="item.id"
                    @click="setGame(item.url)"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2"
                    >{{ item.game }}</span
                >
            </div>
            <div class="flex justify-center mt-4">
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
                    game: "After Burner II",
                    url:
                        "https://www.retrogames.cc/embed/29861-after-burner-ii-usa-europe.html"
                },
                {
                    game: "ATP Tour Championship Tennis",
                    url:
                        "https://www.retrogames.cc/embed/30481-atp-tour-championship-tennis-usa.html"
                },
                {
                    game: "Bare Knuckle (Streets of Rage)",
                    url:
                        "https://www.retrogames.cc/embed/30497-bare-knuckle-ikari-no-tetsuken-streets-of-rage-world.html"
                },
                {
                    game: "Comix Zone",
                    url:
                        "https://www.retrogames.cc/embed/29773-comix-zone-usa.html"
                },
                {
                    game: "Contra",
                    url: "https://www.retrogames.cc/embed/16841-contra-usa.html"
                },
                {
                    game: "Demolition Man",
                    url:
                        "https://www.retrogames.cc/embed/30488-demolition-man-usa-europe.html"
                },
                {
                    game: "Desert Strike",
                    url:
                        "https://www.retrogames.cc/embed/18464-desert-strike-usa-europe.html"
                },
                {
                    game: "Earthworm Jim",
                    url:
                        "https://www.retrogames.cc/embed/30211-earthworm-jim-usa.html"
                },
                {
                    game: "FIFA International Soccer",
                    url:
                        "https://www.retrogames.cc/embed/29938-fifa-international-soccer-usa-europe-en-fr-de-es.html"
                },
                {
                    game: "FIFA Soccer 97",
                    url:
                        "https://www.retrogames.cc/embed/30117-fifa-soccer-97-usa-europe-en-fr-de-es-it-sv.html"
                },
                {
                    game: "FIFA 98 - Road to World Cup",
                    url:
                        "https://www.retrogames.cc/embed/30223-fifa-98-road-to-world-cup-europe-en-fr-es-it-sv.html"
                },
                {
                    game: "International Superstar Soccer Deluxe",
                    url:
                        "https://www.retrogames.cc/embed/30521-international-superstar-soccer-deluxe-europe.html"
                },
                {
                    game: "Mortal Kombat II",
                    url:
                        "https://www.retrogames.cc/embed/30510-mortal-kombat-ii-world.html"
                },
                {
                    game: "Mortal Kombat 3",
                    url:
                        "https://www.retrogames.cc/embed/29633-mortal-kombat-3-usa.html"
                },
                {
                    game: "NBA Hang Time",
                    url:
                        "https://www.retrogames.cc/embed/28432-nba-hang-time-usa.html"
                },
                {
                    game: "NBA Jam Tournament Edition",
                    url:
                        "https://www.retrogames.cc/embed/30412-nba-jam-tournament-edition-world.html"
                },
                {
                    game: "Rock n' Roll Racing",
                    url:
                        "https://www.retrogames.cc/embed/28493-rock-n-roll-racing-usa.html"
                },
                {
                    game: "Super Mario Bros.",
                    url:
                        "https://www.retrogames.cc/embed/16843-super-mario-bros-japan-usa.html"
                },
                {
                    game: "Super Mario Kart",
                    url:
                        "https://www.retrogames.cc/embed/16887-super-mario-kart-usa.html"
                },
                {
                    game: "Taz-Mania",
                    url:
                        "https://www.retrogames.cc/embed/19017-taz-mania-world.html"
                },
                {
                    game: "Tiny Toon Adventures",
                    url:
                        "https://www.retrogames.cc/embed/28522-tiny-toon-adventures-buster-s-hidden-treasure-usa.html"
                },
                {
                    game: "Ultimate Mortal Kombat 3",
                    url:
                        "https://www.retrogames.cc/embed/16951-ultimate-mortal-kombat-3-usa.html"
                },
                {
                    game: "Vectorman",
                    url:
                        "https://www.retrogames.cc/embed/28386-vectorman-usa-europe.html"
                }
            ]
        };
    },
    components: { layout },
    methods: {
        setGame(game) {
            let aux = document.getElementById("juego");
            aux.setAttribute("src", game);
            aux.scrollIntoView();
        }
    }
};
</script>
<style></style>
