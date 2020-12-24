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
                <!-- <div
                    class="grid grid-rows-2 grid-flow-col gap-2 font-mono font-bold text-white justify-items-stretch p-2"
                >
                    <div
                        class="row-span-2 relative rounded-lg flex justify-center items-center"
                    >
                        <img
                            class="w-full "
                            src="https://picsum.photos/400?random=1"
                            alt=""
                        />
                        <div
                            class="absolute bg-black rounded uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            noticias
                        </div>
                    </div>
                    <div
                        class="row-span-1 relative rounded-lg flex justify-center items-center"
                    >
                        <img
                            class="w-full"
                            src="https://picsum.photos/400?random=2"
                            alt=""
                        />
                        <div
                            class="absolute bg-black rounded  uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            radios
                        </div>
                    </div>
                    <div
                        class="row-span-1 relative rounded-lg flex justify-center items-center"
                    >
                        <img
                            class="w-full"
                            src="https://picsum.photos/400?random=3"
                            alt=""
                        />
                        <div
                            class="absolute bg-black rounded  uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            juegos
                        </div>
                    </div>
                    <div
                        class="row-span-2 relative rounded-lg flex justify-center items-center"
                    >
                        <img
                            class="w-full"
                            src="https://picsum.photos/400?random=4"
                            alt=""
                        />
                        <div
                            class="absolute bg-black rounded  uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        >
                            clima
                        </div>
                    </div>
                </div> -->
                <div
                    class="row-span-2 relative rounded-lg flex justify-center items-center"
                >
                    <img class="w-full " src="fiestas.jpg" alt="" />
                    <div
                        class="absolute bg-black text-white rounded uppercase text-lg md:text-3xl lg:text-4xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                    >
                        Felices Fiestas!!!
                    </div>
                </div>
            </div>
        </layout>
    </div>
</template>

<script defer>
import layout from "./Shared/Layout";
export default {
    props: ["visitas"],

    components: { layout }
};
</script>
