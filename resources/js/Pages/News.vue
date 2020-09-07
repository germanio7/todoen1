<template>
    <div>
        <layout>
            <div v-for="item in news" :key="item.id">
                <div
                    class="max-w-sm w-full lg:max-w-full lg:flex items-center border border-teal-500 shadow rounded m-4 p-2"
                >
                    <div
                        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                    >
                        <img
                            class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            :src="item.urlToImage"
                            alt="No Image"
                        />
                    </div>
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                    >
                        <div class="mb-8">
                            <div class="text-gray-900 font-bold text-xl mb-2">
                                {{ item.title }}
                            </div>
                            <p class="text-gray-700 text-base">
                                {{ item.description }}
                            </p>
                            <a
                                class="text-blue-500 font-mono text-xs pt-4 no-underline hover:underline"
                                target="_blank"
                                :href="item.url"
                                >{{ item.url }}</a
                            >
                        </div>
                        <div class="flex items-center">
                            <div class="text-sm">
                                <p class="text-gray-900 leading-none">
                                    {{ item.source.name }}
                                </p>
                                <p class="text-gray-600">
                                    {{ new Date(item.publishedAt) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";
import axios from "axios";
export default {
    data() {
        return {
            news: null
        };
    },
    components: { layout },
    beforeMount() {
        this.setNews();
    },
    methods: {
        setNews() {
            axios.get("api/news").then(response => {
                this.news = response.data.articles;
            });
        }
    }
};
</script>

<style></style>
