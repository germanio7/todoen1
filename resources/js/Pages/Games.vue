<template>
    <div>
        <layout>
            <div
                class="flex justify-center font-mono text-4xl md:text-6xl text-gray-900"
            >
                Juegos
            </div>
            <hr />
            <div class="flex-wrap justify-center px-6 pt-4 pb-2">
                <span
                    v-for="item in games"
                    :key="item.id"
                    @click="setGame(item.url)"
                    class="cursor-pointer inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-purple-700 mr-2 mb-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >#{{ item.game }}</span
                >
            </div>
            <hr />
            <div class="flex justify-center mt-4 relative z-20">
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
            <br />

            <hr />
            <p class="text-center text-gray-500 text-sm mt-4">
                &copy;2021
                <a target="_blank" href="https://github.com/germanio7"
                    >Germanio7</a
                >
            </p>
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
                    game: "Aladdin",
                    url:
                        "https://www.retrogames.cc/embed/16687-aladdin-usa.html"
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
                    game: "Balloon Fight",
                    url:
                        "https://www.retrogames.cc/embed/19300-balloon-fight-usa.html"
                },
                {
                    game: "Battle City",
                    url:
                        "https://www.retrogames.cc/embed/16882-battle-city-japan.html"
                },
                {
                    game: "Bomberman ",
                    url:
                        "https://www.retrogames.cc/embed/20411-bomberman-usa.html"
                },
                {
                    game: "Boogerman",
                    url:
                        "https://www.retrogames.cc/embed/30083-boogerman-a-pick-and-flick-adventure-usa.html"
                },
                {
                    game: "Circus Charlie",
                    url:
                        "https://www.retrogames.cc/embed/21342-circus-charlie-japan.html"
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
                    game: "Donkey Kong",
                    url:
                        "https://www.retrogames.cc/embed/17901-donkey-kong-world-rev-a.html"
                },
                {
                    game: "Donkey Kong Country",
                    url:
                        "https://www.retrogames.cc/embed/18709-donkey-kong-country-usa-rev-a.html"
                },
                {
                    game: "Doom",
                    url: "https://www.retrogames.cc/embed/22868-doom-usa.html"
                },
                {
                    game: "Earthworm Jim",
                    url:
                        "https://www.retrogames.cc/embed/30211-earthworm-jim-usa.html"
                },
                {
                    game: "Excitebike",
                    url:
                        "https://www.retrogames.cc/embed/20552-excitebike-japan-usa.html"
                },
                {
                    game: "FIFA International Soccer",
                    url:
                        "https://www.retrogames.cc/embed/29938-fifa-international-soccer-usa-europe-en-fr-de-es.html"
                },
                {
                    game: "FIFA Soccer 96",
                    url:
                        "https://www.retrogames.cc/embed/28457-fifa-soccer-96-usa-europe-en-fr-de-es-it-sv.html"
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
                    game: "General Chaos",
                    url:
                        "https://www.retrogames.cc/embed/30081-general-chaos-usa-europe.html"
                },
                {
                    game: "Hudson's Adventure Island",
                    url:
                        "https://www.retrogames.cc/embed/20528-hudson-s-adventure-island-usa.html"
                },
                {
                    game: "Ice Climber",
                    url:
                        "https://www.retrogames.cc/embed/17897-ice-climber-usa-europe.html"
                },
                {
                    game: "International Superstar Soccer Deluxe",
                    url:
                        "https://www.retrogames.cc/embed/30521-international-superstar-soccer-deluxe-europe.html"
                },
                {
                    game: "Jurassic Park",
                    url:
                        "https://www.retrogames.cc/embed/30179-jurassic-park-usa.html"
                },
                {
                    game: "Killer Instinct",
                    url:
                        "https://www.retrogames.cc/embed/17355-killer-instinct-usa.html"
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
                    game: "Pac-Man",
                    url:
                        "https://www.retrogames.cc/embed/21194-pac-man-usa-namco.html"
                },
                {
                    game: "Ren & Stimpy Show Presents Stimpy's Invention, The",
                    url:
                        "https://www.retrogames.cc/embed/30361-ren-stimpy-show-presents-stimpy-s-invention-the-europe.html"
                },
                {
                    game: "Road Fighter",
                    url:
                        "https://www.retrogames.cc/embed/20681-road-fighter-europe.html"
                },
                {
                    game: "Rock n' Roll Racing",
                    url:
                        "https://www.retrogames.cc/embed/28493-rock-n-roll-racing-usa.html"
                },
                {
                    game: "Sonic the Hedgehog",
                    url:
                        "https://www.retrogames.cc/embed/30299-sonic-the-hedgehog-usa-europe.html"
                },
                {
                    game: "Sonic the Hedgehog 2",
                    url:
                        "https://www.retrogames.cc/embed/17236-sonic-the-hedgehog-2-world-rev-a.html"
                },
                {
                    game: "Sonic the Hedgehog 3",
                    url:
                        "https://www.retrogames.cc/embed/30002-sonic-the-hedgehog-3-europe.html"
                },
                {
                    game: "Street Fighter II' - Special Champion Edition",
                    url:
                        "https://www.retrogames.cc/embed/30398-street-fighter-ii-special-champion-edition-usa.html"
                },
                {
                    game: "Streets of Rage 2",
                    url:
                        "https://www.retrogames.cc/embed/28481-streets-of-rage-2-usa.html"
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
                    game: "Super Monaco GP",
                    url:
                        "https://www.retrogames.cc/embed/16811-super-monaco-gp-usa-en-ja-v1-3.html"
                },
                {
                    game: "Taz-Mania",
                    url:
                        "https://www.retrogames.cc/embed/19017-taz-mania-world.html"
                },
                {
                    game: "Teenage Mutant Ninja Turtles - The Hyperstone Heist",
                    url:
                        "https://www.retrogames.cc/embed/28590-teenage-mutant-ninja-turtles-the-hyperstone-heist-usa.html"
                },
                {
                    game: "Tiny Toon Adventures",
                    url:
                        "https://www.retrogames.cc/embed/28522-tiny-toon-adventures-buster-s-hidden-treasure-usa.html"
                },
                {
                    game: "Toxic Crusaders",
                    url:
                        "https://www.retrogames.cc/embed/30138-toxic-crusaders-usa.html"
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
