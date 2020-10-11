<template>
    <div>
        <layout>
            <div class="flex-1 justify-center">
                <div
                    class="text-center font-mono text-4xl md:text-6xl text-gray-900"
                >
                    Bienvenido
                </div>
                <hr />
                <div
                    class="grid grid-rows-2 grid-flow-col gap-2 justify-items-stretch p-2"
                >
                    <div
                        class="row-span-2 bg-purple-500 rounded-lg flex justify-center items-center"
                    >
                        <img
                            class="w-full transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            src="clima.svg"
                            alt=""
                        />
                    </div>
                    <div
                        class="row-span-1 bg-purple-500 rounded-lg flex justify-center items-center"
                    >
                        <img
                            class="w-full transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            src="noticias.svg"
                            alt=""
                        />
                    </div>
                    <div
                        class="row-span-1 bg-purple-700 rounded-lg flex justify-center items-center"
                    >
                        <img
                            class="w-full transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            src="juegos.svg"
                            alt=""
                        />
                    </div>
                    <div
                        class="row-span-2 bg-purple-400 rounded-lg flex justify-center items-center"
                    >
                        <img
                            class="w-full transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            src="musica.svg"
                            alt=""
                        />
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
            //
        };
    },
    props: ["visitas"],
    components: { layout },
    methods: {
        //
    }
};
</script>

<style></style>
