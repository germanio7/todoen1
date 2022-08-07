<template>
    <div>
        <layout>
            <div class="flex flex-col w-full mb-2 text-left lg:text-center">
                <h1
                    class="
                        text-2xl text-center
                        font-semibold
                        text-blue-800
                        title-font
                    "
                >
                    Enviar WhatsApp
                </h1>
            </div>
            <hr />
            <div class="flex justify-center items-center">
                <div
                    class="
                        flex-wrap
                        bg-white
                        rounded
                        overflow-hidden
                        shadow-lg
                        m-4
                        p-4
                        w-full
                        max-w-sm
                    "
                >
                    <div
                        class="
                            flex
                            w-full
                            items-center
                            border-b border-gray-900
                            py-2
                        "
                    >
                        <input
                            v-model="phone"
                            class="
                                appearance-none
                                bg-transparent
                                border-none
                                w-full
                                text-gray-700
                                mr-3
                                py-1
                                px-2
                                leading-tight
                                focus:outline-none
                            "
                            minlength="13"
                            maxlength="13"
                            type="text"
                            placeholder="54 9 1122 334455"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        />
                        <a
                            v-if="phone.length == 13"
                            class="
                                flex-shrink-0
                                bg-gray-900
                                hover:bg-gray-700
                                border-gray-900
                                hover:border-gray-700
                                text-sm
                                border-4
                                text-white
                                py-1
                                px-2
                                rounded
                                transition
                                duration-900
                                ease-in-out
                                transform
                                hover:-translate-y-1 hover:scale-110
                            "
                            target="_blank"
                            :href="
                                !phone
                                    ? 'javascript:void(0)'
                                    : 'https://api.whatsapp.com/send/?phone=' +
                                      phone +
                                      '&text&type=phone_number&app_absent=0'
                            "
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <hr />
            <p class="text-center text-gray-500 text-sm mt-4">
                &copy;2022
                <a target="_blank" href="https://github.com/germanio7"
                    >Github</a
                >
                |
                <a
                    target="_blank"
                    class="badge-base__link LI-simple-link"
                    href="https://ar.linkedin.com/in/germanio7?trk=profile-badge"
                    >Linkedin</a
                >
            </p>
        </layout>
    </div>
</template>

<script>
import layout from "./Shared/Layout";

export default {
    data() {
        return {
            phone: "",
        };
    },
    components: { layout },
};
</script>
