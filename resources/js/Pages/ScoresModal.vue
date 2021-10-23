<template>
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div
            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
        >
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span
                class="hidden sm:inline-block sm:align-middle sm:h-screen"
            ></span
            >&#8203;

            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog"
                aria-modal="true"
                aria-labelledby="modal-headline"
            >
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"
                        >
                            <h3
                                class="text-lg leading-6 font-medium text-gray-900"
                                id="modal-headline"
                            >
                                Clasificación
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm leading-5 text-gray-500">
                                    <span
                                        v-for="item in clasificacion"
                                        :key="item.id"
                                    >
                                        <span class="flex justify-between">
                                            {{ item.intPosition }} |
                                            {{ item.strPlayer }} |
                                            {{ item.strDetail }}
                                        </span>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                >
                    <span
                        class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto"
                    >
                        <button
                            @click="$emit('cerrar-modal')"
                            type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                        >
                            Cerrar
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            clasificacion: null
        };
    },

    props: ["eventoid"],

    watch: {
        eventoid() {
            axios.get("api/event-results/" + this.eventoid).then(response => {
                this.clasificacion = response.data.results;
            });
        }
    },

    methods: {
        resultados() {
            axios.get("api/event-results/" + this.eventoid).then(response => {
                this.clasificacion = response.data.results;
            });
        }
    }
};
</script>
