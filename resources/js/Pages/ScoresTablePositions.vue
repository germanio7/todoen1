<template>
    <div v-if="tablaPos" class="flex flex-col mt-4">
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
                                    GA
                                </th>
                                <th
                                    class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                >
                                    GEC
                                </th>
                                <th
                                    class="px-6 py-3 bg-purple-100 text-left text-xs leading-4 text-gray-900 font-bold uppercase tracking-wider"
                                >
                                    DIF
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="(value, key, index) in tablaPos">
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ key + 1 }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.name }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.played }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.win }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.draw }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.loss }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.total }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.goalsfor }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.goalsagainst }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900"
                                >
                                    {{ value.goalsdifference }}
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
    props: ["competition", "tablaPos"],
    methods: {
        //
    }
};
</script>

<style></style>
