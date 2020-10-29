<template>
    <div
        v-if="tablaPos"
        class="grid grid-cols-1 lg:grid-cols-2 justify-items-stretch bg-white rounded overflow-hidden shadow-lg m-4 p-4 relative"
    >
        <div v-for="posiciones in tablaPos" :key="posiciones.id">
            <!-- tabla Pos-->
            <div class="overflow-x-auto my-4 mx-2">
                <table class="table-auto bg-gray-100">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Pos</th>
                            <th class="px-4 py-2">Equipo</th>
                            <th class="px-4 py-2">J</th>
                            <th class="px-4 py-2">G</th>
                            <th class="px-4 py-2">E</th>
                            <th class="px-4 py-2">P</th>
                            <th class="px-4 py-2">Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in posiciones.table" :key="item.id">
                            <td class="border px-4 py-2">
                                {{ item.position }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ item.team.name }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ item.playedGames }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ item.won }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ item.draw }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ item.lost }}
                            </td>
                            <td class="border text-center px-4 py-2">
                                {{ item.points }}
                            </td>
                        </tr>
                    </tbody>
                </table>
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
