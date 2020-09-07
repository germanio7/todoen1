<template>
    <div>
        <div class="flex p-2">
            <div
                class="max-w-sm border bg-white rounded flex flex-col items-center p-6 bg-white transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
            >
                <div v-for="item in days" :key="item.id">
                    <div class="flex items-center">
                        <div class="w-1/9 lg:w-3/12">{{ item.weekday }}</div>
                        <div class="w-6/9 lg:w-6/12 flex items-center">
                            <img
                                :src="item.iconLink + '?apiKey=' + api_key"
                                alt=""
                            />
                            <div class="hidden lg:block">
                                {{ item.description }}
                            </div>
                        </div>
                        <div class="w-2/9 lg:w-3/12 flex-wrap items-center">
                            <div class="flex">
                                max {{ Math.round(item.highTemperature) }}ºC
                            </div>
                            <div class="flex">
                                min {{ Math.round(item.lowTemperature) }}ºC
                            </div>
                        </div>
                    </div>
                    <hr />
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
    props: ["days"]
};
</script>

<style></style>
