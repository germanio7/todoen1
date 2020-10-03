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
                <div class="grid grid-rows-2 grid-flow-col gap-2 p-2">
                    <div class="row-span-2 bg-gray-500">
                        <img class="h-full" src="clima.svg" alt="" />
                    </div>
                    <div class="row-span-1 bg-gray-600">
                        <img class="h-full" src="noticias.svg" alt="" />
                    </div>
                    <div class="row-span-1 bg-gray-700">
                        <img class="h-full" src="juegos.svg" alt="" />
                    </div>
                    <div class="row-span-2 bg-gray-400">
                        <img class="h-full" src="musica.svg" alt="" />
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
