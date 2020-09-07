<template>
    <div>
        <layout>
            <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <div v-for="item in news" :key="item.id">
                    <div
                        class="max-w-sm rounded overflow-hidden shadow-lg m-2 p-2"
                    >
                        <img
                            class="w-full transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            :src="item.urlToImage"
                            alt="No Image"
                        />
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">
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
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >{{ item.source.name }}</span
                            >
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
