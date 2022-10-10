<template>
    <div>
        <section class="mx-auto">
            <div class="container px-5 mx-auto lg:px-24">
                <div class="flex flex-col w-full mb-2 text-left lg:text-center">
                    <h1
                        class="
                            text-2xl text-center
                            font-semibold
                            text-blue-800
                            title-font
                        "
                    >
                        Radios
                    </h1>
                </div>
                <hr />
                <br />
                <div class="flex flex-wrap">
                    <div v-for="item in radios" :key="item.id">
                        <div
                            @click="setRadio(item)"
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
                                :src="item.img ? item.img : './noimage.png'"
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
                                {{ item.name }}
                            </p>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </section>
        <hr />
        <p class="text-center text-gray-500 text-sm mt-4">
            &copy;2022
            <a target="_blank" href="https://github.com/germanio7">Github</a>
            |
            <a
                target="_blank"
                class="badge-base__link LI-simple-link"
                href="https://ar.linkedin.com/in/germanio7?trk=profile-badge"
                >Linkedin</a
            >
        </p>
    </div>
</template>

<script>
import Layout from "./Shared/Layout";
import newAlert from "./Shared/NewAlert";

export default {
    layout: Layout,

    data() {
        return {
            radios: [
                {
                    name: "Aspen 102.3",
                    url: "https://tunein.com/embed/player/s25905/",
                    img: "https://cdn-profiles.tunein.com/s25905/images/logog.jpg?t=159040",
                },
                {
                    name: "Urbana Play",
                    url: "https://urbanaplayfm.com/radio/",
                    img: "https://www.enlaradio.com.ar/adjuntos/image/FM/elr-urbana-play.jpg",
                },
                {
                    name: "La 100",
                    url: "https://tunein.com/embed/player/s6984/",
                    img: "https://cdn-profiles.tunein.com/s6984/images/logog.jpg?t=636247",
                },
                {
                    name: "La Mega",
                    url: "https://radiomega.fm/",
                    img: "https://upload.wikimedia.org/wikipedia/commons/6/6a/MEGA983.jpg",
                },
                {
                    name: "Radio La Red",
                    url: "https://tunein.com/embed/player/s13680/",
                    img: "https://cdn-radiotime-logos.tunein.com/s13680q.png",
                },
                {
                    name: "Radio Rivadavia",
                    url: "https://tunein.com/embed/player/s104261/",
                    img: "https://cdn-profiles.tunein.com/s104261/images/logoq.png?t=158172",
                },
                {
                    name: "Vorterix",
                    url: "https://tunein.com/embed/player/s156342/",
                    img: "https://cdn-radiotime-logos.tunein.com/s156342q.png",
                },
                {
                    name: "Los 40",
                    url: "https://tunein.com/embed/player/s24998/",
                    img: "https://cdn-profiles.tunein.com/s24998/images/logoq.png?t=155265",
                },
                {
                    name: "Radio Mitre",
                    url: "https://tunein.com/embed/player/s25151/",
                    img: "https://cdn-profiles.tunein.com/s25151/images/logoq.jpg?t=157556",
                },
                {
                    name: "Fm Rock and Pop 95.9",
                    url: "https://tunein.com/embed/player/s2560/",
                    img: "https://cdn-profiles.tunein.com/s2560/images/logoq.png?t=159346",
                },
                {
                    name: "Radio Continental",
                    url: "https://tunein.com/embed/player/s25844/",
                    img: "https://cdn-radiotime-logos.tunein.com/s25844q.png",
                },
                {
                    name: "Vale 97.5",
                    url: "https://tunein.com/embed/player/s135092/",
                    img: "https://cdn-profiles.tunein.com/s135092/images/logoq.png?t=153597",
                },
                {
                    name: "Radio Cantilo",
                    url: "https://tunein.com/embed/player/s275689/",
                    img: "https://cdn-profiles.tunein.com/s275689/images/logog.jpg?t=1",
                },
                {
                    name: "FM PASION",
                    url: "https://tunein.com/embed/player/s171699/",
                    img: "https://cdn-radiotime-logos.tunein.com/s171699g.png",
                },
            ],
        };
    },
    components: { newAlert },
    methods: {
        setRadio(radio) {
            var ifm = document.getElementById("myIFrame");
            ifm.setAttribute("src", radio.url);
            document.getElementById("footer").style.bottom = "0px";
        },
    },
};
</script>

<style></style>
