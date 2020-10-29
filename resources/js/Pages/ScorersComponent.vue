<template>
    <div
        v-if="tableScorers"
        class="flex justify-center overflow-x-auto mt-4 mx-2 bg-white rounded overflow-hidden shadow-lg m-4 p-4 relative"
    >
        <table class="table-auto bg-gray-100">
            <thead>
                <tr>
                    <th class="px-4 py-2">Jugador</th>
                    <th class="px-4 py-2">Equipo</th>
                    <th class="px-4 py-2">Goles</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in tableScorers" :key="item.id">
                    <td class="border px-4 py-2">
                        {{ item.player.name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ item.team.name }}
                    </td>
                    <td class="border text-center px-4 py-2">
                        {{ item.numberOfGoals }}
                    </td>
                </tr>
            </tbody>
        </table>
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
