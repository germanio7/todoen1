<template>
    <div>
        <layout>
            <div
                class="text-center font-mono text-4xl md:text-6xl text-gray-900"
            >
                Nuestra Lista en Spotify
            </div>
            <div class="flex justify-center items-center ">
                <iframe
                    src="https://open.spotify.com/embed/playlist/2t2Swa2WSzoq5F94gV0OHR"
                    width="800"
                    height="600"
                    frameborder="0"
                    allowtransparency="true"
                    allow="encrypted-media"
                ></iframe>
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";
export default {
    components: { layout }
};
</script>

<style></style>
