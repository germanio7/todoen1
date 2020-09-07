<template>
    <div class="flex justify-center p-2">
        <div
            class="w-auto border bg-white rounded flex flex-col justify-center items-center text-center p-6 bg-white transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
        >
            <div class="text-md font-bold flex flex-col text-gray-900">
                <span class="uppercase">{{ res.city }}, {{ res.country }}</span>
            </div>
            <div class="w-32 h-32 flex items-center justify-center">
                <img :src="res.iconLink + '?apiKey=' + api_key" alt="" />
            </div>
            <p class="text-gray-700 mb-2">{{ res.description }}</p>
            <div class="text-3xl font-bold text-gray-900 mb-6">
                {{ Math.round(res.temperature) }}ºC
            </div>
            <div class="flex justify-between w-full m-2">
                <div class="flex items-center text-gray-700 px-2">
                    max {{ Math.round(res.highTemperature) }}ºC
                </div>
                <div class="flex items-center text-gray-700 px-2">
                    min {{ Math.round(res.lowTemperature) }}ºC
                </div>
            </div>
            <div class="flex justify-between w-full">
                <div class="flex items-center text-gray-700 px-2">
                    Humedad
                    {{ res.humidity }}%
                </div>
                <div class="flex items-center text-gray-700 px-2">
                    Viento
                    {{ res.windDesc }}
                    {{ Math.round(res.windSpeed) }} km/h
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            api_key: "aZ8yVZMqrBUavs5QX7Bqfax4FY8JdmETwgJTHey9DCs"
        };
    },
    props: ["res"]
};
</script>

<style></style>
