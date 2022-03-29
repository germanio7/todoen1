<template>
    <div>
        <layout>
            <div class="flex flex-col w-full mb-4 text-left lg:text-center">
                <h1
                    class="
                        text-2xl text-center
                        font-semibold
                        text-blue-800
                        title-font
                    "
                >
                    Juegos
                </h1>
            </div>
            <hr />
            <div class="flex flex-wrap">
                <div v-for="item in games" :key="item.id">
                    <div
                        @click="setGame(item.url)"
                        class="
                            cursor-pointer
                            hover:bg-gray-700
                            inline-flex
                            items-center
                            px-4
                            py-3
                            mb-2
                            mr-2
                            transition-colors
                            duration-200
                            ease-in
                            bg-gray-500
                            rounded-sm
                            shadow
                        "
                    >
                        <img
                            :src="item.image ? item.image : './noimage.png'"
                            class="h-16"
                            alt=""
                        />
                        <p
                            class="
                                font-body
                                ml-2
                                text-sm
                                leading-none
                                text-white
                                capitalize
                            "
                        >
                            {{ item.game }}
                        </p>
                    </div>
                </div>
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
                &copy;2022
                <a target="_blank" href="https://github.com/germanio7"
                    >Github</a
                >
                |
                <a
                    target="_blank"
                    class="badge-base__link LI-simple-link"
                    href="https://ar.linkedin.com/in/germanio7?trk=profile-badge"
                    >Linkedin</a
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
                    url: "https://www.retrogames.cc/embed/29861-after-burner-ii-usa-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/w/29861_13fc32a3627c012bf3e3de74bee382fca8a80c44.png",
                },
                {
                    game: "Aladdin",
                    url: "https://www.retrogames.cc/embed/16687-aladdin-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/d/16687_fb5e8de0e0895bb179dfa6d6d6fc7cd725f8eb0e.png",
                },
                {
                    game: "ATP Tour Championship Tennis",
                    url: "https://www.retrogames.cc/embed/30481-atp-tour-championship-tennis-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/l/30481_48e437d16e13d374bf11afe1841e77165839be48.png",
                },
                {
                    game: "Bare Knuckle (Streets of Rage)",
                    url: "https://www.retrogames.cc/embed/30497-bare-knuckle-ikari-no-tetsuken-streets-of-rage-world.html",
                    image: "https://static.retrogames.cc/screenshot/47/2021/02/09/30497_0ef321375d38fe157df924e2c020a77ac81d44dc.png",
                },
                {
                    game: "Balloon Fight",
                    url: "https://www.retrogames.cc/embed/19300-balloon-fight-usa.html",
                    image: "https://static.retrogames.cc/screenshot/55/d/19300_3f78a908154af70d13f7679fb0cd80ed730fd8a9.png",
                },
                {
                    game: "Battle City",
                    url: "https://www.retrogames.cc/embed/16882-battle-city-japan.html",
                    image: "https://static.retrogames.cc/screenshot/55/n/16882_b2032af50879367ead9a4b412467158ba122259c.png",
                },
                {
                    game: "Bomberman ",
                    url: "https://www.retrogames.cc/embed/20411-bomberman-usa.html",
                    image: "https://static.retrogames.cc/screenshot/55/r/20411_95ee029e70ecda7743e0bceb5d2822f4b3b72006.png",
                },
                {
                    game: "Boogerman",
                    url: "https://www.retrogames.cc/embed/30083-boogerman-a-pick-and-flick-adventure-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/c/30083_b66e988a19a1a960bec5bf59302b1ffc721d725b.png",
                },
                {
                    game: "Circus Charlie",
                    url: "https://www.retrogames.cc/embed/21342-circus-charlie-japan.html",
                    image: "https://static.retrogames.cc/screenshot/55/o/21342_376d279644f09e4ce87ba32447737690b65e6722.png",
                },
                {
                    game: "Comix Zone",
                    url: "https://www.retrogames.cc/embed/29773-comix-zone-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/t/29773_c5ab5c4f678b437d831842b75db0dd721e50c286.png",
                },
                {
                    game: "Contra",
                    url: "https://www.retrogames.cc/embed/16841-contra-usa.html",
                    image: "https://static.retrogames.cc/screenshot/55/f/16841_c8284cef57444d4fd376c1c3785bc3f6052d775b.png",
                },
                {
                    game: "Demolition Man",
                    url: "https://www.retrogames.cc/embed/30488-demolition-man-usa-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/x/30488_b87185f45bbd6e409d92bd140894f999be0ecd4a.png",
                },
                {
                    game: "Desert Strike",
                    url: "https://www.retrogames.cc/embed/18464-desert-strike-usa-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/2018/10/04/18464_fc6ef3035f177bb1d0a241ee20ae8a9191e4d900.png",
                },
                {
                    game: "Donkey Kong",
                    url: "https://www.retrogames.cc/embed/17901-donkey-kong-world-rev-a.html",
                    image: "https://static.retrogames.cc/screenshot/55/g/17901_535d1bc83a13959e778af24e30b962734b15d8ec.png",
                },
                {
                    game: "Donkey Kong Country",
                    url: "https://www.retrogames.cc/embed/18709-donkey-kong-country-usa-rev-a.html",
                    image: "https://static.retrogames.cc/screenshot/79/g/18709_b3085ee14edf91f92fe685366d68c53b5ab40ced.png",
                },
                {
                    game: "Doom",
                    url: "https://www.retrogames.cc/embed/22868-doom-usa.html",
                    image: "https://static.retrogames.cc/screenshot/79/b/22868_740debae2a793c8dabafab1b44f43d09451248d6.png",
                },
                {
                    game: "Earthworm Jim",
                    url: "https://www.retrogames.cc/embed/30211-earthworm-jim-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/f/30211_0185eb4a3812d93099e8d3b4977124ff61fd24b3.png",
                },
                {
                    game: "Excitebike",
                    url: "https://www.retrogames.cc/embed/20552-excitebike-japan-usa.html",
                    image: "https://static.retrogames.cc/screenshot/55/y/20552_569497de729c02e714582b9e065dc8b531b4e5bb.png",
                },
                {
                    game: "FIFA International Soccer",
                    url: "https://www.retrogames.cc/embed/29938-fifa-international-soccer-usa-europe-en-fr-de-es.html",
                    image: "https://static.retrogames.cc/screenshot/47/d/29938_744d216863cf2c86db5851017bcbe36d848163a6.png",
                },
                {
                    game: "FIFA Soccer 96",
                    url: "https://www.retrogames.cc/embed/28457-fifa-soccer-96-usa-europe-en-fr-de-es-it-sv.html",
                    image: "https://static.retrogames.cc/screenshot/47/j/28457_1bb84275c6dc6e94e46ea279563b621ebed6f81b.png",
                },
                {
                    game: "FIFA Soccer 97",
                    url: "https://www.retrogames.cc/embed/30117-fifa-soccer-97-usa-europe-en-fr-de-es-it-sv.html",
                    image: "https://static.retrogames.cc/screenshot/47/w/30117_c8102418ac97b3c31ea884d51925525ce5703a9e.png",
                },
                {
                    game: "FIFA 98 - Road to World Cup",
                    url: "https://www.retrogames.cc/embed/30223-fifa-98-road-to-world-cup-europe-en-fr-es-it-sv.html",
                    image: "https://static.retrogames.cc/screenshot/47/u/30223_5d2c33041fa637f922d1297246d422a6fb0959d9.png",
                },
                {
                    game: "General Chaos",
                    url: "https://www.retrogames.cc/embed/30081-general-chaos-usa-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/m/30081_65ed1ca6769e21ea481aa35c2de8033db084e92d.png",
                },
                {
                    game: "Hudson's Adventure Island",
                    url: "https://www.retrogames.cc/embed/20528-hudson-s-adventure-island-usa.html",
                    image: "https://static.retrogames.cc/screenshot/55/d/20528_6570934299b4f444f7a30b3a69701276ec02d8a3.png",
                },
                {
                    game: "Ice Climber",
                    url: "https://www.retrogames.cc/embed/17897-ice-climber-usa-europe.html",
                    image: "https://static.retrogames.cc/screenshot/55/k/17897_c8f101edc78355af9aff64a3b31b717fcac8e183.png",
                },
                {
                    game: "International Superstar Soccer Deluxe",
                    url: "https://www.retrogames.cc/embed/30521-international-superstar-soccer-deluxe-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/p/30521_64930a9b45d11fca0a453aa88ca6bc016c762687.png",
                },
                {
                    game: "Jurassic Park",
                    url: "https://www.retrogames.cc/embed/30179-jurassic-park-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/i/30179_527408fa37b17a8c7eb98777f1873542fe6457c9.png",
                },
                {
                    game: "Killer Instinct",
                    url: "https://www.retrogames.cc/embed/17355-killer-instinct-usa.html",
                    image: "https://static.retrogames.cc/screenshot/79/o/17355_f4c6499f3c17f16f7ab8e13f916526f662876220.png",
                },
                {
                    game: "Mortal Kombat II",
                    url: "https://www.retrogames.cc/embed/30510-mortal-kombat-ii-world.html",
                    image: "https://static.retrogames.cc/screenshot/79/p/22440_9952ff1b34fae7a51525c6db244e7d1ccdc36837.png",
                },
                {
                    game: "Mortal Kombat 3",
                    url: "https://www.retrogames.cc/embed/29633-mortal-kombat-3-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/f/29633_f8af2bcf0a11ac793c90ab9d110abbb327dc903f.png",
                },
                {
                    game: "NBA Hang Time",
                    url: "https://www.retrogames.cc/embed/28432-nba-hang-time-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/o/28432_77bfc64a7eb63b5161d4dc1bbe1cdd60aad4c58c.png",
                },
                {
                    game: "NBA Jam Tournament Edition",
                    url: "https://www.retrogames.cc/embed/30412-nba-jam-tournament-edition-world.html",
                    image: "https://static.retrogames.cc/screenshot/47/2020/05/31/30412_eb762c215861d3833abc75ca9c9264f302d24542.png",
                },
                {
                    game: "Pac-Man",
                    url: "https://www.retrogames.cc/embed/21194-pac-man-usa-namco.html",
                    image: "https://static.retrogames.cc/screenshot/55/d/21194_65b2f5409e7280defa62896a4f8f8ce1f8adf70f.png",
                },
                {
                    game: "Ren & Stimpy Show Presents Stimpy's Invention, The",
                    url: "https://www.retrogames.cc/embed/30361-ren-stimpy-show-presents-stimpy-s-invention-the-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/c/30361_f5719c04901b1f11a40d4adf98362a4c12c3a504.png",
                },
                {
                    game: "Road Fighter",
                    url: "https://www.retrogames.cc/embed/20681-road-fighter-europe.html",
                    image: "https://static.retrogames.cc/screenshot/55/s/20681_039113d4075172485a023a824ccf54d5e8e7b125.png",
                },
                {
                    game: "Rock n' Roll Racing",
                    url: "https://www.retrogames.cc/embed/28493-rock-n-roll-racing-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/l/28493_ce2fe129f9a795798e996b46fb73e55d03c0979c.png",
                },
                {
                    game: "Sonic the Hedgehog",
                    url: "https://www.retrogames.cc/embed/30299-sonic-the-hedgehog-usa-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/t/30299_2617cee809705827660a631951bc24ca6ae029a7.png",
                },
                {
                    game: "Sonic the Hedgehog 2",
                    url: "https://www.retrogames.cc/embed/17236-sonic-the-hedgehog-2-world-rev-a.html",
                    image: "https://static.retrogames.cc/screenshot/47/d/17236_b4a87780cb8e26771c3a4f20505e80605fd272ea.png",
                },
                {
                    game: "Sonic the Hedgehog 3",
                    url: "https://www.retrogames.cc/embed/30002-sonic-the-hedgehog-3-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/p/30002_eb29ae6d432f1c7055dd56a784481df11f2514a5.png",
                },
                {
                    game: "Street Fighter II' - Special Champion Edition",
                    url: "https://www.retrogames.cc/embed/30398-street-fighter-ii-special-champion-edition-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/y/30398_ef0d701826b27d5f02764703edc192b03e3d50d0.png",
                },
                {
                    game: "Streets of Rage 2",
                    url: "https://www.retrogames.cc/embed/28481-streets-of-rage-2-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/o/28481_bf6ed93ace3890a911bfca9351ebec88fbc66d74.png",
                },
                {
                    game: "Super Mario Bros.",
                    url: "https://www.retrogames.cc/embed/16843-super-mario-bros-japan-usa.html",
                    image: "https://static.retrogames.cc/screenshot/55/x/16843_b78e168949dbf2da3cad644686b9e7325606e3be.png",
                },
                {
                    game: "Super Mario Kart",
                    url: "https://www.retrogames.cc/embed/16887-super-mario-kart-usa.html",
                    image: "https://static.retrogames.cc/screenshot/79/f/16887_80b55b20abd65e0c8fc9db42c86d4e0b7edb4077.png",
                },
                {
                    game: "Super Monaco GP",
                    url: "https://www.retrogames.cc/embed/16811-super-monaco-gp-usa-en-ja-v1-3.html",
                    image: "https://static.retrogames.cc/screenshot/47/b/16811_d1bda41bbee12b9c0d0610aaeb845270b99495d9.png",
                },
                {
                    game: "Taz-Mania",
                    url: "https://www.retrogames.cc/embed/19017-taz-mania-world.html",
                    image: "https://static.retrogames.cc/screenshot/47/2018/10/20/19017_c7b3c5fa70e3319f9b8cb350c799277b9571a38d.png",
                },
                {
                    game: "Teenage Mutant Ninja Turtles - The Hyperstone Heist",
                    url: "https://www.retrogames.cc/embed/28590-teenage-mutant-ninja-turtles-the-hyperstone-heist-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/p/28590_68106a3f77648a9a9e5f8b8d3c4dbfd0be649838.png",
                },
                {
                    game: "Tiny Toon Adventures",
                    url: "https://www.retrogames.cc/embed/28522-tiny-toon-adventures-buster-s-hidden-treasure-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/j/28522_f1324adc819315898bf9cb84d46260e6fecaa1f2.png",
                },
                {
                    game: "Toxic Crusaders",
                    url: "https://www.retrogames.cc/embed/30138-toxic-crusaders-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/q/30138_3d401b65cf6a27379e424e9fa72f07de53cb5d23.png",
                },
                {
                    game: "Ultimate Mortal Kombat 3",
                    url: "https://www.retrogames.cc/embed/16951-ultimate-mortal-kombat-3-usa.html",
                    image: "https://static.retrogames.cc/screenshot/47/h/16951_faaab84b595a1fa2727b22be2e858d412e0f6501.png",
                },
                {
                    game: "Vectorman",
                    url: "https://www.retrogames.cc/embed/28386-vectorman-usa-europe.html",
                    image: "https://static.retrogames.cc/screenshot/47/p/28386_f910af8e5fcbd52e1ee6a51c271f1799992698f4.png",
                },
            ],
        };
    },
    components: { layout },
    methods: {
        setGame(game) {
            let aux = document.getElementById("juego");
            aux.setAttribute("src", game);
            aux.scrollIntoView();
        },
    },
};
</script>
<style></style>
