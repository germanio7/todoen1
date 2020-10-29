<template>
    <div v-if="tablaPos" class="flex flex-col mt-4">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div v-for="posiciones in tablaPos" :key="posiciones.id">
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
                                        Pos
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        Equipo
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        J
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        G
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        E
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        P
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        Puntos
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        G.A.
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        G.E.C.
                                    </th>
                                    <th
                                        class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                    >
                                        Dif.
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr
                                    v-for="item in posiciones.table"
                                    :key="item.id"
                                >
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.position }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.team.name }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.playedGames }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.won }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.draw }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.lost }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.points }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.goalsFor }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.goalsAgainst }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                    >
                                        {{ item.goalDifference }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
    props: ["tablaPos"]
};
</script>
