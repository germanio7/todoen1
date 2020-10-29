<template>
    <div>
        <layout>
            <div class="flex-1 justify-center">
                <div
                    class="text-center font-mono text-4xl md:text-4xl text-gray-900"
                >
                    Bienvenido
                </div>
                <hr />
                <!-- <div class="flex justify-center mt-4 p-4 rounded-lg shadow-2xl">
                    <img
                        class="transform min-w-full rounded-lg"
                        :src="foto.urls.full"
                        alt=""
                    />
                </div> -->
                <div
                    class="grid grid-rows-2 grid-flow-col gap-2 font-mono font-bold text-white justify-items-stretch p-2"
                >
                    <div
                        class="row-span-2 relative rounded-lg flex justify-center items-center"
                    >
                        <img class="w-full " src="noticias.jpg" alt="" />
                        <div
                            class="absolute bg-black rounded uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            noticias
                        </div>
                    </div>
                    <div
                        class="row-span-1 relative rounded-lg flex justify-center items-center"
                    >
                        <img class="w-full" src="radios.jpg" alt="" />
                        <div
                            class="absolute bg-black rounded  uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            radios
                        </div>
                    </div>
                    <div
                        class="row-span-1 relative rounded-lg flex justify-center items-center"
                    >
                        <img class="w-full" src="juegos.jpg" alt="" />
                        <div
                            class="absolute bg-black rounded  uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            juegos
                        </div>
                    </div>
                    <div
                        class="row-span-2 relative rounded-lg flex justify-center items-center"
                    >
                        <img class="w-full" src="weather.jpg" alt="" />
                        <div
                            class="absolute bg-black rounded  uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            clima
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
            foto: null
        };
    },

    mounted() {
        // this.photo();
    },

    props: ["visitas"],

    components: { layout },

    methods: {
        photo() {
            axios.get("api/unsplash").then(response => {
                this.foto = response.data;
            });
        }
    }
};
</script>

<style></style>
