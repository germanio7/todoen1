<template>
    <div v-if="tableScorers" class="flex flex-col mt-4">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div
                class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
            >
                <div
                    class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                >
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                >
                                    Jugador
                                </th>
                                <th
                                    class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                >
                                    Equipo
                                </th>
                                <th
                                    class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                >
                                    Goles
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="item in tableScorers" :key="item.id">
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ item.player.name }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ item.team.name }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ item.numberOfGoals }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            //
        };
    },
    props: ["tableScorers"]
};
</script>

<style></style>
