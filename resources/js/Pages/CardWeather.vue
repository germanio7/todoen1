<template>
    <div class="flex justify-center p-2">
        <div class="text-white mb-8">
            <div
                class="weather-container font-sans md:w-128 max-w-lg rounded-lg overflow-hidden bg-gray-900 shadow-lg mt-8"
            >
                <div
                    class="current-weather flex items-center justify-between px-6 py-8"
                >
                    <div class="flex flex-col md:flex-row items-center">
                        <div>
                            <div class="text-6xl font-semibold">
                                {{ Math.round(res.temperature) }}°C
                            </div>
                        </div>
                        <div class="md:mx-5">
                            <div class="font-semibold">
                                {{ res.description }}
                            </div>
                            {{ res.city }}, {{ res.country }}
                        </div>
                        <div>
                            <div
                                class="w-32 h-32 flex items-center justify-center"
                            >
                                <img
                                    :src="res.iconLink + '?apiKey=' + api_key"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <div>
                        <canvas
                            ref="iconCurrent"
                            id="iconCurrent"
                            width="96"
                            height="96"
                        ></canvas>
                    </div>
                </div>
                <!-- end current-weather -->

                <div
                    class="future-weather text-sm bg-gray-800 px-6 py-8 overflow-hidden"
                >
                    <div
                        v-for="item in days"
                        :key="item.id"
                        class="flex items-center"
                        :class="{ 'mt-8': item.id > 0 }"
                    >
                        <div class="w-1/6 text-lg text-gray-200">
                            {{ item.weekday }}
                        </div>
                        <div class="w-4/6 px-4 flex items-center">
                            <div>
                                <img
                                    :src="item.iconLink + '?apiKey=' + api_key"
                                    alt=""
                                    class="pr-2"
                                />
                            </div>
                            <div class="ml-3">{{ item.description }}</div>
                        </div>
                        <div class="w-1/6 text-right">
                            <div>{{ Math.round(item.highTemperature) }}°C</div>
                            <div>{{ Math.round(item.lowTemperature) }}°C</div>
                        </div>
                    </div>
                </div>
                <!-- end future-weather -->
            </div>
            <!-- end weather-container -->
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            api_key: process.env.MIX_HERE_WEATHER
        };
    },
    props: ["res", "days"]
};
</script>

<style></style>
