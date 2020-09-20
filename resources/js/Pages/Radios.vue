<template>
    <div>
        <layout>
            <div class="grid grid-cols-1">
                <div class="flex-wrap ">
                    <!-- <new-alert message="Nueva Sección: Juegos"></new-alert> -->
                    <div
                        class="flex justify-center font-mono text-4xl md:text-6xl text-gray-900"
                    >
                        Radios
                    </div>
                    <div class="flex justify-center">
                        <div
                            class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center"
                        >
                            <div v-for="item in radios" :key="item.id">
                                <div
                                    @click="setRadio(item)"
                                    class="w-full cursor-pointer rounded overflow-hidden shadow-lg my-4 md:w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                >
                                    <div
                                        class="md:flex bg-white rounded-lg p-6 items-center"
                                    >
                                        <img
                                            class="h-16 w-16 md:h-24 md:w-24 mx-auto md:mx-0 md:mr-6"
                                            :src="item.img"
                                            alt="no image"
                                        />
                                        <div class="text-center md:text-left">
                                            <h2 class="text-lg">
                                                {{ item.name }}
                                            </h2>
                                        </div>
                                    </div>
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
import newAlert from "./Shared/NewAlert";

export default {
    data() {
        return {
            radios: [
                {
                    name: "Aspen 102.3",
                    url: "https://tunein.com/embed/player/s25905/",
                    img:
                        "https://cdn-profiles.tunein.com/s25905/images/logog.jpg?t=159040"
                },
                {
                    name: "La 100",
                    url: "https://tunein.com/embed/player/s6984/",
                    img:
                        "https://cdn-profiles.tunein.com/s6984/images/logog.jpg?t=636247"
                },
                {
                    name: "Radio La Red",
                    url: "https://tunein.com/embed/player/s13680/",
                    img: "https://cdn-radiotime-logos.tunein.com/s13680q.png"
                },
                {
                    name: "Radio Rivadavia",
                    url: "https://tunein.com/embed/player/s104261/",
                    img:
                        "https://cdn-profiles.tunein.com/s104261/images/logoq.png?t=158172"
                },
                {
                    name: "Vorterix",
                    url: "https://tunein.com/embed/player/s156342/",
                    img: "https://cdn-radiotime-logos.tunein.com/s156342q.png"
                },
                {
                    name: "Los 40",
                    url: "https://tunein.com/embed/player/s24998/",
                    img:
                        "https://cdn-profiles.tunein.com/s24998/images/logoq.png?t=155265"
                },
                {
                    name: "Radio Mitre",
                    url: "https://tunein.com/embed/player/s25151/",
                    img:
                        "https://cdn-profiles.tunein.com/s25151/images/logoq.jpg?t=157556"
                },
                {
                    name: "Fm Rock and Pop 95.9",
                    url: "https://tunein.com/embed/player/s2560/",
                    img:
                        "https://cdn-profiles.tunein.com/s2560/images/logoq.png?t=159346"
                },
                {
                    name: "Radio Continental",
                    url: "https://tunein.com/embed/player/s25844/",
                    img: "https://cdn-radiotime-logos.tunein.com/s25844q.png"
                },
                {
                    name: "Vale 97.5",
                    url: "https://tunein.com/embed/player/s135092/",
                    img:
                        "https://cdn-profiles.tunein.com/s135092/images/logoq.png?t=153597"
                },
                {
                    name: "Radio Cantilo",
                    url: "https://tunein.com/embed/player/s275689/",
                    img:
                        "https://cdn-profiles.tunein.com/s275689/images/logog.jpg?t=1"
                },
                {
                    name: "FM PASION",
                    url: "https://tunein.com/embed/player/s171699/",
                    img: "https://cdn-radiotime-logos.tunein.com/s171699g.png"
                }
            ]
        };
    },
    components: { layout, newAlert },
    methods: {
        setRadio(radio) {
            var ifm = document.getElementById("myIFrame");
            ifm.setAttribute("src", radio.url);
        }
    }
};
</script>

<style></style>
