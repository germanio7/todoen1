<template>
    <div>
        <div class="container mx-auto bg-indigo-900 text-center py-4 lg:px-4">
            <div
                class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                role="alert"
            >
                <span
                    class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3"
                    >!</span
                >
                <span class="font-semibold mr-2 text-left flex-auto">{{
                    message
                }}</span>
                <svg
                    class="fill-current h-6 w-6 text-blue-500"
                    role="button"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    @click="borrar()"
                >
                    <title>Cerrar</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"
                    />
                </svg>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["message"],
    methods: {
        borrar() {
            this.$destroy();
            this.$el.parentNode.removeChild(this.$el);
        }
    }
};
</script>

<style></style>
